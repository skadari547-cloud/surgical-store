<?php require 'layout.php'; userStart('Shopping Cart',''); ?>
<div class="container"><div class="page-head"><h1>Shopping Cart</h1><p>Your selected products.</p></div><div id="cartArea"></div></div>
<script>
document.addEventListener('DOMContentLoaded',function(){
 const area=document.getElementById('cartArea'),cart=getCart();
 if(!cart.length){area.innerHTML='<div class="card" style="text-align:center"><h2>Your cart is empty</h2><p>Start shopping to add products.</p><br><a class="btn primary" href="products.php">Browse Products</a></div>';return;}
 let total=0,html='<div class="two-col"><div class="card">';
 cart.forEach(p=>{total+=p.price*p.qty;html+=`<div class="cart-row"><img src="${p.image}"><div class="cart-name"><strong>${p.name}</strong><br>₹${p.price}</div><div class="qty"><button onclick="changeQty('${p.id}',-1)">−</button><input value="${p.qty}" readonly><button onclick="changeQty('${p.id}',1)">+</button></div><strong>₹${p.price*p.qty}</strong><button class="btn danger small" onclick="removeFromCart('${p.id}')">Remove</button></div>`});
 html+='</div><div class="summary"><h3>Order Summary</h3><div><span>Subtotal</span><strong>₹'+total+'</strong></div><div><span>Delivery</span><strong>₹50</strong></div><div class="total"><span>Total</span><strong>₹'+(total+50)+'</strong></div><br><a class="btn primary" style="width:100%;text-align:center" href="checkout.php">Proceed to Checkout</a></div></div>';
 area.innerHTML=html;
});
</script>
<?php userEnd(); ?>