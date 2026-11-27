<?php
require_once __DIR__ . '/includes/bootstrap.php';
if (is_logged_in()) {
    redirect('dashboard.php');
}
$page_title = 'Home';
require_once __DIR__ . '/includes/header.php';
?>
<main>
    <section class="hero">
        <div class="hero-copy">
            <span class="eyebrow">LEARN · BUILD · GROW TOGETHER</span>
            <h1>Empowering<br>Women in Tech<br><span>in Sierra Leone</span></h1>
            <p>Learn new skills, connect with a community, and build a brighter future through technology.</p>
            <a class="button button-primary hero-button" href="#join">Join Our Community <span aria-hidden="true">→</span></a>
        </div>
        <div class="hero-art">
            <div class="hero-orbit orbit-one"></div>
            <div class="hero-orbit orbit-two"></div>
            <img class="hero-photo" src="assets/images/django-girls-developer.png"
                 alt="Smiling woman with braided hair wearing a blue sweater and using a Django Girls laptop">
        </div>
    </section>

    <?php if ($flash = get_flash()): ?>
        <div class="flash flash-<?= e($flash['type']) ?>" role="status"><?= e($flash['message']) ?></div>
    <?php endif; ?>

    <section class="auth-grid" id="join" aria-label="Create an account or sign in">
        <article class="auth-card">
            <div class="card-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><circle cx="18" cy="15" r="8"/><path d="M4 39c0-8 6-13 14-13s14 5 14 13v2H4z"/><path d="M37 16v14M30 23h14"/></svg></div>
            <h2>Create an Account</h2>
            <p class="card-subtitle">Join Django Girls and start your journey.</p>
            <form action="register.php" method="post" class="auth-form">
                <?= csrf_field() ?>
                <label class="sr-only" for="register-name">Full name</label>
                <div class="input-wrap"><span aria-hidden="true">♙</span><input id="register-name" name="name" type="text" placeholder="Full Name" autocomplete="name" maxlength="100" required></div>
                <label class="sr-only" for="register-email">Email address</label>
                <div class="input-wrap"><span aria-hidden="true">✉</span><input id="register-email" name="email" type="email" placeholder="Email Address" autocomplete="email" maxlength="190" required></div>
                <label class="sr-only" for="register-password">Password</label>
                <div class="input-wrap"><span aria-hidden="true">♙</span><input id="register-password" name="password" type="password" placeholder="Password (minimum 8 characters)" autocomplete="new-password" minlength="8" required></div>
                <button class="button button-primary full-width" type="submit">Sign Up</button>
            </form>
            <p class="switch-text">Already have an account? <a href="#login">Login</a></p>
        </article>

        <article class="auth-card" id="login">
            <div class="card-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><rect x="8" y="21" width="32" height="23" rx="4"/><path d="M15 21v-7a9 9 0 0 1 18 0v7"/><circle cx="24" cy="31" r="3"/><path d="M24 34v4"/></svg></div>
            <h2>Welcome Back</h2>
            <p class="card-subtitle">Login to access your dashboard.</p>
            <form action="login.php" method="post" class="auth-form">
                <?= csrf_field() ?>
                <label class="sr-only" for="login-email">Email address</label>
                <div class="input-wrap"><span aria-hidden="true">✉</span><input id="login-email" name="email" type="email" placeholder="Email Address" autocomplete="email" maxlength="190" required></div>
                <label class="sr-only" for="login-password">Password</label>
                <div class="input-wrap"><span aria-hidden="true">♙</span><input id="login-password" name="password" type="password" placeholder="Password" autocomplete="current-password" required></div>
                <div class="form-row"><label class="checkbox-label"><input type="checkbox" name="remember_email" value="1"> Remember email</label><span class="muted-small">Keep your password private</span></div>
                <button class="button button-primary full-width" type="submit">Login</button>
            </form>
            <p class="switch-text">Don't have an account? <a href="#join">Sign Up</a></p>
        </article>
    </section>

    <section class="benefits" aria-label="Community benefits">
        <div class="benefit"><div class="benefit-icon">◆</div><h3>Learn</h3><p>New Skills</p></div>
        <div class="benefit"><div class="benefit-icon">●●</div><h3>Connect</h3><p>With a Community</p></div>
        <div class="benefit"><div class="benefit-icon">▮▮▮</div><h3>Build</h3><p>A Brighter Future</p></div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
