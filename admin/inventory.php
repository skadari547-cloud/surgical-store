<?php
require 'layout.php';
adminStart('Inventory', 'inventory');
?>
<div class="page-heading">
    <div><h2>Inventory</h2><p>Manage inventory from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Product</th><th>Current Stock</th><th>Minimum Stock</th><th>Status</th></tr></thead>
            <tbody><tr><td>Surgical Gloves</td><td>80</td><td>20</td><td>Available</td></tr><tr><td>Face Mask</td><td>12</td><td>20</td><td>Low Stock</td></tr><tr><td>BP Monitor</td><td>25</td><td>10</td><td>Available</td></tr><tr><td>Digital Thermometer</td><td>5</td><td>15</td><td>Low Stock</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
