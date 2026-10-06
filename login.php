
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>


<div class="page-header">

    <div class="container">

        <h1>Login</h1>

        <p>Login to your Surgical Store account</p>

    </div>

</div>


<section class="form-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="form-card">


                    <div class="text-center mb-4">

                        <i class="bi bi-person-circle"
                           style="font-size:55px;color:#087F8C;">
                        </i>

                        <h3 class="mt-3">
                            Welcome Back
                        </h3>

                        <p class="text-muted">
                            Login to continue shopping.
                        </p>

                    </div>


                    <form method="post" data-validate data-validate="" novalidate>


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


                        <!-- PASSWORD -->

                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Enter password"
                                   data-validation="required">

                            <small id="passwordError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- REMEMBER -->

                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">

                                <input class="form-check-input"
                                       type="checkbox"
                                       name="remember">

                                <label class="form-check-label">

                                    Remember me

                                </label>

                            </div>


                            <a href="#"
                               style="color:#087F8C;">

                                Forgot Password?

                            </a>

                        </div>


                        <!-- LOGIN BUTTON -->

                        <button type="submit"
                                class="btn btn-primary w-100">

                            <i class="bi bi-box-arrow-in-right"></i>

                            Login

                        </button>


                    </form>


                    <div class="text-center mt-4">

                        <p class="mb-0">

                            Don't have an account?

                            <a href="register.php"
                               style="color:#087F8C;font-weight:600;">

                                Create Account

                            </a>

                        </p>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<?php include "includes/footer.php"; ?>
