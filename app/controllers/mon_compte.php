<?php

function mon_compte_index($pdo)
{
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /checkin/login');
        exit;
    }

    $operator = get_operator_by_id($pdo, $_SESSION['operator_id']);

    if (!$operator) {
        session_destroy();
        header('Location: /checkin/login');
        exit;
    }

    $items       = get_items_by_operator($pdo, $_SESSION['operator_id']);
    $total_items = count($items);
    $favoris     = get_favoris($pdo, $_SESSION['operator_id']);

    return render('app/views/mon_compte.php', [
        'operator'    => $operator,
        'items'       => $items,
        'total_items' => $total_items,
        'favoris'     => $favoris,
    ]);
}