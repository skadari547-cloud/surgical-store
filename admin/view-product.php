<?php
require 'layout.php';
adminStart('View Product', 'products');
?>
<div class="page-heading"><div><h2>Product Details</h2><p>View product information.</p></div><a href="products.php" class="btn">← Back</a></div>
<div class="card product-detail">
    <div class="product-placeholder"><i class="bi bi-box-seam"></i></div>
    <div>
        <h2>Surgical Gloves</h2>
        <p><strong>Product ID:</strong> P001</p>
        <p><strong>Category:</strong> Gloves</p>
        <p><strong>Price:</strong> ₹250</p>
        <p><strong>Stock:</strong> 80</p>
        <p><strong>Description:</strong> Disposable surgical gloves for medical use.</p>
        <a href="edit-products.php" class="btn primary">Edit Product</a>
    </div>
</div>
<?php adminEnd(); ?>
