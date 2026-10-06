<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Static login: no database is required.
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = 'Administrator';
        header('Location: dashboard.php');
        exit;
    }

    $error = 'Invalid username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Surgical Store</title>
    <link rel="stylesheet" href="/SurgicalStore/css/admin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="login-page">
    <div class="login-card">
        <div class="login-logo">SS</div>
        <h1>Surgical Store</h1>
        <p class="muted">Admin Login</p>

        <?php if ($error): ?>
            <div class="alert error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post" data-validate data-validate="" novalidate>
            <label>Username</label>
            <input type="text" name="username" data-validation="required|min|max" data-min="3" data-max="30" required placeholder="Enter username">

            <label>Password</label>
            <input type="password" name="password" data-validation="required|min|max" data-min="4" data-max="50" required placeholder="Enter password">

            <button class="btn primary full" type="submit">Login</button>
        </form>

        <div class="demo-login">
            <strong>Demo Login</strong><br>
            Username: admin<br>
            Password: admin123
        </div>
    </div>

    <script src="/SurgicalStore/js/script.js"></script>
    <script src="/SurgicalStore/js/validation.js"></script>
</body>
</html>
