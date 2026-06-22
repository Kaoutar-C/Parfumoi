<?php

require_once __DIR__ . '/../models/catalogue.php';
require_once __DIR__ . '/../models/mon_compte.php';

function home_index(PDO $pdo): string
{
   $items = array_slice(get_all_items($pdo, '', '', '', '', ''), 0, 3);
    $categories  = get_all_categories($pdo);
    $ids_favoris = [];

    if (is_logged()) {
        $favoris     = get_favoris($pdo, $_SESSION['operator_id']);
        $ids_favoris = array_map('intval', array_column($favoris, 'id'));
    }

    return render(__DIR__ . '/../views/home.php', [
        'page_title'  => 'Accueil',
        'items'       => $items,
        'categories'  => $categories,
        'ids_favoris' => $ids_favoris,
    ]);
}