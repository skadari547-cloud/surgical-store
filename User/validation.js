$(document).ready(function () {
    function validateField(input) {
        let field = $(input);
        let rawValue = field.val();
        let value = rawValue == null ? "" : String(rawValue).trim();
        let fieldName = field.attr("name") || "";
        let errorSpan = $("#" + fieldName + "Error");
        let validationType = field.data("validation") || "";
        let minLength = field.data("min") || 0;
        let maxLength = field.data("max") || 9999;
        let filesize = field.data("filesize") || 0;
        let minItems = field.data("min-items") || 0;
        let maxItems = field.data("max-items") || 9999;
        let fileTypes = field.data("filetypes") || "";
        let errorMessage = "";

        if (validationType != "" && fieldName != "") {
            if (validationType.includes("required") && value === "") {
                errorMessage = "This field is required.";
            }

            if (!errorMessage && validationType.includes("email")) {
                let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailPattern.test(value)) {
                    errorMessage = "Please enter a valid email address.";
                }
            }

            if (!errorMessage && validationType.includes("strongPassword")) {
                let pwdRegex =
                    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,25}$/;

                if (!pwdRegex.test(value)) {
                    errorMessage =
                        "Password must be at least 8 characters, include uppercase, lowercase, number, and special character.";
                }
            }

            if (!errorMessage && validationType.includes("confirmPassword")) {
                let password = $("#" + field.data("password-id")).val().trim();

                if (value !== password) {
                    errorMessage = "Passwords do not match.";
                }
            }

            if (
                !errorMessage &&
                validationType.includes("terms") &&
                !field.is(":checked")
            ) {
                errorMessage = "You must agree to the Terms & Conditions.";
            }

            if (
                !errorMessage &&
                validationType.includes("alpha") &&
                !/^[A-Za-z\s]+$/.test(value)
            ) {
                errorMessage = "Only letters are allowed.";
            }

            if (
                !errorMessage &&
                validationType.includes("numeric") &&
                !/^[0-9]+$/.test(value)
            ) {
                errorMessage = "Only numbers are allowed.";
            }

            if (
                !errorMessage &&
                validationType.includes("min") &&
                value.length < minLength
            ) {
                errorMessage = `Must be at least ${minLength} characters.`;
            }

            if (
                !errorMessage &&
                validationType.includes("max") &&
                value.length > maxLength
            ) {
                errorMessage = `Must be less than ${maxLength} characters.`;
            }

            if (
                !errorMessage &&
                field.attr("type") === "checkbox" &&
                (validationType.includes("min-items") ||
                    validationType.includes("max-items"))
            ) {
                let groupName = field.attr("name");
                let checkedCount =
                    $('input[name="' + groupName + '"]:checked').length;

                if (validationType.includes("min-items") && checkedCount < minItems) {
                    errorMessage = `Please select at least ${minItems} option(s).`;
                } else if (
                    validationType.includes("max-items") &&
                    checkedCount > maxItems
                ) {
                    errorMessage = `You can only select up to ${maxItems} option(s).`;
                }
            }

            if (!errorMessage && validationType.includes("file")) {
                if (field[0].files.length > 0) {
                    let file = field[0].files[0];
                    let fileName = file.name;
                    let fileSizeKB = file.size / 1024;
                    let fileExtension = fileName.split(".").pop().toLowerCase();

                    if (fileTypes && !fileTypes.split(",").includes(fileExtension)) {
                        errorMessage = "Only JPG, JPEG, or PNG files are allowed.";
                    } else if (
                        validationType.includes("filesize") &&
                        fileSizeKB > filesize
                    ) {
                        errorMessage = `File size must be less than ${filesize} KB.`;
                    }
                } else {
                    errorMessage = "Please upload a file.";
                }
            }

            if (
                !errorMessage &&
                field.is("select") &&
                validationType.includes("required") &&
                (value === "" || field.find("option:selected").index() === 0)
            ) {
                errorMessage = "Please select an option.";
            }

            let target =
                field.attr("type") === "checkbox"
                    ? $('input[name="' + field.attr("name") + '"]')
                    : field;

            if (errorMessage) {
                errorSpan.text(errorMessage).show();
                target.addClass("is-invalid").removeClass("is-valid");
            } else {
                errorSpan.text("").hide();
                target.removeClass("is-invalid").addClass("is-valid");
            }
        }
    }

    $("input, textarea, select").on("input change", function () {
        validateField(this);
    });

    $("form").on("submit", function (e) {
        let isValid = true;

        $(this)
            .find("input, textarea, select")
            .each(function () {
                validateField(this);

                let errorSpan = $("#" + $(this).attr("name") + "Error");

                if (errorSpan.text().trim() !== "") {
                    isValid = false;
                }
            });

        if (!isValid) {
            e.preventDefault();
        }
    });
});
