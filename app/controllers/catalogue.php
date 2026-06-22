<?php

require_once __DIR__ . '/../models/catalogue.php';

function catalogue_index($pdo)
{
    $categorie = $_GET['categorie'] ?? '';
    $tri       = $_GET['tri'] ?? '';
    $search    = $_GET['search'] ?? '';
    $tag       = $_GET['tag'] ?? '';
    $theme     = $_GET['theme'] ?? '';

    $items      = get_all_items($pdo, $categorie, $tri, $search, $tag, $theme);
    $tags       = get_all_tags($pdo);
    $themes     = get_all_themes($pdo);
    $categories = get_all_categories($pdo);

    return render('app/views/catalogue.php', [
        'items'      => $items,
        'categorie'  => $categorie,
        'tri'        => $tri,
        'search'     => $search,
        'tag'        => $tag,
        'theme'      => $theme,
        'tags'       => $tags,
        'themes'     => $themes,
        'categories' => $categories,
    ]);
}