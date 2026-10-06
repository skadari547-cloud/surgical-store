<?php

session_start();

$pageTitle = "Change Password";


// Password change

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newPassword = trim($_POST['new_password']);
    $confirmPassword = trim($_POST['confirm_password']);

    $error = "";

    // Check empty
    if (empty($newPassword) || empty($confirmPassword)) {

        $error = "Please fill all fields.";
    }

    // Minimum password length
    elseif (strlen($newPassword) < 8) {

        $error = "Password must be at least 8 characters.";
    }

    // Check password match
    elseif ($newPassword !== $confirmPassword) {

        $error = "New password and confirm password do not match.";
    } else {

        // Store password in session for now.
        // Later this will be stored securely in MySQL.

        $_SESSION['user_password'] = password_hash(
            $newPassword,
            PASSWORD_DEFAULT
        );

        $_SESSION['password_success'] =
            "Your password has been changed successfully.";

        header("Location: profile.php");

        exit;
    }
}


include "includes/header.php";

?>

<section class="page-header">

    <div class="container">

        <h1>Change Password</h1>

        <p class="text-muted">
            Update your account password
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="form-card">

                    <div class="mb-4">

                        <h4>
                            <i class="bi bi-shield-lock me-2"></i>
                            Change Password
                        </h4>

                        <p class="text-muted mb-0">
                            Create a new password for your account.
                        </p>

                    </div>

                    <hr>


                    <?php if (!empty($error)): ?>

                        <div class="alert alert-danger">

                            <i class="bi bi-exclamation-circle me-2"></i>

                            <?= htmlspecialchars($error) ?>

                        </div>

                    <?php endif; ?>


                    <form method="POST">


                        <!-- New Password -->

                        <div class="mb-3">

                            <label class="form-label">
                                New Password
                            </label>

                            <div class="input-group">

                                <input
                                    type="password"
                                    name="new_password"
                                    id="newPassword"
                                    class="form-control"
                                    placeholder="Enter new password"
                                    data-validation="required strongPassword"
                                    required>

                                <span id="new_passwordError" class="text-danger small d-block mt-1"></span>

                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('newPassword', this)">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>

                            <small class="text-muted">
                                Password must be at least 8 characters.
                            </small>

                        </div>


                        <!-- Confirm Password -->

                        <div class="mb-4">

                            <label class="form-label">
                                Confirm New Password
                            </label>

                            <div class="input-group">

                                <input
                                    type="password"
                                    name="confirm_password"
                                    id="confirmPassword"
                                    class="form-control"
                                    placeholder="Confirm new password"
                                    data-validation="required confirmPassword"
                                    data-password-id="newPassword"
                                    required>

                                <span id="confirm_passwordError" class="text-danger small d-block mt-1"></span>

                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('confirmPassword', this)">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>

                        </div>


                        <!-- Buttons -->

                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-primary-custom">

                                <i class="bi bi-check-circle me-1"></i>

                                Change Password

                            </button>


                            <a
                                href="profile.php"
                                class="btn btn-outline-secondary">

                                Cancel

                            </a>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


<script>
    function togglePassword(inputId, button) {

        const input = document.getElementById(inputId);

        const icon = button.querySelector("i");

        if (input.type === "password") {

            input.type = "text";

            icon.classList.remove("bi-eye");

            icon.classList.add("bi-eye-slash");

        } else {

            input.type = "password";

            icon.classList.remove("bi-eye-slash");

            icon.classList.add("bi-eye");

        }

    }
</script>



<?php include "includes/footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="validation.js"></script>9