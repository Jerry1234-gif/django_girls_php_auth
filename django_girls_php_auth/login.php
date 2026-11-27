<?php
require_once __DIR__ . '/includes/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('index.php#login');
}
verify_csrf();

$email = strtolower(trim((string)($_POST['email'] ?? '')));
$password = (string)($_POST['password'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password === '') {
    set_flash('error', 'Enter a valid email address and password.');
    redirect('index.php#login');
}

try {
    $statement = db()->prepare('SELECT id, name, email, password_hash FROM users WHERE email = :email LIMIT 1');
    $statement->execute(['email' => $email]);
    $user = $statement->fetch();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        set_flash('error', 'The email or password is incorrect.');
        redirect('index.php#login');
    }

    session_regenerate_id(true);
    $_SESSION['user_id'] = (int)$user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_email'] = $user['email'];
    redirect('dashboard.php');
} catch (PDOException $exception) {
    error_log('Login database error: ' . $exception->getMessage());
    set_flash('error', 'Login is temporarily unavailable. Please check the database setup.');
    redirect('index.php#login');
}
