<?php require 'layout.php'; userStart('Categories','categories'); ?>
<div class="container"><div class="page-head"><h1>Categories</h1><p>Choose a category to find products.</p></div><div class="grid-4">
<a class="category-card" href="products.php"><div class="category-icon"><i class="bi bi-heart-pulse"></i></div><h3>Equipment</h3><p>Monitors and healthcare equipment.</p></a>
<a class="category-card" href="products.php"><div class="category-icon"><i class="bi bi-shield-plus"></i></div><h3>Protection</h3><p>Gloves, masks and protection products.</p></a>
<a class="category-card" href="products.php"><div class="category-icon"><i class="bi bi-briefcase-medical"></i></div><h3>First Aid</h3><p>Basic first aid essentials.</p></a>
<a class="category-card" href="products.php"><div class="category-icon"><i class="bi bi-thermometer-half"></i>️</div><h3>Monitoring</h3><p>Thermometers and monitoring devices.</p></a>
</div></div>
<?php userEnd(); ?>