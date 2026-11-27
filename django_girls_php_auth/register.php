<?php
require_once __DIR__ . '/includes/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('index.php#join');
}
verify_csrf();

$name = trim((string)($_POST['name'] ?? ''));
$email = strtolower(trim((string)($_POST['email'] ?? '')));
$password = (string)($_POST['password'] ?? '');

if ($name === '' || mb_strlen($name) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 190 || strlen($password) < 8) {
    set_flash('error', 'Please enter a valid name and email, and a password of at least 8 characters.');
    redirect('index.php#join');
}

try {
    $pdo = db();
    $check = $pdo->prepare('SELECT id FROM users WHERE email = :email LIMIT 1');
    $check->execute(['email' => $email]);
    if ($check->fetch()) {
        set_flash('error', 'An account with that email already exists. Please log in instead.');
        redirect('index.php#login');
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $insert = $pdo->prepare('INSERT INTO users (name, email, password_hash) VALUES (:name, :email, :password_hash)');
    $insert->execute(['name' => $name, 'email' => $email, 'password_hash' => $hash]);
    set_flash('success', 'Your account has been created. You can now log in.');
    redirect('index.php#login');
} catch (PDOException $exception) {
    error_log('Registration database error: ' . $exception->getMessage());
    set_flash('error', 'We could not create your account right now. Check the database setup and try again.');
    redirect('index.php#join');
}
