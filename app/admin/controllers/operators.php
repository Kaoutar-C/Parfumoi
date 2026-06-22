<?php

require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../admin/models/home.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

$totalAllItems          = adminCountAllItems($pdo);
$totalPublishedItems    = adminCountPublishedItems($pdo);
$totalDraftItems        = adminCountDraftItems($pdo);
$totalOperators         = adminCountOperators($pdo);
$totalOperatorsWithItem = adminCountOperatorsWithItem($pdo);

ob_start();
require __DIR__ . '/../../admin/views/home.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../admin/views/_layout.php';