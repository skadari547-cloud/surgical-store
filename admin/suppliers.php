<?php
require 'layout.php';
adminStart('Suppliers', 'suppliers');
?>
<div class="page-heading">
    <div><h2>Suppliers</h2><p>Manage suppliers from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>ID</th><th>Supplier</th><th>Contact</th><th>Phone</th><th>Status</th></tr></thead>
            <tbody><tr><td>S001</td><td>MedSupply Pvt Ltd</td><td>Rajesh</td><td>9876500001</td><td>Active</td></tr><tr><td>S002</td><td>HealthCare Distributors</td><td>Neha</td><td>9876500002</td><td>Active</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
