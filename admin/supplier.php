<?php

$pageTitle = "Suppliers - Surgical Store";

include "includes/header.php";
include "includes/sidebar.php";

?>

<main class="main-content">

    <?php include "includes/navbar.php"; ?>

    <div class="page-content">

        <div class="page-header">

            <div>

                <h2 class="page-title">
                    Suppliers
                </h2>

                <p class="page-subtitle">
                    Manage your suppliers
                </p>

            </div>


            <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#supplierModal">

                <i class="bi bi-plus-circle"></i>
                Add Supplier

            </button>

        </div>


        <div class="dashboard-panel">

            <div class="panel-header">

                <h5>
                    Supplier List
                </h5>

            </div>


            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th>#</th>
                            <th>Supplier Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>
                                Medico Supplies
                            </td>

                            <td>
                                medico@example.com
                            </td>

                            <td>
                                9876543210
                            </td>

                            <td>

                                <span class="status-badge status-success">
                                    Active
                                </span>

                            </td>

                        </tr>


                        <tr>

                            <td>2</td>

                            <td>
                                HealthCare Distributors
                            </td>

                            <td>
                                health@example.com
                            </td>

                            <td>
                                9876543211
                            </td>

                            <td>

                                <span class="status-badge status-success">
                                    Active
                                </span>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>


<!-- SUPPLIER MODAL -->

<div class="modal fade"
     id="supplierModal"
     tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Add Supplier
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>


            <form action="#" method="post" data-validate data-validate="" novalidate>

                <div class="modal-body">


                    <label class="form-label">
                        Supplier Name
                    </label>

                    <input
                        type="text"
                        name="supplierName"
                        class="form-control"
                        placeholder="Enter supplier name"
                        data-validation="required alpha min max"
                        data-min="2"
                        data-max="100">

                    <span
                        id="supplierNameError"
                        class="text-danger small">
                    </span>


                    <label class="form-label mt-3">
                        Email
                    </label>

                    <input
                        type="text"
                        name="email"
                        class="form-control"
                        placeholder="Enter email"
                        data-validation="required email">

                    <span
                        id="emailError"
                        class="text-danger small">
                    </span>


                    <label class="form-label mt-3">
                        Phone
                    </label>

                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        placeholder="Enter 10 digit phone number"
                        data-validation="required numeric min max"
                        data-min="10"
                        data-max="10">

                    <span
                        id="phoneError"
                        class="text-danger small">
                    </span>


                    <label class="form-label mt-3">
                        Address
                    </label>

                    <textarea
                        name="address"
                        class="form-control"
                        rows="3"
                        placeholder="Enter address"
                        data-validation="required min"
                        data-min="5"></textarea>

                    <span
                        id="addressError"
                        class="text-danger small">
                    </span>

                </div>


                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        Add Supplier

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<?php include "includes/footer.php"; ?>

</body>
</html>