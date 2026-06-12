<?php

session_start();

require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../models/admin/item.php';
require_once __DIR__ . '/../../models/admin/brand.php';
require_once __DIR__ . '/../../models/admin/operator.php';
require_once __DIR__ . '/../../models/admin/reference.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

if ($action === 'delete' && $id) {
    deleteAdminItem($pdo, $id);
    header('Location: /admin/items');
    exit;
}

if ($action === 'disable' && $id) {
    disableAdminItem($pdo, $id);
    header('Location: /admin/items');
    exit;
}

if ($action === 'publish' && $id) {
    publishAdminItem($pdo, $id);
    header('Location: /admin/items');
    exit;
}

if ($action === 'add' || $action === 'edit') {
    $item = null;

    if ($action === 'edit' && $id) {
        $item = getAdminItemById($pdo, $id);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($action === 'add') {
            createAdminItem($pdo, $_POST);
        } else {
            updateAdminItem($pdo, $id, $_POST);
        }

        header('Location: /admin/items');
        exit;
    }

    $brands = getAllBrands($pdo);
    $operators = getAllOperators($pdo);
    $categories = getAllCategories($pdo);
    $tags = getAllTags($pdo);

    ob_start();
    require __DIR__ . '/../../views/admin/item_form.php';
    $page_content = ob_get_clean();

    require __DIR__ . '/../../views/admin/_layout.php';
    exit;
}

$items = getAllAdminItems($pdo);

ob_start();
require __DIR__ . '/../../views/admin/items.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../views/admin/_layout.php';
