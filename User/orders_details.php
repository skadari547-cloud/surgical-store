<?php
$pageTitle = "Order Details";
include "includes/header.php";
?>

<section class="page-header">

    <div class="container">

        <h1>Order #ORD1002</h1>

        <p class="text-muted">
            Order details and status
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="filter-box mb-4">

            <div class="d-flex justify-content-between">

                <div>
                    <h5>Order Status</h5>
                    <span class="badge bg-warning text-dark">
                        Processing
                    </span>
                </div>

                <div>
                    <strong>Total: ₹1,798</strong>
                </div>

            </div>

        </div>


        <div class="filter-box">

            <h4>Products</h4>

            <hr>

            <div class="cart-item">

                <div class="row align-items-center">

                    <div class="col-md-2">

                        <img
                            src="https://images.unsplash.com/photo-1584982751601-97dcc096659c?auto=format&fit=crop&w=300&q=80"
                            class="img-fluid rounded"
                            alt="Product">

                    </div>

                    <div class="col-md-6">

                        <h6>Surgical Gloves</h6>

                        <p class="text-muted">
                            Quantity: 2
                        </p>

                    </div>

                    <div class="col-md-4 text-end">

                        <strong>
                            ₹598
                        </strong>

                    </div>

                </div>

            </div>


            <div class="cart-item">

                <div class="row align-items-center">

                    <div class="col-md-2">

                        <img
                            src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?auto=format&fit=crop&w=300&q=80"
                            class="img-fluid rounded"
                            alt="Product">

                    </div>

                    <div class="col-md-6">

                        <h6>Digital BP Monitor</h6>

                        <p class="text-muted">
                            Quantity: 1
                        </p>

                    </div>

                    <div class="col-md-4 text-end">

                        <strong>
                            ₹1,200
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include "includes/footer.php"; ?>