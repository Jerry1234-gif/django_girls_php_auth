<?php
require_once __DIR__ . '/includes/bootstrap.php';
require_login();
$page_title = 'Dashboard';
require_once __DIR__ . '/includes/header.php';
?>
<main class="dashboard-main">
    <section class="dashboard-welcome">
        <span class="eyebrow">YOUR SPACE · YOUR JOURNEY</span>
        <h1>Welcome, <?= e($_SESSION['user_name'] ?? 'Member') ?>.</h1>
        <p>You are signed in. This is your personal Django Girls community dashboard.</p>
        <a class="button button-primary" href="logout.php">Log Out</a>
    </section>
    <section class="dashboard-grid">
        <article class="dashboard-card">
            <div class="dashboard-icon">✦</div>
            <h2>Your profile</h2>
            <p><strong>Name</strong><br><?= e($_SESSION['user_name'] ?? '') ?></p>
            <p><strong>Email</strong><br><?= e($_SESSION['user_email'] ?? '') ?></p>
        </article>
        <article class="dashboard-card">
            <div class="dashboard-icon">⌘</div>
            <h2>Keep learning</h2>
            <p>Build your technology skills one step at a time. Set a goal, practise regularly, and celebrate your progress.</p>
        </article>
        <article class="dashboard-card">
            <div class="dashboard-icon">◎</div>
            <h2>Community</h2>
            <p>Learn, connect, and build with others. This starter project is ready for additional community features if your course requires them.</p>
        </article>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
