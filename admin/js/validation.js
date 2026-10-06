// COMMON FORM VALIDATION
// This file handles basic browser-side validation for admin forms.

document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form[data-validate]');

    forms.forEach(function (form) {
        form.addEventListener('submit', function (event) {
            const requiredFields = form.querySelectorAll('[required]');
            let valid = true;

            requiredFields.forEach(function (field) {
                field.classList.remove('invalid');

                if (!field.value.trim()) {
                    field.classList.add('invalid');
                    valid = false;
                }
            });

            const emailFields = form.querySelectorAll('input[type="email"]');

            emailFields.forEach(function (field) {
                if (field.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
                    field.classList.add('invalid');
                    valid = false;
                }
            });

            if (!valid) {
                event.preventDefault();
                alert('Please fill all required fields correctly.');
            }
        });
    });
});
