<?php require 'layout.php'; userStart('My Orders','orders'); ?>
<div class="container"><div class="page-head"><h1>My Orders</h1><p>Track your recent purchases.</p></div><div class="card table-wrap"><table class="table"><thead><tr><th>Order ID</th><th>Date</th><th>Items</th><th>Total</th><th>Status</th><th>Action</th></tr></thead><tbody>
<tr><td>#1001</td><td>30 Sep 2026</td><td>3</td><td>₹2,450</td><td><span class="badge success">Delivered</span></td><td><a class="btn small" href="order-details.php">View</a></td></tr>
<tr><td>#1002</td><td>29 Sep 2026</td><td>2</td><td>₹1,350</td><td><span class="badge warning">Processing</span></td><td><a class="btn small" href="order-details.php">View</a></td></tr>
</tbody></table></div></div>
<?php userEnd(); ?>