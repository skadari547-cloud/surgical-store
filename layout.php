<?php
/*
    COMMON GUEST LAYOUT
    Guest visitors can browse the store without logging in.
    Login/Register links point to the user side.
*/
function guestStart($pageTitle = 'Surgical Store', $activePage = '')
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Surgical Store</title>
    <link rel="stylesheet" href="/SurgicalStore/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="top-bar"><div class="container"><i class="bi bi-truck"></i> Free home delivery on orders above ₹999 <span> | </span> Secure online purchase</div></div>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="logo" href="index.php"><span class="logo-icon">SS</span> Surgical<span>Store</span></a>
        <button class="menu-btn" onclick="toggleMenu()"><i class="bi bi-list"></i></button>
        <nav id="mainNav">
            <a class="<?= $activePage==='home'?'active':'' ?>" href="index.php">Home</a>
            <a class="<?= $activePage==='products'?'active':'' ?>" href="products.php">Products</a>
            <a class="<?= $activePage==='categories'?'active':'' ?>" href="categories.php">Categories</a>
        </nav>
        <div class="nav-actions">
            <a href="User/cart.php"><i class="bi bi-cart3"></i><b id="cartCount">0</b></a>
            <a class="login-link" href="User/login.php">Login</a>
            <a class="btn primary small" href="User/register.php">Register</a>
        </div>
    </div>
</header>
<main>
<?php
}
function guestEnd()
{
?>
</main>
<footer class="footer">
    <div class="container footer-grid">
        <div><a class="logo footer-logo" href="index.php"><span class="logo-icon">SS</span> Surgical<span>Store</span></a><p>Browse surgical products before creating your account.</p></div>
        <div><h4>Shop</h4><a href="products.php">Products</a><a href="categories.php">Categories</a></div>
        <div><h4>Account</h4><a href="User/login.php">Login</a><a href="User/register.php">Create Account</a></div>
        <div><h4>Support</h4><p><i class="bi bi-telephone"></i> +91 98765 43210</p><p><i class="bi bi-envelope"></i> support@surgicalstore.com</p></div>
    </div>
    <div class="copyright">© <?= date('Y') ?> Surgical Store. All rights reserved.</div>
</footer>
<script src="/SurgicalStore/js/script.js"></script>
<script src="/SurgicalStore/js/validation.js"></script>
</body>
</html>
<?php } ?>
