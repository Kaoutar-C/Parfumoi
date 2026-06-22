<?php


require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../admin/models/message.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

if (isset($_GET['delete'])) {
    deleteMessage($pdo, $_GET['delete']);
    header('Location: /admin/messages');
    exit;
}

if (isset($_GET['status']) && isset($_GET['id'])) {
    updateMessageStatus($pdo, $_GET['id'], $_GET['status']);
    header('Location: /admin/messages');
    exit;
}

$messages = getAllMessages($pdo);

ob_start();
require __DIR__ . '/../../admin/views/messages.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../admin/views/_layout.php';
