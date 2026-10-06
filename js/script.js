function toggleMenu(){const nav=document.getElementById('mainNav');if(nav)nav.classList.toggle('open')}
function toggleSidebar(){const sidebar=document.getElementById('sidebar');if(sidebar)sidebar.classList.toggle('open')}
function getCart(){try{return JSON.parse(localStorage.getItem('surgical_cart')||'[]')}catch(e){return[]}}
function saveCart(cart){localStorage.setItem('surgical_cart',JSON.stringify(cart));updateCartCount()}
function updateCartCount(){const total=getCart().reduce((s,p)=>s+(Number(p.qty)||1),0);document.querySelectorAll('#cartCount').forEach(e=>e.textContent=total)}
function updateWishCount(){try{const w=JSON.parse(localStorage.getItem('surgical_wishlist')||'[]');document.querySelectorAll('#wishCount').forEach(e=>e.textContent=w.length)}catch(e){}}
function addToCart(id,name,price,image){const cart=getCart(),found=cart.find(p=>p.id===id);if(found)found.qty=(Number(found.qty)||1)+1;else cart.push({id,name,price:Number(price),image,qty:1});saveCart(cart);showToast(name+' added to cart');}
function removeFromCart(id){saveCart(getCart().filter(p=>p.id!==id));location.reload()}
function changeQty(id,delta){const cart=getCart(),p=cart.find(x=>x.id===id);if(!p)return;p.qty=Math.max(1,(Number(p.qty)||1)+delta);saveCart(cart);location.reload()}
function addWishlist(id){let w=[];try{w=JSON.parse(localStorage.getItem('surgical_wishlist')||'[]')}catch(e){}if(!w.includes(id))w.push(id);else w=w.filter(x=>x!==id);localStorage.setItem('surgical_wishlist',JSON.stringify(w));updateWishCount();showToast(w.includes(id)?'Added to wishlist':'Removed from wishlist')}
function searchProducts(){const q=(document.getElementById('productSearch')?.value||'').toLowerCase();document.querySelectorAll('.product-item').forEach(x=>x.style.display=x.innerText.toLowerCase().includes(q)?'':'none')}
function filterCategory(){const v=(document.getElementById('categoryFilter')?.value||'').toLowerCase();document.querySelectorAll('.product-item').forEach(x=>x.style.display=!v||x.dataset.category===v?'':'none')}
function copyCoupon(code){navigator.clipboard?.writeText(code).then(()=>showToast(code+' copied'))||showToast('Coupon: '+code)}
function subscribeNewsletter(e){e.preventDefault();showToast('Thanks! You are subscribed to store updates.');e.target.reset()}
function showToast(message){let t=document.getElementById('storeToast');if(!t){t=document.createElement('div');t.id='storeToast';t.style.cssText='position:fixed;right:22px;bottom:22px;background:#123e45;color:#fff;padding:13px 16px;border-radius:10px;box-shadow:0 10px 30px rgba(0,0,0,.2);z-index:9999;font-size:13px';document.body.appendChild(t)}t.textContent=message;t.style.display='block';clearTimeout(window.toastTimer);window.toastTimer=setTimeout(()=>t.style.display='none',2400)}
function searchTable(tableId){const input=document.getElementById('tableSearch'),table=document.getElementById(tableId);if(!input||!table)return;const q=input.value.toLowerCase();table.querySelectorAll('tbody tr').forEach(r=>r.style.display=r.innerText.toLowerCase().includes(q)?'':'none')}
document.addEventListener('DOMContentLoaded',()=>{updateCartCount();updateWishCount()});
