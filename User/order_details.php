<?php
$pageTitle = "Order Details";
include "includes/header.php";
?>

<section class="page-header">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>
                <h1>Order Details</h1>

                <p class="text-muted mb-0">
                    View complete information about your order
                </p>
            </div>

            <a href="orders.php" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left me-2"></i>
                Back to Orders
            </a>

        </div>

    </div>

</section>


<section class="section">

    <div class="container">

        <!-- Order Header -->

        <div class="order-detail-header mb-4">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div class="d-flex align-items-center gap-3">

                        <div class="order-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>

                        <div>

                            <small class="text-muted">
                                Order ID
                            </small>

                            <h4 class="mb-1">
                                #SS-2026-00125
                            </h4>

                            <small class="text-muted">
                                Placed on September 28, 2026
                            </small>

                        </div>

                    </div>

                </div>


                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">

                    <span class="order-status delivered">
                        <i class="bi bi-check-circle me-1"></i>
                        Delivered
                    </span>

                </div>

            </div>

        </div>


        <div class="row g-4">

            <!-- LEFT SIDE -->

            <div class="col-lg-8">


                <!-- Order Items -->

                <div class="detail-card mb-4">

                    <div class="detail-card-header">

                        <h5>
                            <i class="bi bi-box-seam me-2"></i>
                            Ordered Products
                        </h5>

                        <span class="text-muted">
                            3 Items
                        </span>

                    </div>


                    <!-- Product 1 -->

                    <div class="order-product">

                        <div class="product-thumb">

                            <img
                                src="assets/images/surgical-gloves.jpg"
                                alt="Surgical Gloves">

                        </div>

                        <div class="product-details">

                            <h6>
                                Surgical Gloves
                            </h6>

                            <small>
                                Category: Surgical
                            </small>

                            <div class="mt-2">
                                Quantity: <strong>2</strong>
                            </div>

                        </div>

                        <div class="product-price">

                            ₹598

                        </div>

                    </div>


                    <!-- Product 2 -->

                    <div class="order-product">

                        <div class="product-thumb">

                            <img
                                src="assets/images/bp-monitor.jpg"
                                alt="Digital BP Monitor">

                        </div>

                        <div class="product-details">

                            <h6>
                                Digital BP Monitor
                            </h6>

                            <small>
                                Category: Equipment
                            </small>

                            <div class="mt-2">
                                Quantity: <strong>1</strong>
                            </div>

                        </div>

                        <div class="product-price">

                            ₹1,499

                        </div>

                    </div>


                    <!-- Product 3 -->

                    <div class="order-product">

                        <div class="product-thumb">

                            <img
                                src="assets/images/stethoscope.jpg"
                                alt="Stethoscope">

                        </div>

                        <div class="product-details">

                            <h6>
                                Stethoscope
                            </h6>

                            <small>
                                Category: Diagnostic
                            </small>

                            <div class="mt-2">
                                Quantity: <strong>1</strong>
                            </div>

                        </div>

                        <div class="product-price">

                            ₹899

                        </div>

                    </div>

                </div>


                <!-- Order Timeline -->

                <div class="detail-card mb-4">

                    <div class="detail-card-header">

                        <h5>
                            <i class="bi bi-truck me-2"></i>
                            Order Tracking
                        </h5>

                    </div>


                    <div class="order-timeline">

                        <!-- Delivered -->

                        <div class="timeline-item active">

                            <div class="timeline-icon">

                                <i class="bi bi-check-lg"></i>

                            </div>

                            <div class="timeline-content">

                                <h6>
                                    Order Delivered
                                </h6>

                                <p>
                                    Your order has been successfully delivered.
                                </p>

                                <small>
                                    September 28, 2026 · 11:30 AM
                                </small>

                            </div>

                        </div>


                        <!-- Out for Delivery -->

                        <div class="timeline-item active">

                            <div class="timeline-icon">

                                <i class="bi bi-truck"></i>

                            </div>

                            <div class="timeline-content">

                                <h6>
                                    Out for Delivery
                                </h6>

                                <p>
                                    Your order is on the way to your address.
                                </p>

                                <small>
                                    September 28, 2026 · 08:15 AM
                                </small>

                            </div>

                        </div>


                        <!-- Shipped -->

                        <div class="timeline-item active">

                            <div class="timeline-icon">

                                <i class="bi bi-box-seam"></i>

                            </div>

                            <div class="timeline-content">

                                <h6>
                                    Order Shipped
                                </h6>

                                <p>
                                    Your package has been shipped.
                                </p>

                                <small>
                                    September 27, 2026 · 04:20 PM
                                </small>

                            </div>

                        </div>


                        <!-- Processing -->

                        <div class="timeline-item active">

                            <div class="timeline-icon">

                                <i class="bi bi-gear"></i>

                            </div>

                            <div class="timeline-content">

                                <h6>
                                    Order Processing
                                </h6>

                                <p>
                                    Your order is being prepared.
                                </p>

                                <small>
                                    September 27, 2026 · 10:10 AM
                                </small>

                            </div>

                        </div>


                        <!-- Placed -->

                        <div class="timeline-item active">

                            <div class="timeline-icon">

                                <i class="bi bi-cart-check"></i>

                            </div>

                            <div class="timeline-content">

                                <h6>
                                    Order Placed
                                </h6>

                                <p>
                                    Your order has been successfully placed.
                                </p>

                                <small>
                                    September 27, 2026 · 09:45 AM
                                </small>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Delivery Address -->

                <div class="detail-card">

                    <div class="detail-card-header">

                        <h5>
                            <i class="bi bi-geo-alt me-2"></i>
                            Delivery Address
                        </h5>

                    </div>

                    <div class="address-box">

                        <h6>
                            Drashti Masani
                        </h6>

                        <p class="mb-1">
                            123, Main Road
                        </p>

                        <p class="mb-1">
                            Rajkot, Gujarat - 360001
                        </p>

                        <p class="mb-0">
                            <i class="bi bi-telephone me-2"></i>
                            +91 98765 43210
                        </p>

                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE -->

            <div class="col-lg-4">


                <!-- Price Summary -->

                <div class="detail-card mb-4">

                    <div class="detail-card-header">

                        <h5>
                            <i class="bi bi-receipt me-2"></i>
                            Order Summary
                        </h5>

                    </div>


                    <div class="price-row">

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            ₹2,996
                        </strong>

                    </div>


                    <div class="price-row">

                        <span>
                            Delivery
                        </span>

                        <strong class="text-success">
                            Free
                        </strong>

                    </div>


                    <div class="price-row">

                        <span>
                            Discount
                        </span>

                        <strong class="text-success">
                            -₹100
                        </strong>

                    </div>


                    <hr>


                    <div class="price-total">

                        <span>
                            Total Amount
                        </span>

                        <strong>
                            ₹2,896
                        </strong>

                    </div>

                </div>


                <!-- Payment -->

                <div class="detail-card mb-4">

                    <div class="detail-card-header">

                        <h5>
                            <i class="bi bi-credit-card me-2"></i>
                            Payment Details
                        </h5>

                    </div>


                    <div class="payment-info">

                        <div class="payment-icon">

                            <i class="bi bi-credit-card"></i>

                        </div>

                        <div>

                            <strong>
                                Online Payment
                            </strong>

                            <small class="d-block text-muted">
                                Card ending in **** 4582
                            </small>

                            <span class="payment-success">
                                <i class="bi bi-check-circle me-1"></i>
                                Paid
                            </span>

                        </div>

                    </div>

                </div>


                <!-- Need Help -->

                <div class="help-card">

                    <div class="help-icon">

                        <i class="bi bi-headset"></i>

                    </div>

                    <h5>
                        Need Help?
                    </h5>

                    <p>
                        Have questions about your order?
                        Our support team is here to help.
                    </p>

                    <a href="#" class="btn btn-primary-custom w-100">

                        <i class="bi bi-headset me-2"></i>

                        Contact Support

                    </a>

                </div>


                <!-- Download Invoice -->

                <a
                    href="#"
                    class="btn btn-outline-primary w-100 mt-3">

                    <i class="bi bi-download me-2"></i>

                    Download Invoice

                </a>

            </div>

        </div>

    </div>

