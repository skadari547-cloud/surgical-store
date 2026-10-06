<?php
require 'layout.php';
adminStart('Products', 'products');
?>
<div class="page-heading">
    <div><h2>Products</h2><p>View and manage surgical products.</p></div>
    <a href="add-products.php" class="btn primary">+ Add Product</a>
</div>

<div class="card">
    <div class="filter-row">
        <input type="search" id="tableSearch" placeholder="Search products..." onkeyup="searchTable('productTable')">
    </div>
    <div class="table-wrap">
        <table id="productTable">
            <thead>
                <tr><th>ID</th><th>Product</th><th>Category</th><th>Price</th><th>Stock</th><th>Status</th><th>Action</th></tr>
            </thead>
            <tbody>
                <tr><td>P001</td><td>Surgical Gloves</td><td>Gloves</td><td>₹250</td><td>80</td><td><span class="badge success">Available</span></td><td><a class="btn small" href="edit-products.php">Edit</a></td></tr>
                <tr><td>P002</td><td>Face Mask</td><td>Protection</td><td>₹120</td><td>12</td><td><span class="badge warning">Low Stock</span></td><td><a class="btn small" href="edit-products.php">Edit</a></td></tr>
                <tr><td>P003</td><td>BP Monitor</td><td>Equipment</td><td>₹1,850</td><td>25</td><td><span class="badge success">Available</span></td><td><a class="btn small" href="edit-products.php">Edit</a></td></tr>
            </tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
