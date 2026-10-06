
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>


<div class="page-header">

    <div class="container">

        <h1>Create Account</h1>

        <p>Register with Surgical Store</p>

    </div>

</div>


<section class="form-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="form-card">


                    <div class="text-center mb-4">

                        <i class="bi bi-person-plus-fill"
                           style="font-size:50px;color:#087F8C;">
                        </i>

                        <h3 class="mt-3">
                            Create Your Account
                        </h3>

                        <p class="text-muted">
                            Fill in the details below to register.
                        </p>

                    </div>


                    <form method="post" data-validate data-validate="" novalidate>


                        <!-- FIRST NAME -->

                        <div class="mb-3">

                            <label class="form-label">
                                First Name
                            </label>

                            <input type="text"
                                   name="first_name"
                                   class="form-control"
                                   placeholder="Enter first name"
                                   data-validation="required|alpha">

                            <small id="first_nameError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- LAST NAME -->

                        <div class="mb-3">

                            <label class="form-label">
                                Last Name
                            </label>

                            <input type="text"
                                   name="last_name"
                                   class="form-control"
                                   placeholder="Enter last name"
                                   data-validation="required|alpha">

                            <small id="last_nameError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- EMAIL -->

                        <div class="mb-3">

                            <label class="form-label">
                                Email Address
                            </label>

                            <input type="text"
                                   name="email"
                                   class="form-control"
                                   placeholder="Enter email address"
                                   data-validation="required|email">

                            <small id="emailError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- MOBILE -->

                        <div class="mb-3">

                            <label class="form-label">
                                Mobile Number
                            </label>

                            <input type="text"
                                   name="mobile"
                                   class="form-control"
                                   maxlength="10"
                                   placeholder="Enter mobile number"
                                   data-validation="required|numeric|min|max"
                                   data-min="10"
                                   data-max="10">

                            <small id="mobileError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- PASSWORD -->

                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input type="password"
                                   name="password"
                                   id="password"
                                   class="form-control"
                                   placeholder="Enter password"
                                   data-validation="required|strongPassword">

                            <small id="passwordError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- CONFIRM PASSWORD -->

                        <div class="mb-3">

                            <label class="form-label">
                                Confirm Password
                            </label>

                            <input type="password"
                                   name="confirm_password"
                                   class="form-control"
                                   placeholder="Confirm password"
                                   data-validation="required|confirmPassword"
                                   data-password-id="password">

                            <small id="confirm_passwordError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- TERMS -->

                        <div class="mb-3">

                            <div class="form-check">

                                <input type="checkbox"
                                       name="terms"
                                       class="form-check-input"
                                       data-validation="required|terms">

                                <label class="form-check-label">

                                    I agree to the Terms & Conditions

                                </label>

                            </div>

                            <small id="termsError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- SUBMIT -->

                        <button type="submit"
                                class="btn btn-primary w-100">

                            <i class="bi bi-person-plus"></i>

                            Create Account

                        </button>


                    </form>


                    <div class="text-center mt-4">

                        Already have an account?

                        <a href="login.php"
                           style="color:#087F8C;font-weight:bold;">

                            Login

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<?php include "includes/footer.php"; ?>
