<?php


function vendre_index($pdo, $id)
{
    $operator = get_vendeur_by_id($pdo, $id);
    $items    = get_items_by_vendeur($pdo, $id);

    return render('app/views/vendre.php', [
        'operator' => $operator,
        'items'    => $items,
    ]);
}
