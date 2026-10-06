<?php
require 'layout.php';
adminStart('Edit Product', 'products');
?>
<div class="page-heading">
    <div><h2>Edit Product</h2><p>Update surgical product details.</p></div>
    <a href="products.php" class="btn">← Back</a>
</div>

<div class="card">
    <form data-validate onsubmit="showFormMessage(event, 'Product updated successfully!')" data-validate="" novalidate>
        <div class="form-grid">
            <div>
                <label>Product Name *</label>
                <input type="text" name="product_name" data-validation="required|alpha|min|max" data-min="2" data-max="100" required placeholder="Enter product name">
            </div>
            <div>
                <label>Category *</label>
                <select name="category" data-validation="required" required>
                    <option value="">Select category</option>
                    <option>Gloves</option><option>Protection</option><option>Equipment</option><option>Medicine</option>
                </select>
            </div>
            <div>
                <label>Price *</label>
                <input type="number" name="price" min="0" data-validation="required|numeric" required placeholder="Enter price">
            </div>
            <div>
                <label>Quantity *</label>
                <input type="number" name="quantity" min="0" data-validation="required|numeric" required placeholder="Enter quantity">
            </div>
            <div class="full-width">
                <label>Description</label>
                <textarea name="description" data-validation="min|max" data-min="10" data-max="500" rows="5" placeholder="Enter product description"></textarea>
            </div>
        </div>
        <button class="btn primary" type="submit">Update Product</button>
        <button class="btn" type="reset">Clear</button>
    </form>
</div>
<?php adminEnd(); ?>
