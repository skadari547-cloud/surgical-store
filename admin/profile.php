<?php
require 'layout.php';
adminStart('Profile', 'profile');
?>
<div class="page-heading"><div><h2>Admin Profile</h2><p>Manage your admin account information.</p></div></div>
<div class="card">
    <form data-validate onsubmit="showFormMessage(event, 'Profile updated successfully!')" data-validate="" novalidate>
        <div class="form-grid">
            <div><label>Name *</label><input type="text" name="name" value="Administrator" data-validation="required|alpha|min|max" data-min="2" data-max="50" required></div>
            <div><label>Email *</label><input type="email" name="email" value="admin@example.com" data-validation="required|email" required></div>
            <div><label>Phone</label><input type="tel" name="phone" value="9876543210" data-validation="numeric|min|max" data-min="10" data-max="10"></div>
            <div><label>Username</label><input type="text" name="username" value="admin" readonly data-validation="required|min|max"></div>
        </div>
        <button class="btn primary" type="submit">Update Profile</button>
    </form>
</div>
<?php adminEnd(); ?>
