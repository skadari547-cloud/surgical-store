<?php require 'layout.php'; userStart('Home','home'); ?>
<section class="hero"><div class="container hero-grid">
<div><h1>Your trusted <span>surgical store</span> online.</h1><p>Shop quality surgical, medical and healthcare products with simple online ordering and home delivery.</p><a class="btn primary" href="products.php">Shop Products →</a> <a class="btn" href="categories.php">Browse Categories</a></div>
<img src="/SurgicalStore/images/surgical-gloves.jpg" alt="Surgical products"></div></section>
<section class="section"><div class="container"><div class="section-title"><h2>Why Choose Us?</h2><p>Simple, safe and convenient shopping.</p></div><div class="grid-4">
<div class="feature"><div class="icon"><i class="bi bi-truck"></i></div><h3>Home Delivery</h3><p>Get your order delivered to your doorstep.</p></div>
<div class="feature"><div class="icon"><i class="bi bi-lock"></i></div><h3>Secure Purchase</h3><p>Simple and secure checkout experience.</p></div>
<div class="feature"><div class="icon"><i class="bi bi-check"></i></div><h3>Quality Products</h3><p>Carefully listed healthcare essentials.</p></div>
<div class="feature"><div class="icon"><i class="bi bi-telephone"></i></div><h3>Customer Support</h3><p>Contact us whenever you need help.</p></div>
</div></div></section>
<section class="section"><div class="container"><div class="section-title"><h2>Popular Products</h2><p>Start shopping from our healthcare essentials.</p></div>
<div class="grid-4">
<div class="product-card"><img src="/SurgicalStore/images/bp-monitor.jpg"><div class="product-info"><span class="category">Equipment</span><h3>BP Monitor</h3><span class="price">₹1,850</span><br><button class="btn primary small" onclick="addToCart('p1','BP Monitor',1850,'/SurgicalStore/images/bp-monitor.jpg')">Add to Cart</button></div></div>
<div class="product-card"><img src="/SurgicalStore/images/pulse-oximeter.jpg"><div class="product-info"><span class="category">Equipment</span><h3>Pulse Oximeter</h3><span class="price">₹999</span><br><button class="btn primary small" onclick="addToCart('p2','Pulse Oximeter',999,'/SurgicalStore/images/pulse-oximeter.jpg')">Add to Cart</button></div></div>
<div class="product-card"><img src="/SurgicalStore/images/first-aid-kit.jpg"><div class="product-info"><span class="category">First Aid</span><h3>First Aid Kit</h3><span class="price">₹650</span><br><button class="btn primary small" onclick="addToCart('p3','First Aid Kit',650,'/SurgicalStore/images/first-aid-kit.jpg')">Add to Cart</button></div></div>
<div class="product-card"><img src="/SurgicalStore/images/digital-thermometer.jpg"><div class="product-info"><span class="category">Equipment</span><h3>Digital Thermometer</h3><span class="price">₹299</span><br><button class="btn primary small" onclick="addToCart('p4','Digital Thermometer',299,'/SurgicalStore/images/digital-thermometer.jpg')">Add to Cart</button></div></div>
</div></div></section>
<?php userEnd(); ?>