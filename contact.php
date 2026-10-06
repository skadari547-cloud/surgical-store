
<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>


<div class="page-header">

    <div class="container">

        <h1>Contact Us</h1>

        <p>We are here to help you</p>

    </div>

</div>


<section class="form-section">

    <div class="container">

        <div class="row g-4">


            <!-- CONTACT INFORMATION -->

            <div class="col-lg-5">

                <div class="form-card">

                    <h3 class="mb-4">
                        Get In Touch
                    </h3>


                    <p class="text-muted">
                        Have a question about our products?
                        Contact us and our team will be happy to help.
                    </p>


                    <div class="mt-4">

                        <p>

                            <i class="bi bi-geo-alt-fill"
                               style="color:#087F8C;">
                            </i>

                            <strong>Address</strong><br>

                            Rajkot, Gujarat

                        </p>


                        <p>

                            <i class="bi bi-telephone-fill"
                               style="color:#087F8C;">
                            </i>

                            <strong>Phone</strong><br>

                            +91 98765 43210

                        </p>


                        <p>

                            <i class="bi bi-envelope-fill"
                               style="color:#087F8C;">
                            </i>

                            <strong>Email</strong><br>

                            info@surgicalstore.com

                        </p>

                    </div>

                </div>

            </div>


            <!-- CONTACT FORM -->

            <div class="col-lg-7">

                <div class="form-card">


                    <h3 class="mb-4">
                        Send Us a Message
                    </h3>


                    <form method="post" data-validate data-validate="" novalidate>


                        <!-- NAME -->

                        <div class="mb-3">

                            <label class="form-label">
                                Name
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Enter your name"
                                   data-validation="required|alpha">

                            <small id="nameError"
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
                                   placeholder="Enter your email"
                                   data-validation="required|email">

                            <small id="emailError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- PHONE -->

                        <div class="mb-3">

                            <label class="form-label">
                                Phone Number
                            </label>

                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   maxlength="10"
                                   placeholder="Enter phone number"
                                   data-validation="required|numeric|min|max"
                                   data-min="10"
                                   data-max="10">

                            <small id="phoneError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- SUBJECT -->

                        <div class="mb-3">

                            <label class="form-label">
                                Subject
                            </label>

                            <input type="text"
                                   name="subject"
                                   class="form-control"
                                   placeholder="Enter subject"
                                   data-validation="required">

                            <small id="subjectError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- MESSAGE -->

                        <div class="mb-3">

                            <label class="form-label">
                                Message
                            </label>

                            <textarea name="message"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Write your message"
                                      data-validation="required|min"
                                      data-min="10"></textarea>

                            <small id="messageError"
                                   class="error-message">
                            </small>

                        </div>


                        <!-- BUTTON -->

                        <button type="submit"
                                class="btn btn-primary">

                            <i class="bi bi-send"></i>

                            Send Message

                        </button>


                    </form>


                </div>

            </div>

        </div>

    </div>

</section>


<?php include "includes/footer.php"; ?>
