<?php

session_start();

require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../models/admin/operator.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $operator = findOperatorByEmail($pdo, $email);

    if ($operator && $operator['is_active'] == 1 && password_verify($password, $operator['password'])) {
        $_SESSION['admin_id'] = $operator['id'];
        $_SESSION['admin_name'] = $operator['firstname'];
        header('Location: /admin/dashboard');
        exit;
    } else {
        $error = 'Email ou mot de passe incorrect.';
    }
}

ob_start();
require __DIR__ . '/../../views/admin/login.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../views/admin/_layout.php';
