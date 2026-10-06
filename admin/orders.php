<?php
require 'layout.php';
adminStart('Orders', 'orders');
?>
<div class="page-heading">
    <div><h2>Orders</h2><p>Manage orders from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Order ID</th><th>Customer</th><th>Date</th><th>Amount</th><th>Status</th></tr></thead>
            <tbody><tr><td>#1001</td><td>Rahul Patel</td><td>30 Sep 2026</td><td>₹2,450</td><td>Delivered</td></tr><tr><td>#1002</td><td>Priya Shah</td><td>30 Sep 2026</td><td>₹1,800</td><td>Pending</td></tr><tr><td>#1003</td><td>Amit Joshi</td><td>29 Sep 2026</td><td>₹4,250</td><td>Processing</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
