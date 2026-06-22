<?php

require_once __DIR__ . '/../models/product.php';

function product_index($pdo, $id)
{
    $item     = get_item_by_id($pdo, $id);
    $operator = get_operator_by_item($pdo, $item['operator_id']);
    $tags     = get_tags_by_item($pdo, $id);

    if (isset($_SESSION['operator_id'])) {
        add_to_historique($pdo, $_SESSION['operator_id'], $id);
    }

    return render('app/views/product.php', [
        'item'     => $item,
        'operator' => $operator,
        'tags'     => $tags,
    ]);
}