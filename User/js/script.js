// COMMON STORE JAVASCRIPT
function toggleMenu(){
    const nav=document.getElementById('mainNav');
    if(nav) nav.classList.toggle('open');
}
function getCart(){
    try{return JSON.parse(localStorage.getItem('surgical_cart')||'[]')}catch(e){return []}
}
function saveCart(cart){localStorage.setItem('surgical_cart',JSON.stringify(cart));updateCartCount()}
function updateCartCount(){
    const total=getCart().reduce((s,p)=>s+(Number(p.qty)||1),0);
    document.querySelectorAll('#cartCount').forEach(e=>e.textContent=total);
}
function addToCart(id,name,price,image){
    const cart=getCart(); const found=cart.find(p=>p.id===id);
    if(found) found.qty=(Number(found.qty)||1)+1;
    else cart.push({id,name,price:Number(price),image,qty:1});
    saveCart(cart); alert(name+' added to cart!');
}
function removeFromCart(id){saveCart(getCart().filter(p=>p.id!==id));location.reload()}
function changeQty(id,delta){
    const cart=getCart();const p=cart.find(x=>x.id===id);
    if(!p)return;p.qty=Math.max(1,(Number(p.qty)||1)+delta);saveCart(cart);location.reload()
}
function addWishlist(id){
    let w=JSON.parse(localStorage.getItem('surgical_wishlist')||'[]');
    if(!w.includes(id))w.push(id);else w=w.filter(x=>x!==id);
    localStorage.setItem('surgical_wishlist',JSON.stringify(w));
}
function searchProducts(){
    const q=(document.getElementById('productSearch')?.value||'').toLowerCase();
    document.querySelectorAll('.product-item').forEach(x=>x.style.display=x.innerText.toLowerCase().includes(q)?'':'none');
}
document.addEventListener('DOMContentLoaded',updateCartCount);
