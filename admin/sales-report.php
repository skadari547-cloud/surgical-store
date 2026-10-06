<?php
require 'layout.php';
adminStart('Sales Report', 'sales');
?>
<div class="page-heading">
    <div><h2>Sales Report</h2><p>Manage sales report from this page.</p></div>
</div>
<div class="card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Date</th><th>Orders</th><th>Items Sold</th><th>Sales</th></tr></thead>
            <tbody><tr><td>30 Sep 2026</td><td>12</td><td>38</td><td>₹24,500</td></tr><tr><td>29 Sep 2026</td><td>9</td><td>27</td><td>₹18,200</td></tr><tr><td>28 Sep 2026</td><td>11</td><td>31</td><td>₹21,750</td></tr></tbody>
        </table>
    </div>
</div>
<?php adminEnd(); ?>
