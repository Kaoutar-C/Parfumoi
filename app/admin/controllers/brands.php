<?php

session_start();

require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../admin/models/brand.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

if (isset($_GET['delete'])) {
    deleteBrand($pdo, $_GET['delete']);
    header('Location: /admin/brands');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    createBrand($pdo, $_POST);
    header('Location: /admin/brands');
    exit;
}

$brands = getAllBrands($pdo);

ob_start();
require __DIR__ . '/../../views/admin/brands.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../admin/views/_layout.php';
