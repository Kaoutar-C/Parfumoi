<?php

require_once __DIR__ . '/../models/mon_compte.php';

function mon_compte_index($pdo)
{
    
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /connection');
        exit;
    }

    $operator   = get_operator_by_id($pdo, $_SESSION['operator_id']);
    $items      = get_items_by_operator($pdo, $_SESSION['operator_id']);
    $historique = get_historique_by_operator($pdo, $_SESSION['operator_id']);

    return render('app/views/mon_compte.php', [
        'operator'   => $operator,
        'items'      => $items,
        'historique' => $historique,
    ]);
}
