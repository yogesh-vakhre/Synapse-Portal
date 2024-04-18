(function () {
    /*
    |--------------------------------------------------------------------------
    | Global Form Validation JavaScript
    |--------------------------------------------------------------------------
    |
    | This section contains custom global scripts accessible to all users.
    | These scripts are loaded globally and are available for use throughout the application.
    | Let's create something amazing!
    |
    */

    // Set defaults validation configuration
    jQuery.validator.setDefaults({
        errorClass: "is-invalid",
        validClass: "is-valid",
        errorElement: "div",
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
            $(element).next("div").addClass("invalid-feedback");
        },
    });

    // Add custom validation  for special character
    jQuery.validator.addMethod(
        "specialChar",
        function (value, element) {
            return /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(value);
        },
        "At least one special character is required."
    );

    // Add custom validation for number
    jQuery.validator.addMethod(
        "number",
        function (value, element) {
            return /[0-9]/.test(value);
        },
        "At least one number is required."
    );

    // Unique password
    jQuery.validator.addMethod(
        "uniquePassword",
        function (value, element) {
            // You would need to implement this method to check if the password is unique.
            return true; // For simplicity, we'll return true here.
        },
        "Password can't be the same as a previous password."
    );

    // New password match
    jQuery.validator.addMethod(
        "equalToNewPassword",
        function (value, element, param) {
            return value === $(param).val();
        },
        "Passwords must match."
    );

    // Custom method to disallow spaces
    jQuery.validator.addMethod(
        "noSpace",
        function (value, element) {
            return value.indexOf(" ") == -1;
        },
        "Spaces are not allowed"
    );

    // Custom method to allow only alphanumeric characters
    jQuery.validator.addMethod(
        "alphanumeric",
        function (value, element) {
            return /^[a-zA-Z0-9]+$/.test(value);
        },
        "Only alphanumeric characters are allowed"
    );

    // Custom method to allow only characters
    jQuery.validator.addMethod(
        "characters",
        function (value, element) {
            return /^[a-zA-Z]+$/.test(value);
        },
        "Only characters are allowed"
    );

    // Custom method to ensure strong password
    jQuery.validator.addMethod(
        "strongPassword",
        function (value, element) {
            // At least 8 characters, with at least one uppercase letter, one lowercase letter, one number, and one special character
            return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(
                value
            );
        },
        "Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character"
    );

    // Custom method to prevent common SQL injection characters
    jQuery.validator.addMethod(
        "noSQLInjection",
        function (value, element) {
            // Avoid common SQL injection characters
            return /^[^'"<>&;]*$/.test(value);
        },
        "Input contains invalid characters"
    );

    // forgot password validation
    if ($("#form-forgot-password").length > 0) {
        $("#form-forgot-password").validate({
            rules: {
                email: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    email: true,
                    maxlength: 50,
                },
            },
            messages: {
                email: {
                    required: "Email is required.",
                    email: "Email must be a valid email address.",
                    noSpace: "Spaces are not allowed in the email",
                    noSQLInjection: "Input contains invalid characters",
                    maxlength: "Email cannot be more than 50 characters.",
                },
            },
        });
    }

    // Sign in validation
    if ($("#form-login").length > 0) {
        $("#form-login").validate({
            rules: {
                email: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    email: true,
                    maxlength: 50,
                },
                password: {
                    required: true,
                    noSpace: true,
                    minlength: 5,
                    noSQLInjection: true,
                },
            },
            messages: {
                email: {
                    required: "Email is required.",
                    email: "Email must be a valid email address.",
                    noSpace: "Spaces are not allowed in the email",
                    noSQLInjection: "Input contains invalid characters",
                    maxlength: "Email cannot be more than 50 characters.",
                },
                password: {
                    required: "Password is required.",
                    noSpace: "Spaces are not allowed in the password",
                    minlength: "Password must be at least 5 characters.",
                },
            },
            errorPlacement: function (error, element) {
                if (element.is(":password")) {
                    // error append here
                    error.appendTo("#custom-password");
                } else {
                    error.insertAfter(element);
                }
            },
        });
    }

    // 2fa validation
    if ($("#form-2fa").length > 0) {
        $("#form-2fa").validate({
            rules: {
                code: {
                    required: true,
                    number: true,
                    noSpace: true,
                    noSQLInjection: true,
                    maxlength: 4,
                    minlength: 1,
                },
            },
            messages: {
                code: {
                    required: "Code is required.",
                    maxlength: "Code cannot be more than 4 characters.",
                    minlength: "Code must be at least 1 characters.",
                },
            },
        });
    }

    // google 2fa disable validation
    if ($("#form-google-2fa-disable").length > 0) {
        $("#form-google-2fa-disable").validate({
            rules: {
                currentPassword: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    minlength: 5,
                },
            },
            messages: {
                currentPassword: {
                    required: "Current Password is required.",
                    minlength:
                        "Current Password must be at least 5 characters.",
                },
            },
        });
    }

    // googel 2FA validation
    if ($("#form-google2fa-verify").length > 0) {
        $("#form-google2fa-verify").validate({
            rules: {
                one_time_password: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    number: true,
                    minlength: 1,
                    maxlength: 6,
                },
            },
            messages: {
                one_time_password: {
                    required: "OTP password code is required.",
                    minlength: "OTP password must be at least 1 number.",
                    maxlength:
                        "OTP password code cannot be more than 6 numbers.",
                },
            },
        });
    }

    // Logout other device form validation
    if ($("#form-logout-other-device").length > 0) {
        $("#form-logout-other-device").validate({
            rules: {
                currentPassword: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                },
                confirmPassword: {
                    noSpace: true,
                    noSQLInjection: true,
                    equalTo: "#currentPassword",
                },
            },
            messages: {
                currentPassword: {
                    required: "Current Password is required.",
                },
            },

            errorPlacement: function (error, element) {
                if (element.is("#currentPassword")) {
                    // error append here
                    error.appendTo("#currentPasswordError");
                } else if (element.is("#confirmPassword")) {
                    // error append here
                    error.appendTo("#confirmPasswordError");
                } else {
                    error.insertAfter(element);
                }
            },
        });
    }

    // Update password form validation
    if ($("#form-update-password").length > 0) {
        $("#form-update-password").validate({
            rules: {
                currentPassword: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                },
                newPassword: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    uniquePassword: true,
                    strongPassword: true,
                },
                confirmNewPassword: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    equalTo: "#newPassword",
                },
            },
            messages: {
                currentPassword: {
                    required: "Please enter your current password.",
                },
                newPassword: {
                    required: "Please enter a new password.",
                    minlength: "Password must be at least 8 characters long.",
                },
                confirmNewPassword: {
                    required: "Please confirm your new password.",
                },
            },
        });
    }

    // Reset password form validation
    if ($("#form-reset-password").length > 0) {
        $("#form-reset-password").validate({
            rules: {
                password: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    strongPassword: true,
                },
                password_confirmation: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    equalTo: "#password",
                },
            },
            messages: {
                password: {
                    required: "Please enter a new password.",
                },
                password_confirmation: {
                    required: "Please confirm your new password.",
                },
            },
            errorPlacement: function (error, element) {
                if (element.is("#password")) {
                    // error append here
                    error.appendTo("#custom_password_error");
                } else if (element.is("#password_confirmation")) {
                    // error append here
                    error.appendTo("#password_confirmation_error");
                } else {
                    error.insertAfter(element);
                }
            },
        });
    }

    // Skyline user form validation
    if ($("#skyline-user-form").length > 0) {
        $("#skyline-user-form").validate({
            rules: {
                first_name: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    maxlength: 30,
                },
                last_name: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    maxlength: 30,
                },
                notes: {
                    required: false,
                    noSQLInjection: true,
                },
                /*address: {
                    required: true,
                    noSQLInjection: true,
                    maxlength: 50,
                },
                date_of_birth: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                },
                password: {
                    required: true,
                    noSpace: true,
                    strongPassword: true,
                },
                */
                email: {
                    required: true,
                    noSpace: true,
                    noSQLInjection: true,
                    email: true,
                    maxlength: 50,
                },
            },
            messages: {
                first_name: {
                    required: "First name is required.",
                    noSpace: "Spaces are not allowed in the first name",
                    noSQLInjection: "First name contains invalid characters",
                    maxlength: "First name cannot be more than 30 characters.",
                },
                last_name: {
                    required: "Last name is required.",
                    noSpace: "Spaces are not allowed in the last name",
                    noSQLInjection: "Last name contains invalid characters",
                    maxlength: "Last name cannot be more than 30 characters.",
                },
                 notes: {
                    required: "Notes is required.",
                    noSQLInjection: "Notes contains invalid characters",
                },
                /*address: {
                    required: "Address is required.",
                    noSpace: "Spaces are not allowed in the address",
                    noSQLInjection: "Address contains invalid characters",
                    maxlength: "Address cannot be more than 30 characters.",
                },
                date_of_birth: {
                    required: "Date of birth is required.",
                    noSpace: "Spaces are not allowed in the date of birth",
                    noSQLInjection: "Date of birth contains invalid characters",
                },*/
                email: {
                    required: "Email is required.",
                    email: "Email must be a valid email address.",
                    noSpace: "Spaces are not allowed in the email",
                    noSQLInjection: "Email contains invalid characters",
                    maxlength: "Email cannot be more than 50 characters.",
                },
            },
            /*errorPlacement: function (error, element) {
                if (element.is("#password")) {
                    // error append here
                    error.appendTo("#custom_password_error");
                } else {
                    error.insertAfter(element);
                }
            },*/
        });
    }

})();
