<?php
require 'layout.php';
adminStart('Customers', 'customers');
?>
<div class="page-heading">
    <div><h2>Customers</h2><p>Manage customers from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Orders</th></tr></thead>
            <tbody><tr><td>C001</td><td>Rahul Patel</td><td>rahul@example.com</td><td>9876543210</td><td>4</td></tr><tr><td>C002</td><td>Priya Shah</td><td>priya@example.com</td><td>9876543211</td><td>2</td></tr><tr><td>C003</td><td>Amit Joshi</td><td>amit@example.com</td><td>9876543212</td><td>6</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
