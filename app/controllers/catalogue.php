<?php

require_once __DIR__ . '/../models/catalogue.php';

function catalogue_index($pdo)
{
    $categorie = $_GET['categorie'] ?? '';
    $tri       = $_GET['tri'] ?? '';
    $search    = $_GET['search'] ?? '';

    $items = get_all_items($pdo, $categorie, $tri, $search);

    return render('app/views/catalogue.php', [
        'items'     => $items,
        'categorie' => $categorie,
        'tri'       => $tri,
        'search'    => $search,
    ]);
}
