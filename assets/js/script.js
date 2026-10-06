$(document).ready(function () {

    // Newsletter
    $(".newsletter-form").submit(function (e) {
        e.preventDefault();

        alert("Thank you for subscribing!");

        $(this)[0].reset();
    });


    // Add to Cart
    $(".add-cart").click(function () {

        let product = $(this).data("product");

        alert(product + " added to cart!");

    });


    // Wishlist
    $(".product-wishlist").click(function () {

        $(this).find("i").toggleClass("bi-heart bi-heart-fill");

    });


    // Quantity Plus
    $(".qty-plus").click(function () {

        let input = $(this).siblings(".qty-input");

        let value = parseInt(input.val());

        input.val(value + 1);

    });


    // Quantity Minus
    $(".qty-minus").click(function () {

        let input = $(this).siblings(".qty-input");

        let value = parseInt(input.val());

        if (value > 1) {
            input.val(value - 1);
        }

    });


    // Product Search
    $("#productSearch").on("keyup", function () {

        let value = $(this).val().toLowerCase();

        $(".product-item").filter(function () {

            $(this).toggle(
                $(this).text().toLowerCase().indexOf(value) > -1
            );

        });

    });


    // Password show/hide
    $(".toggle-password").click(function () {

        let input = $(this).siblings("input");

        if (input.attr("type") === "password") {

            input.attr("type", "text");

            $(this).removeClass("bi-eye");
            $(this).addClass("bi-eye-slash");

        } else {

            input.attr("type", "password");

            $(this).removeClass("bi-eye-slash");
            $(this).addClass("bi-eye");

        }

    });

});