<?php

session_start();

$pageTitle = "Edit Profile";


// If user session does not exist
if (!isset($_SESSION['user'])) {

    $_SESSION['user'] = [
        "first_name" => "",
        "last_name" => "",
        "email" => "",
        "mobile" => "",
        "address" => "",
        "city" => "",
        "state" => "",
        "pincode" => "",
        "gender" => "",
        "date_of_birth" => ""
    ];
}


// Save profile information

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['user']['first_name'] =
        trim($_POST['first_name']);

    $_SESSION['user']['last_name'] =
        trim($_POST['last_name']);

    $_SESSION['user']['email'] =
        trim($_POST['email']);

    $_SESSION['user']['mobile'] =
        trim($_POST['mobile']);

    $_SESSION['user']['gender'] =
        trim($_POST['gender']);

    $_SESSION['user']['date_of_birth'] =
        trim($_POST['date_of_birth']);

    $_SESSION['user']['address'] =
        trim($_POST['address']);

    $_SESSION['user']['city'] =
        trim($_POST['city']);

    $_SESSION['user']['state'] =
        trim($_POST['state']);

    $_SESSION['user']['pincode'] =
        trim($_POST['pincode']);


    // Redirect to profile page

    header("Location: profile.php");

    exit;
}


$user = $_SESSION['user'];

include "includes/header.php";

?>

<section class="page-header">

    <div class="container">

        <h1>Edit Profile</h1>

        <p class="text-muted">
            Update your personal information
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">


                <div class="form-card">

                    <div class="mb-4">

                        <h4>
                            <i class="bi bi-person-gear me-2"></i>
                            Edit Personal Information
                        </h4>

                        <p class="text-muted">
                            Update your account details below.
                        </p>

                    </div>


                    <form method="POST" data-validate data-validate="" novalidate>


                        <!-- Name -->

                        <div class="row g-3">


                            <div class="col-md-6">

                                <label class="form-label">
                                    First Name
                                </label>

                                <input
                                    type="text"
                                    name="first_name"
                                    class="form-control"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="30"
                                    value="<?= htmlspecialchars($user['first_name']) ?>"
                                    required>

                                <span id="first_nameError" class="text-danger small d-block mt-1"></span>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Last Name
                                </label>

                                <input
                                    type="text"
                                    name="last_name"
                                    class="form-control"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="30"
                                    value="<?= htmlspecialchars($user['last_name']) ?>"
                                    required>

                                <span id="last_nameError" class="text-danger small d-block mt-1"></span>

                            </div>


                            <!-- Email -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    data-validation="required email"
                                    value="<?= htmlspecialchars($user['email']) ?>"
                                    required>

                                <span id="emailError" class="text-danger small d-block mt-1"></span>

                            </div>


                            <!-- Mobile -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Mobile Number
                                </label>

                                <input
                                    type="text"
                                    name="mobile"
                                    class="form-control"
                                    data-validation="required numeric min max"
                                    data-min="10"
                                    data-max="10"
                                    value="<?= htmlspecialchars($user['mobile']) ?>"
                                    required>

                                <span id="mobileError" class="text-danger small d-block mt-1"></span>

                            </div>


                            <!-- Gender -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Gender
                                </label>

                                <select
                                    name="gender"
                                    class="form-select"
                                    data-validation="required">

                                    <option value="">
                                        Select Gender
                                    </option>

                                    <option value="Male"
                                        <?= $user['gender'] == "Male" ? "selected" : "" ?>>
                                        Male
                                    </option>

                                    <option value="Female"
                                        <?= $user['gender'] == "Female" ? "selected" : "" ?>>
                                        Female
                                    </option>

                                    <option value="Other"
                                        <?= $user['gender'] == "Other" ? "selected" : "" ?>>
                                        Other
                                    </option>

                                </select>

                                <span id="genderError" class="text-danger small d-block mt-1"></span>
                            </div>


                            <!-- DOB -->

                            <div class="col-md-6">

                                <label class="form-label">
                                    Date of Birth
                                </label>

                                <input
                                    type="date"
                                    name="date_of_birth"
                                    class="form-control"
                                    value="<?= htmlspecialchars($user['date_of_birth']) ?>">

                            </div>


                            <!-- Address -->

                            <div class="col-12">

                                <label class="form-label">
                                    Address
                                </label>

                                <textarea
                                    name="address"
                                    class="form-control"
                                    data-validation="required min max"
                                    data-min="5"
                                    data-max="250"
                                    rows="3"
                                    placeholder="Enter your full address"><?= htmlspecialchars($user['address']) ?></textarea>

                                <span id="addressError" class="text-danger small d-block mt-1"></span>
                            </div>


                            <!-- City -->

                            <div class="col-md-4">

                                <label class="form-label">
                                    City
                                </label>

                                <input
                                    type="text"
                                    name="city"
                                    class="form-control"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="50"
                                    value="<?= htmlspecialchars($user['city']) ?>">

                                <span id="cityError" class="text-danger small d-block mt-1"></span>

                            </div>


                            <!-- State -->

                            <div class="col-md-4">

                                <label class="form-label">
                                    State
                                </label>

                                <input
                                    type="text"
                                    name="state"
                                    class="form-control"
                                    data-validation="required alpha min max"
                                    data-min="2"
                                    data-max="50"
                                    value="<?= htmlspecialchars($user['state']) ?>">

                                <span id="stateError" class="text-danger small d-block mt-1"></span>

                            </div>


                            <!-- PIN -->

                            <div class="col-md-4">

                                <label class="form-label">
                                    PIN Code
                                </label>

                                <input
                                    type="text"
                                    name="pincode"
                                    class="form-control"
                                    data-validation="required numeric min max"
                                    data-min="6"
                                    data-max="6"
                                    value="<?= htmlspecialchars($user['pincode']) ?>">

                                <span id="pincodeError" class="text-danger small d-block mt-1"></span>

                            </div>


                        </div>


                        <!-- Buttons -->

                        <div class="d-flex gap-2 mt-4">

                            <button
                                type="submit"
                                class="btn btn-primary-custom">

                                <i class="bi bi-check-circle me-1"></i>

                                Save Changes

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



<?php include "includes/footer.php"; ?>
