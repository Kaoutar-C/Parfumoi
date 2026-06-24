<?php

function operators_index($pdo)
{
    if (isset($_GET['delete'])) {
        deleteOperator($pdo, $_GET['delete']);
        header('Location: /admin/operators');
        exit;
    }

    if (isset($_GET['block'])) {
        blockOperator($pdo, $_GET['block']);
        header('Location: /admin/operators');
        exit;
    }

    if (isset($_GET['activate'])) {
        activateOperator($pdo, $_GET['activate']);
        header('Location: /admin/operators');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit') {
        updateOperator($pdo, $_POST['id'], $_POST);
        header('Location: /admin/operators');
        exit;
    }

    $op_edit = null;
    if (isset($_GET['edit'])) {
        $op_edit = getOperatorById($pdo, $_GET['edit']);
    }

    $op_show  = null;
    $op_items = [];
    if (isset($_GET['show'])) {
        $op_show  = getOperatorById($pdo, $_GET['show']);
        $op_items = getItemsByOperator($pdo, $_GET['show']);
    }

    $search    = $_GET['search'] ?? '';
    $operators = getAllOperators($pdo, $search);

    return render(__DIR__ . '/../views/operators.php', [
        'operators' => $operators,
        'op_edit'   => $op_edit,
        'op_show'   => $op_show,
        'op_items'  => $op_items,
        'search'    => $search,
    ]);
}