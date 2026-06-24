<?php


function catalogue_index($pdo)
{
    $categorie = $_GET['categorie'] ?? '';
    $tri       = $_GET['tri'] ?? '';
    $search    = $_GET['search'] ?? '';
    $tag       = $_GET['tag'] ?? '';
    $theme     = $_GET['theme'] ?? '';
    $page      = max(1, (int)($_GET['page'] ?? 1));
    $limit     = 9;
    $offset    = ($page - 1) * $limit;

    $items      = get_all_items($pdo, $categorie, $tri, $search, $tag, $theme, $limit, $offset);
    $total      = count_all_items($pdo, $categorie, $search, $tag, $theme);
    $totalPages = max(1, (int)ceil($total / $limit));
    $tags       = get_all_tags($pdo);
    $themes     = get_all_themes($pdo);
    $categories = get_all_categories($pdo);

    $ids_favoris = [];
    if (is_logged()) {
        require_once __DIR__ . '/../models/mon_compte.php';
        $favoris     = get_favoris($pdo, $_SESSION['operator_id']);
        $ids_favoris = array_map('intval', array_column($favoris, 'id'));
    }

    return render('app/views/catalogue.php', [
        'items'       => $items,
        'categorie'   => $categorie,
        'tri'         => $tri,
        'search'      => $search,
        'tag'         => $tag,
        'theme'       => $theme,
        'tags'        => $tags,
        'themes'      => $themes,
        'categories'  => $categories,
        'page'        => $page,
        'totalPages'  => $totalPages,
        'ids_favoris' => $ids_favoris,
    ]);
}