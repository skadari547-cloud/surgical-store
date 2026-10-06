$(document).ready(function () {
  function validateField(input) {
    let field = $(input);
    let value = field.val() ? field.val().trim() : "";

    let name = field.attr("name");
    let errorSpan = $("#" + name + "Error");

    let validation = field.data("validation") || "";

    let min = field.data("min") || 0;
    let max = field.data("max") || 9999;

    let error = "";

    // Required
    if (validation.includes("required") && value === "") {
      error = "This field is required.";
    }

    // Email
    if (!error && validation.includes("email")) {
      let pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

      if (!pattern.test(value)) {
        error = "Please enter a valid email address.";
      }
    }

    // Alpha
    if (!error && validation.includes("alpha")) {
      if (!/^[A-Za-z\s]+$/.test(value)) {
        error = "Only letters are allowed.";
      }
    }

    // Numeric
    if (!error && validation.includes("numeric")) {
      if (!/^[0-9]+$/.test(value)) {
        error = "Only numbers are allowed.";
      }
    }

    // Minimum
    if (!error && validation.includes("min")) {
      if (value.length < min) {
        error = "Must be at least " + min + " characters.";
      }
    }

    // Maximum
    if (!error && validation.includes("max")) {
      if (value.length > max) {
        error = "Must be less than " + max + " characters.";
      }
    }

    // Strong Password
    if (!error && validation.includes("strongPassword")) {
      let passwordPattern =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,25}$/;

      if (!passwordPattern.test(value)) {
        error =
          "Password must contain uppercase, lowercase, number and special character.";
      }
    }

    // Confirm Password
    if (!error && validation.includes("confirmPassword")) {
      let passwordId = field.data("password-id");

      let password = $("#" + passwordId)
        .val()
        .trim();

      if (value !== password) {
        error = "Passwords do not match.";
      }
    }

    // Select
    if (!error && field.is("select") && validation.includes("required")) {
      if (value === "") {
        error = "Please select an option.";
      }
    }

    // Show error
    if (error) {
      errorSpan.text(error).show();

      field.removeClass("is-valid").addClass("is-invalid");
    } else {
      errorSpan.text("").hide();

      if (value !== "") {
        field.removeClass("is-invalid").addClass("is-valid");
      } else {
        field.removeClass("is-invalid is-valid");
      }
    }

    return error === "";
  }

  // Validate while typing
  $("input, textarea, select").on("input change", function () {
    validateField(this);
  });

  // Validate form
  $("form").on("submit", function (e) {
    let valid = true;

    $(this)
      .find("input, textarea, select")
      .each(function () {
        if (!validateField(this)) {
          valid = false;
        }
      });

    if (!valid) {
      e.preventDefault();
    }
  });
});
