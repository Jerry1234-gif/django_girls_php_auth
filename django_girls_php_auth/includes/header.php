<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A clean Django Girls-inspired learning community and PHP authentication demo.">
    <title><?= e($page_title ?? 'Home') ?> | Django Girls</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <a class="brand" href="index.php" aria-label="Django Girls home"><span class="brand-django">django</span> <span class="brand-girls">girls</span></a>
    <nav class="main-nav" aria-label="Main navigation">
        <a class="<?= ($page_title ?? '') === 'Home' ? 'active' : '' ?>" href="index.php">Home</a>
        <?php if (is_logged_in()): ?>
            <a class="<?= ($page_title ?? '') === 'Dashboard' ? 'active' : '' ?>" href="dashboard.php">Dashboard</a>
            <a href="logout.php">Log Out</a>
        <?php else: ?>
            <a href="index.php#join">Sign Up</a>
            <a href="index.php#login">Login</a>
            <a href="index.php#about">About</a>
        <?php endif; ?>
    </nav>
</header>
