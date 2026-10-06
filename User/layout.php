<?php
/*
    COMMON USER LAYOUT
    Every logged-in/customer page uses this file.
    No database is required. Demo cart/wishlist values are stored in the browser.
*/
function userStart($pageTitle = 'Surgical Store', $activePage = '')
{
    if (session_status() === PHP_SESSION_NONE) session_start();
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
            <a class="<?= $activePage==='orders'?'active':'' ?>" href="orders.php">My Orders</a>
        </nav>
        <div class="nav-actions">
            <a href="wishlist.php" title="Wishlist"><i class="bi bi-heart"></i></a>
            <a href="cart.php" title="Cart"><i class="bi bi-cart3"></i><b id="cartCount">0</b></a>
            <a href="profile.php" title="Profile"><i class="bi bi-person"></i></a>
        </div>
    </div>
</header>

<main>
<?php
}
function userEnd()
{
?>
</main>
<footer class="footer">
    <div class="container footer-grid">
        <div><a class="logo footer-logo" href="index.php"><span class="logo-icon">SS</span> Surgical<span>Store</span></a><p>Reliable surgical and healthcare products delivered to your doorstep.</p></div>
        <div><h4>Quick Links</h4><a href="products.php">Products</a><a href="categories.php">Categories</a><a href="orders.php">My Orders</a></div>
        <div><h4>Account</h4><a href="profile.php">Profile</a><a href="change-password.php">Change Password</a><a href="logout.php">Logout</a></div>
        <div><h4>Support</h4><p><i class="bi bi-telephone"></i> +91 98765 43210</p><p><i class="bi bi-envelope"></i> support@surgicalstore.com</p></div>
    </div>
    <div class="copyright">© <?= date('Y') ?> Surgical Store. All rights reserved.</div>
</footer>
<script src="/SurgicalStore/js/script.js"></script>
<script src="/SurgicalStore/js/validation.js"></script>
</body>
</html>
<?php } ?>
