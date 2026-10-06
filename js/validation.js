/*
 * Surgical Store - Common Validation Logic
 * Used by Guest, User and Admin forms.
 * Validation rules:
 * required, email, strongPassword, min, max, confirmPassword,
 * terms, alpha, numeric, file, filesize, min-items, max-items.
 */
(function () {
    'use strict';

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const alphaPattern = /^[A-Za-z\s.'-]+$/;
    const numericPattern = /^[0-9]+$/;

    function getRules(field) {
        return (field.getAttribute('data-validation') || '')
            .replace(/[|,]+/g, ' ')
            .split(/\s+/)
            .filter(Boolean);
    }

    function getFieldKey(field) {
        return field.getAttribute('name') || field.getAttribute('id') || '';
    }

    function getErrorElement(field) {
        const key = getFieldKey(field);
        if (!key) return null;

        let error = document.getElementById(key + 'Error');
        if (!error) {
            error = field.parentElement && field.parentElement.querySelector('.field-error[data-for="' + CSS.escape(key) + '"]');
        }
        if (!error) {
            error = document.createElement('small');
            error.className = 'field-error';
            error.id = key + 'Error';
            error.setAttribute('data-for', key);
            field.insertAdjacentElement('afterend', error);
        }
        return error;
    }

    function setInvalid(field, message) {
        field.classList.remove('is-valid');
        field.classList.add('is-invalid');
        const error = getErrorElement(field);
        if (error) {
            error.textContent = message;
            error.hidden = false;
        }
        return false;
    }

    function setValid(field) {
        field.classList.remove('is-invalid');
        field.classList.add('is-valid');
        const error = getErrorElement(field);
        if (error) {
            error.textContent = '';
            error.hidden = true;
        }
        return true;
    }

    function clearState(field) {
        field.classList.remove('is-invalid', 'is-valid');
        const error = getErrorElement(field);
        if (error) {
            error.textContent = '';
            error.hidden = true;
        }
    }

    function validateField(field, form) {
        if (field.disabled || field.type === 'hidden' || field.type === 'submit' || field.type === 'button' || field.type === 'reset') {
            return true;
        }

        clearState(field);
        const rules = getRules(field);
        const value = field.type === 'file' ? '' : (field.value || '').trim();
        const required = field.hasAttribute('required') || rules.includes('required');
        const type = (field.getAttribute('type') || '').toLowerCase();

        // Required
        if (required) {
            if (type === 'checkbox' && !field.checked) {
                return setInvalid(field, 'This field is required.');
            }
            if (type === 'radio') {
                const group = form.querySelectorAll('input[type="radio"][name="' + CSS.escape(field.name) + '"]');
                if (![...group].some(radio => radio.checked)) {
                    return setInvalid(field, 'Please select an option.');
                }
            }
            if (field.tagName.toLowerCase() === 'select' && !value) {
                return setInvalid(field, 'Please select an option.');
            }
            if (type !== 'checkbox' && type !== 'radio' && type !== 'file' && !value) {
                return setInvalid(field, 'This field is required.');
            }
        }

        // Optional empty fields do not need further checks.
        if (!value && type !== 'file') {
            return setValid(field);
        }

        // Email
        if (rules.includes('email') || type === 'email') {
            if (!emailPattern.test(value)) {
                return setInvalid(field, 'Please enter a valid email address.');
            }
        }

        // Strong password: 8+, upper, lower, number and special character.
        if (rules.includes('strongPassword')) {
            const strong = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,25}$/;
            if (!strong.test(value)) {
                return setInvalid(field, 'Password must be 8-25 characters with uppercase, lowercase, number and special character.');
            }
        }

        // Confirm password
        if (rules.includes('confirmPassword')) {
            const passwordId = field.getAttribute('data-password-id');
            const passwordField = passwordId
                ? document.getElementById(passwordId)
                : form.querySelector('input[name="password"], input[name="new_password"]');
            if (!passwordField || value !== passwordField.value.trim()) {
                return setInvalid(field, 'Passwords do not match.');
            }
        }

        // Terms
        if (rules.includes('terms') && type === 'checkbox' && !field.checked) {
            return setInvalid(field, 'You must agree to the Terms & Conditions.');
        }

        // Alpha
        if (rules.includes('alpha') && !alphaPattern.test(value)) {
            return setInvalid(field, 'Only letters are allowed.');
        }

        // Numeric
        if (rules.includes('numeric') && !numericPattern.test(value)) {
            return setInvalid(field, 'Only numbers are allowed.');
        }

        // Min / Max character length
        const minLength = Number(field.getAttribute('data-min') || field.getAttribute('minlength') || 0);
        const maxLength = Number(field.getAttribute('data-max') || field.getAttribute('maxlength') || 0);
        if (rules.includes('min') && minLength && value.length < minLength) {
            return setInvalid(field, `Must be at least ${minLength} characters.`);
        }
        if (rules.includes('max') && maxLength && value.length > maxLength) {
            return setInvalid(field, `Must be less than ${maxLength} characters.`);
        }

        // Numeric HTML min/max
        if (field.hasAttribute('min') && type === 'number' && Number(value) < Number(field.getAttribute('min'))) {
            return setInvalid(field, `Value must be at least ${field.getAttribute('min')}.`);
        }
        if (field.hasAttribute('max') && type === 'number' && Number(value) > Number(field.getAttribute('max'))) {
            return setInvalid(field, `Value must not be greater than ${field.getAttribute('max')}.`);
        }

        // Pattern
        if (field.hasAttribute('pattern')) {
            try {
                const pattern = new RegExp('^(?:' + field.getAttribute('pattern') + ')$');
                if (!pattern.test(value)) return setInvalid(field, 'Please enter a valid value.');
            } catch (e) { /* Ignore malformed HTML patterns. */ }
        }

        // File validation
        if (rules.includes('file') || type === 'file') {
            const files = field.files || [];
            if (!files.length) {
                if (required || rules.includes('file')) return setInvalid(field, 'Please upload a file.');
                return setValid(field);
            }

            const file = files[0];
            const maxSizeKB = Number(field.getAttribute('data-filesize') || 0);
            const allowedTypes = (field.getAttribute('data-filetypes') || '')
                .split(',').map(x => x.trim().toLowerCase()).filter(Boolean);
            const extension = file.name.includes('.') ? file.name.split('.').pop().toLowerCase() : '';

            if (allowedTypes.length && !allowedTypes.includes(extension)) {
                return setInvalid(field, 'Allowed file types: ' + allowedTypes.join(', ').toUpperCase() + '.');
            }
            if (maxSizeKB && file.size / 1024 > maxSizeKB) {
                return setInvalid(field, `File size must be less than ${maxSizeKB} KB.`);
            }
        }

        return setValid(field);
    }

    function validateCheckboxGroup(form, field) {
        const name = field.getAttribute('name');
        if (!name) return true;
        const group = form.querySelectorAll('input[type="checkbox"][name="' + CSS.escape(name) + '"]');
        const checked = form.querySelectorAll('input[type="checkbox"][name="' + CSS.escape(name) + '"]:checked').length;
        const min = Number(field.getAttribute('data-min-items') || 0);
        const max = Number(field.getAttribute('data-max-items') || 999999);
        if (checked < min) return setInvalid(field, `Please select at least ${min} option(s).`);
        if (checked > max) return setInvalid(field, `You can only select up to ${max} option(s).`);
        group.forEach(item => {
            item.classList.remove('is-invalid');
            if (checked >= min && checked <= max) item.classList.add('is-valid');
        });
        return true;
    }

    function validateForm(form) {
        let valid = true;
        const fields = [...form.querySelectorAll('input, textarea, select')];

        fields.forEach(field => {
            if (!validateField(field, form)) valid = false;
        });

        const groups = new Set();
        fields.filter(f => f.type === 'checkbox' && (f.hasAttribute('data-min-items') || f.hasAttribute('data-max-items')))
            .forEach(field => {
                const key = field.name || field.id;
                if (!groups.has(key)) {
                    groups.add(key);
                    if (!validateCheckboxGroup(form, field)) valid = false;
                }
            });

        return valid;
    }

    function init() {
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function (event) {
                if (!validateForm(form)) {
                    event.preventDefault();
                    event.stopImmediatePropagation();
                    const firstInvalid = form.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.focus({ preventScroll: true });
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            }, true);

            form.querySelectorAll('input, textarea, select').forEach(field => {
                field.addEventListener('blur', () => validateField(field, form));
                field.addEventListener('input', () => {
                    if (field.classList.contains('is-invalid')) validateField(field, form);
                });
                field.addEventListener('change', () => validateField(field, form));
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
