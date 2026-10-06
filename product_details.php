<?php

session_start();

$pageTitle = "Product Details";

include "includes/header.php";


// Product information
$product = [
    "name" => "Professional Surgical Gloves",
    "category" => "Surgical Supplies",
    "price" => 299,
    "old_price" => 399,
    "image" => "surgical-gloves.jpg",
    "description" => "High-quality disposable surgical gloves suitable for hospitals, clinics and healthcare professionals."
];


// ==============================
// ADD TO CART
// ==============================

if (isset($_POST['add_to_cart'])) {

    $quantity = (int)($_POST['quantity'] ?? 1);

    if ($quantity < 1) {
        $quantity = 1;
    }


    // Create cart if not exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }


    $found = false;


    // Check product already exists
    foreach ($_SESSION['cart'] as &$item) {

        if ($item['name'] === $product['name']) {

            $item['quantity'] += $quantity;

            $found = true;

            break;
        }
    }

    unset($item);


    // Add new product
    if (!$found) {

        $_SESSION['cart'][] = [
            "name" => $product['name'],
            "category" => $product['category'],
            "price" => $product['price'],
            "image" => $product['image'],
            "quantity" => $quantity
        ];
    }


    $_SESSION['cart_message'] =
        $product['name'] . " has been added to your cart.";


    header("Location: product_details.php");

    exit;
}



// ==============================
// WISHLIST
// ==============================

if (isset($_POST['wishlist_action'])) {

    if (!isset($_SESSION['wishlist'])) {
        $_SESSION['wishlist'] = [];
    }


    $wishlistIndex = -1;


    // Check product in wishlist
    foreach ($_SESSION['wishlist'] as $index => $item) {

        if ($item['name'] === $product['name']) {

            $wishlistIndex = $index;

            break;
        }
    }


    // Remove from wishlist
    if ($wishlistIndex >= 0) {

        unset($_SESSION['wishlist'][$wishlistIndex]);

        $_SESSION['wishlist'] =
            array_values($_SESSION['wishlist']);

        $_SESSION['wishlist_message'] =
            $product['name'] . " removed from wishlist.";
    }

    // Add to wishlist
    else {

        $_SESSION['wishlist'][] = [
            "name" => $product['name'],
            "category" => $product['category'],
            "price" => "₹" . number_format($product['price']),
            "image" => $product['image']
        ];

        $_SESSION['wishlist_message'] =
            $product['name'] . " added to wishlist.";
    }


    header("Location: product_details.php");

    exit;
}



// ==============================
// CHECK WISHLIST STATUS
// ==============================

$isWishlisted = false;


if (isset($_SESSION['wishlist'])) {

    foreach ($_SESSION['wishlist'] as $item) {

        if ($item['name'] === $product['name']) {

            $isWishlisted = true;

            break;
        }
    }
}

?>


<section class="page-header">

    <div class="container">

        <h1>Product Details</h1>

        <p class="text-muted">
            View product information
        </p>

    </div>

</section>



<section class="section">

    <div class="container">


        <!-- SUCCESS MESSAGES -->

        <?php if (isset($_SESSION['cart_message'])) { ?>

            <div class="alert alert-success alert-dismissible fade show">

                <i class="bi bi-check-circle me-2"></i>

                <?= htmlspecialchars($_SESSION['cart_message']) ?>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

            <?php unset($_SESSION['cart_message']); ?>

        <?php } ?>


        <?php if (isset($_SESSION['wishlist_message'])) { ?>

            <div class="alert alert-info alert-dismissible fade show">

                <i class="bi bi-heart me-2"></i>

                <?= htmlspecialchars($_SESSION['wishlist_message']) ?>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

            <?php unset($_SESSION['wishlist_message']); ?>

        <?php } ?>



        <div class="row g-5">


            <!-- PRODUCT IMAGE -->

            <div class="col-lg-6">

                <img
                    src="/SurgicalStore/images/<?= htmlspecialchars($product['image']) ?>"
                    class="detail-image"
                    alt="<?= htmlspecialchars($product['name']) ?>">

            </div>



            <!-- PRODUCT INFORMATION -->

            <div class="col-lg-6">


                <span class="product-category">

                    <?= htmlspecialchars($product['category']) ?>

                </span>



                <h1 class="mt-2">

                    <?= htmlspecialchars($product['name']) ?>

                </h1>



                <!-- RATING -->

                <div class="rating my-3">

                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>

                    <span class="text-muted">

                        (125 Reviews)

                    </span>

                </div>



                <!-- REVIEWS BUTTON -->

                <div class="mb-3">

                    <a
                        href="reviews.php"
                        class="btn btn-outline-custom">

                        <i class="bi bi-star me-1"></i>

                        Write a Review

                    </a>

                </div>



                <!-- PRICE -->

                <h2 class="product-price">

                    ₹<?= number_format($product['price']) ?>

                    <span class="old-price">

                        ₹<?= number_format($product['old_price']) ?>

                    </span>

                </h2>



                <!-- DESCRIPTION -->

                <p class="text-muted mt-4">

                    <?= htmlspecialchars($product['description']) ?>

                </p>



                <hr>



                <!-- ADD TO CART FORM -->

                <form method="POST" action="product_details.php" data-validate data-validate="" novalidate>


                    <h6>
                        Quantity
                    </h6>


                    <div class="quantity-box my-3">

                        <button
                            type="button"
                            class="qty-minus">

                            -

                        </button>


                        <input
                            type="text"
                            name="quantity"
                            class="qty-input"
                            value="1" data-validation="required|numeric|min|max" data-min="1" data-max="99" required>


                        <button
                            type="button"
                            class="qty-plus">

                            +

                        </button>

                    </div>



                    <!-- ACTION BUTTONS -->

                    <div class="d-flex gap-2">


                        <!-- ADD TO CART -->

                        <button
                            type="submit"
                            name="add_to_cart"
                            class="btn btn-primary-custom">

                            <i class="bi bi-cart-plus"></i>

                            Add to Cart

                        </button>



                        <!-- WISHLIST -->

                        <button
                            type="submit"
                            name="wishlist_action"
                            class="btn btn-outline-custom">


                            <?php if ($isWishlisted) { ?>

                                <i class="bi bi-heart-fill text-danger"></i>

                                Remove Wishlist

                            <?php } else { ?>

                                <i class="bi bi-heart"></i>

                                Wishlist

                            <?php } ?>


                        </button>


                    </div>

                </form>



                <!-- PRODUCT FEATURES -->

                <div class="mt-4">


                    <p>

                        <strong>

                            <i class="bi bi-check-circle text-success"></i>

                            In Stock

                        </strong>

                    </p>



                    <p>

                        <i class="bi bi-truck"></i>

                        Free delivery available

                    </p>



                    <p>

                        <i class="bi bi-shield-check"></i>

                        Secure payment

                    </p>


                </div>


            </div>

        </div>

    </div>

</section>



<?php include "includes/footer.php"; ?>