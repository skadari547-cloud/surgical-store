<?php
/*
    COMMON ADMIN LAYOUT
    This file contains the common header, sidebar and footer.
    Every admin page includes this file.

    Usage in any page:
        require 'layout.php';
        adminStart('Dashboard', 'dashboard');
        // page content here
        adminEnd();
*/

function adminStart($pageTitle = 'Admin Dashboard', $activePage = '')
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $isLoggedIn = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

    if (!$isLoggedIn && basename($_SERVER['PHP_SELF']) !== 'login.php') {
        header('Location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Surgical Store Admin</title>
    <link rel="stylesheet" href="/SurgicalStore/css/admin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<div class="admin-layout">

    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand-icon">SS</div>
            <div>
                <strong>Surgical Store</strong>
                <small>Admin Panel</small>
            </div>
        </div>

        <nav class="sidebar-menu">
            <a href="dashboard.php" class="<?= $activePage === 'dashboard' ? 'active' : '' ?>"><i class="bi bi-bar-chart-line"></i> <span>Dashboard</span></a>
            <a href="products.php" class="<?= $activePage === 'products' ? 'active' : '' ?>"><i class="bi bi-box-seam"></i> <span>Products</span></a>
            <a href="categories.php" class="<?= $activePage === 'categories' ? 'active' : '' ?>"><i class="bi bi-folder2-open"></i> <span>Categories</span></a>
            <a href="inventory.php" class="<?= $activePage === 'inventory' ? 'active' : '' ?>"><i class="bi bi-tags"></i> <span>Inventory</span></a>
            <a href="orders.php" class="<?= $activePage === 'orders' ? 'active' : '' ?>"><i class="bi bi-cart3"></i> <span>Orders</span></a>
            <a href="customers.php" class="<?= $activePage === 'customers' ? 'active' : '' ?>"><i class="bi bi-people"></i> <span>Customers</span></a>
            <a href="suppliers.php" class="<?= $activePage === 'suppliers' ? 'active' : '' ?>"><i class="bi bi-truck"></i> <span>Suppliers</span></a>
            <a href="sales-report.php" class="<?= $activePage === 'sales' ? 'active' : '' ?>"><i class="bi bi-graph-up"></i> <span>Sales Report</span></a>
            <a href="stock-report.php" class="<?= $activePage === 'stock' ? 'active' : '' ?>"><i class="bi bi-clipboard-data"></i> <span>Stock Report</span></a>
            <a href="coupons.php" class="<?= $activePage === 'coupons' ? 'active' : '' ?>"><i class="bi bi-ticket-perforated"></i> <span>Coupons</span></a>
            <a href="delivery-services.php" class="<?= $activePage === 'delivery' ? 'active' : '' ?>"><i class="bi bi-lightning-charge"></i> <span>Delivery Services</span></a>

            <div class="menu-title">ACCOUNT</div>
            <a href="profile.php" class="<?= $activePage === 'profile' ? 'active' : '' ?>"><i class="bi bi-person"></i> <span>Profile</span></a>
            <a href="settings.php" class="<?= $activePage === 'settings' ? 'active' : '' ?>"><i class="bi bi-gear"></i> <span>Settings</span></a>
            <a href="logout.php"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a>
        </nav>
    </aside>

    <main class="main-content">
        <header class="topbar">
            <button class="menu-button" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
            <div>
                <h1><?= htmlspecialchars($pageTitle) ?></h1>
                <p>Manage your surgical store</p>
            </div>
            <div class="topbar-user">
                <span><i class="bi bi-person"></i></span>
                <strong><?= htmlspecialchars($_SESSION['admin_name'] ?? 'Admin') ?></strong>
            </div>
        </header>

        <section class="page-content">
<?php
}

function adminEnd()
{
?>
        </section>

        <footer class="footer">
            <p>© <?= date('Y') ?> Surgical Store Admin Panel</p>
        </footer>
    </main>
</div>

<script src="/SurgicalStore/js/script.js"></script>
<script src="/SurgicalStore/js/validation.js"></script>
</body>
</html>
<?php
}
?>