</section>


<style>
    /* ================================
   ORDER DETAILS
================================ */

    .order-detail-header {

        background: #ffffff;

        border: 1px solid #e8eeee;

        border-radius: 16px;

        padding: 25px;

        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);

    }


    .order-icon {

        width: 55px;

        height: 55px;

        border-radius: 14px;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #e8f7f5;

        color: #159a8c;

        font-size: 25px;

    }


    .order-status {

        display: inline-flex;

        align-items: center;

        padding: 9px 16px;

        border-radius: 50px;

        font-size: 14px;

        font-weight: 600;

    }


    .order-status.delivered {

        background: #e8f7ee;

        color: #198754;

    }


    /* DETAIL CARD */

    .detail-card {

        background: #ffffff;

        border: 1px solid #e8eeee;

        border-radius: 16px;

        overflow: hidden;

        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);

    }


    .detail-card-header {

        display: flex;

        align-items: center;

        justify-content: space-between;

        padding: 20px 22px;

        border-bottom: 1px solid #edf1f1;

    }


    .detail-card-header h5 {

        margin: 0;

        font-weight: 600;

        color: #263c3b;

    }


    /* PRODUCTS */

    .order-product {

        display: flex;

        align-items: center;

        gap: 18px;

        padding: 20px 22px;

        border-bottom: 1px solid #edf1f1;

    }


    .order-product:last-child {

        border-bottom: none;

    }


    .product-thumb {

        width: 85px;

        height: 85px;

        flex-shrink: 0;

        background: #f5f8f8;

        border-radius: 12px;

        overflow: hidden;

    }


    .product-thumb img {

        width: 100%;

        height: 100%;

        object-fit: cover;

    }


    .product-details {

        flex: 1;

    }


    .product-details h6 {

        margin-bottom: 5px;

        font-weight: 600;

        color: #263c3b;

    }


    .product-details small {

        color: #788786;

    }


    .product-price {

        font-size: 16px;

        font-weight: 700;

        color: #159a8c;

    }


    /* TIMELINE */

    .order-timeline {

        padding: 25px;

    }


    .timeline-item {

        position: relative;

        display: flex;

        gap: 15px;

        padding-bottom: 28px;

    }


    .timeline-item:last-child {

        padding-bottom: 0;

    }


    .timeline-item:not(:last-child)::before {

        content: "";

        position: absolute;

        left: 18px;

        top: 38px;

        width: 2px;

        height: calc(100% - 18px);

        background: #d9eeee;

    }


    .timeline-icon {

        position: relative;

        z-index: 2;

        width: 38px;

        height: 38px;

        flex-shrink: 0;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #159a8c;

        color: white;

    }


    .timeline-content h6 {

        margin-bottom: 4px;

        font-weight: 600;

    }


    .timeline-content p {

        margin-bottom: 4px;

        color: #6c7c7b;

        font-size: 14px;

    }


    .timeline-content small {

        color: #9aa8a7;

    }


    /* ADDRESS */

    .address-box {

        padding: 22px;

        background: #f8fbfb;

        margin: 20px;

        border-radius: 12px;

    }


    .address-box h6 {

        font-weight: 600;

        margin-bottom: 10px;

    }


    .address-box p {

        color: #667675;

        font-size: 14px;

    }


    /* PRICE */

    .price-row {

        display: flex;

        justify-content: space-between;

        padding: 12px 22px;

        color: #667675;

    }


    .price-row strong {

        color: #263c3b;

    }


    .price-total {

        display: flex;

        justify-content: space-between;

        padding: 5px 22px 22px;

        font-size: 17px;

        font-weight: 600;

    }


    .price-total strong {

        color: #159a8c;

        font-size: 20px;

    }


    /* PAYMENT */

    .payment-info {

        display: flex;

        align-items: center;

        gap: 15px;

        padding: 22px;

    }


    .payment-icon {

        width: 50px;

        height: 50px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 12px;

        background: #e8f7f5;

        color: #159a8c;

        font-size: 22px;

    }


    .payment-info strong {

        color: #263c3b;

    }


    .payment-success {

        display: inline-block;

        margin-top: 5px;

        color: #198754;

        font-size: 13px;

        font-weight: 600;

    }


    /* HELP */

    .help-card {

        padding: 25px;

        border-radius: 16px;

        background: #e8f7f5;

        text-align: center;

    }


    .help-icon {

        width: 55px;

        height: 55px;

        margin: 0 auto 15px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #ffffff;

        color: #159a8c;

        font-size: 23px;

    }


    .help-card h5 {

        font-weight: 600;

        color: #263c3b;

    }


    .help-card p {

        color: #637473;

        font-size: 14px;

        line-height: 1.6;

    }


    /* RESPONSIVE */

    @media (max-width: 576px) {

        .order-detail-header {

            padding: 18px;

        }


        .order-product {

            gap: 12px;

            padding: 16px;

        }


        .product-thumb {

            width: 65px;

            height: 65px;

        }


        .product-price {

            font-size: 14px;

        }


        .order-timeline {

            padding: 20px 16px;

        }


        .timeline-content p {

            font-size: 13px;

        }


        .detail-card-header {

            padding: 17px;

        }

    }
</style>


<?php include "includes/footer.php"; ?>