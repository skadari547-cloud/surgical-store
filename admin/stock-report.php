<?php
require 'layout.php';
adminStart('Stock Report', 'stock');
?>
<div class="page-heading">
    <div><h2>Stock Report</h2><p>Manage stock report from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Product</th><th>Opening</th><th>Sold</th><th>Remaining</th></tr></thead>
            <tbody><tr><td>Surgical Gloves</td><td>100</td><td>20</td><td>80</td></tr><tr><td>Face Mask</td><td>50</td><td>38</td><td>12</td></tr><tr><td>BP Monitor</td><td>30</td><td>5</td><td>25</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
