SURGICARE - PHP USER SIDE
==========================

Technology:
- PHP + MySQL
- WAMP Server
- Bootstrap 5 responsive UI

USER-SIDE PAGES:
1. index.php - Home
2. products.php - Product listing/search/filter
3. product_details.php - Product details + Add to Cart
4. register.php - User registration
5. login.php - User login
6. logout.php - Logout
7. cart.php - Cart
8. checkout.php - Delivery + payment method
9. order_success.php - Order confirmation
10. orders.php - My Orders
11. profile.php - User profile

INSTALLATION:
1. Install WAMP and start Apache + MySQL.
2. Copy the 'surgical_store_user' folder into:
   C:\wamp64\www\
3. Open phpMyAdmin:
   http://localhost/phpmyadmin/
4. Import database.sql.
5. Check config/db.php:
   host=localhost
   db=surgical_store
   user=root
   pass=
6. Open:
   http://localhost/surgical_store_user/

IMPORTANT:
- The Admin partner's panel should use the same database.
- Admin can manage products; the user side reads active products from the products table.
- User login only accepts role='user'.
- Payment here is demo/COD/UPI selection; real payment gateway is not included.
- Placeholder product images can be replaced by admin-uploaded/local image paths.
