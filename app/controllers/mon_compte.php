<?php

require_once __DIR__ . '/../models/mon_compte.php';

function mon_compte_index($pdo)
{
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /checkin/login');
        exit;
    }

    $operator = get_operator_by_id($pdo, $_SESSION['operator_id']);
    $items    = get_items_by_operator($pdo, $_SESSION['operator_id']);
    $favoris  = get_favoris($pdo, $_SESSION['operator_id']);

    return render('app/views/mon_compte.php', [
        'operator' => $operator,
        'items'    => $items,
        'favoris'  => $favoris,
    ]);
}

function mon_compte_edit($pdo)
{
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /checkin/login');
        exit;
    }

    $operator = get_operator_by_id($pdo, $_SESSION['operator_id']);

    if (is_post()) {
        update_operator($pdo, $_SESSION['operator_id'], $_POST);
        header('Location: /mon_compte/index');
        exit;
    }

    return render('app/views/edit_compte.php', [
        'operator' => $operator,
    ]);
}

function mon_compte_delete($pdo)
{
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /checkin/login');
        exit;
    }

    delete_operator($pdo, $_SESSION['operator_id']);
    session_destroy();
    header('Location: /home/index');
    exit;
}