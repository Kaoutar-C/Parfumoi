<?php

session_start();

require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../models/admin/dashboard.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

$totalItems = adminCountItems($pdo);
$totalOperators = adminCountOperators($pdo);
$totalMessages = adminCountMessages($pdo);
$totalBlockedOperators = adminCountBlockedOperators($pdo);
$lastItems = adminLastItems($pdo);

ob_start();
require __DIR__ . '/../../views/admin/dashboard.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../views/admin/_layout.php';
