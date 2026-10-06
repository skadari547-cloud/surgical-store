<?php
require 'layout.php';
adminStart('Settings', 'settings');
?>
<div class="page-heading"><div><h2>Settings</h2><p>Configure basic store settings.</p></div></div>
<div class="card">
    <form data-validate onsubmit="showFormMessage(event, 'Settings saved successfully!')" data-validate="" novalidate>
        <div class="form-grid">
            <div><label>Store Name</label><input type="text" name="store_name" value="Surgical Store" data-validation="required|min|max" data-min="2" data-max="100" required></div>
            <div><label>Delivery Charge</label><input type="number" name="delivery_charge" value="50" min="0" data-validation="numeric"></div>
            <div class="full-width"><label>Store Address</label><textarea name="store_address" data-validation="min|max" data-min="5" data-max="250" rows="4">Rajkot, Gujarat, India</textarea></div>
        </div>
        <button class="btn primary" type="submit">Save Settings</button>
    </form>
</div>
<?php adminEnd(); ?>
