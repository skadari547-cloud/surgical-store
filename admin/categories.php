<?php
require 'layout.php';
adminStart('Categories', 'categories');
?>
<div class="page-heading">
    <div><h2>Categories</h2><p>Manage categories from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>ID</th><th>Category Name</th><th>Products</th><th>Status</th><th>Action</th></tr></thead>
            <tbody><tr><td>C001</td><td>Gloves</td><td>18</td><td>Active</td><td>Edit</td></tr><tr><td>C002</td><td>Protection</td><td>24</td><td>Active</td><td>Edit</td></tr><tr><td>C003</td><td>Equipment</td><td>32</td><td>Active</td><td>Edit</td></tr><tr><td>C004</td><td>Medicine</td><td>54</td><td>Active</td><td>Edit</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
