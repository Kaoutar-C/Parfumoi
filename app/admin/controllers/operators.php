<?php

session_start();

require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../../admin/models/operator.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

if ($action === 'delete' && $id) {
    deleteOperator($pdo, $id);
    header('Location: /admin/operators');
    exit;
}

if ($action === 'block' && $id) {
    blockOperator($pdo, $id);
    header('Location: /admin/operators');
    exit;
}

if ($action === 'activate' && $id) {
    activateOperator($pdo, $id);
    header('Location: /admin/operators');
    exit;
}

if ($action === 'add' || $action === 'edit') {
    $operator = null;

    if ($action === 'edit' && $id) {
        $operator = getOperatorById($pdo, $id);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($action === 'add') {
            createOperator($pdo, $_POST);
        } else {
            updateOperator($pdo, $id, $_POST);
        }

        header('Location: /admin/operators');
        exit;
    }

    ob_start();
    require __DIR__ . '/../../admin/views/operator_form.php';
    $page_content = ob_get_clean();

    require __DIR__ . '/../../admin/views/_layout.php';
    exit;
}

$operators = getAllOperators($pdo);

ob_start();
require __DIR__ . '/../../admin/views/operators.php';
$page_content = ob_get_clean();

require __DIR__ . '/../../admin/views/_layout.php';
