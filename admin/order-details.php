<?php
require 'layout.php';
adminStart('Order Details', 'orders');
?>
<div class="page-heading">
    <div><h2>Order #1001</h2><p>Manage order #1001 from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th></tr></thead>
            <tbody><tr><td>Surgical Gloves</td><td>5</td><td>₹250</td><td>₹1,250</td></tr><tr><td>Face Mask</td><td>10</td><td>₹120</td><td>₹1,200</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
