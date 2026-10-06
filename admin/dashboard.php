<?php
require 'layout.php';
adminStart('Dashboard', 'dashboard');
?>

<div class="welcome-box">
    <div>
        <h2>Welcome to Surgical Store <i class="bi bi-person-check"></i></h2>
        <p>Manage products, orders, customers and inventory from one place.</p>
    </div>
    <a href="add-products.php" class="btn primary">+ Add Product</a>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-box-seam"></i></div>
        <div><span>Total Products</span><strong>128</strong></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-cart3"></i></div>
        <div><span>Total Orders</span><strong>46</strong></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-people"></i></div>
        <div><span>Customers</span><strong>84</strong></div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i class="bi bi-currency-rupee"></i></div>
        <div><span>Total Sales</span><strong>₹1,24,500</strong></div>
    </div>
</div>

<div class="content-grid">
    <div class="card">
        <div class="card-header">
            <h3>Recent Orders</h3>
            <a href="orders.php">View All</a>
        </div>
        <div class="table-wrap">
            <table>
                <thead><tr><th>Order</th><th>Customer</th><th>Amount</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>#1001</td><td>Rahul Patel</td><td>₹2,450</td><td><span class="badge success">Delivered</span></td></tr>
                    <tr><td>#1002</td><td>Priya Shah</td><td>₹1,800</td><td><span class="badge warning">Pending</span></td></tr>
                    <tr><td>#1003</td><td>Amit Joshi</td><td>₹4,250</td><td><span class="badge info">Processing</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><h3>Low Stock</h3><a href="inventory.php">View Stock</a></div>
        <ul class="simple-list">
            <li><span>Surgical Gloves</span><b>8 left</b></li>
            <li><span>Face Masks</span><b>12 left</b></li>
            <li><span>Digital Thermometer</span><b>5 left</b></li>
            <li><span>BP Monitor</span><b>6 left</b></li>
        </ul>
    </div>
</div>

<?php adminEnd(); ?>
