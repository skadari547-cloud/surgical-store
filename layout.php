<?php
function guestStart($pageTitle = 'Surgical Store', $activePage = '') { ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?> | Surgical Store</title>
<link rel="stylesheet" href="/SurgicalStore/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head><body>
<div class="announcement"><div class="container announcement-inner"><span><i class="bi bi-shield-check"></i> Trusted medical & surgical essentials</span><span><i class="bi bi-truck"></i> Free delivery above ₹999</span><span><i class="bi bi-headset"></i> Support: +91 98765 43210</span></div></div>
<header class="site-header"><div class="container nav-wrap">
<a class="logo" href="index.php"><span class="logo-icon"><i class="bi bi-heart-pulse-fill"></i></span><span>Surgical<span>Store</span></span></a>
<button class="menu-btn" type="button" onclick="toggleMenu()" aria-label="Open menu"><i class="bi bi-list"></i></button>
<nav id="mainNav">
<a class="<?= $activePage==='home'?'active':'' ?>" href="index.php">Home</a>
<a class="<?= $activePage==='products'?'active':'' ?>" href="products.php">Products</a>
<a class="<?= $activePage==='categories'?'active':'' ?>" href="categories.php">Categories</a>
<a class="<?= $activePage==='offers'?'active':'' ?>" href="offers.php">Offers</a>
<a class="<?= $activePage==='about'?'active':'' ?>" href="about.php">About</a>
<a class="<?= $activePage==='contact'?'active':'' ?>" href="contact.php">Contact</a>
</nav>
<div class="nav-actions"><a class="nav-icon" href="User/login.php" title="Cart"><i class="bi bi-cart3"></i></a><a class="login-link" href="User/login.php">Login</a><a class="btn primary small" href="User/register.php">Create Account</a></div>
</div></header><main>
<?php }
function guestEnd() { ?>
</main>
<footer class="footer"><div class="container footer-grid">
<div><a class="footer-brand" href="index.php"><span class="logo-icon"><i class="bi bi-heart-pulse-fill"></i></span><span>Surgical<span>Store</span></span></a><p>Professional healthcare supplies for homes, clinics and healthcare teams.</p><div class="footer-trust"><span><i class="bi bi-shield-check"></i> Quality focused</span><span><i class="bi bi-truck"></i> Home delivery</span></div></div>
<div><h4>Shop</h4><a href="products.php">All Products</a><a href="categories.php">Categories</a><a href="offers.php">Offers & Coupons</a><a href="services.php">Delivery Services</a></div>
<div><h4>Company</h4><a href="about.php">About Us</a><a href="contact.php">Contact Us</a><a href="User/login.php">Customer Login</a><a href="User/register.php">Create Account</a></div>
<div><h4>Need Help?</h4><p><i class="bi bi-telephone"></i> +91 98765 43210</p><p><i class="bi bi-envelope"></i> support@surgicalstore.com</p><p><i class="bi bi-geo-alt"></i> Rajkot, Gujarat</p></div>
</div><div class="copyright">© <?= date('Y') ?> Surgical Store. All rights reserved. <span>Demo / academic frontend</span></div></footer>
<script src="/SurgicalStore/js/script.js"></script><script src="/SurgicalStore/js/validation.js"></script></body></html>
<?php } ?>
