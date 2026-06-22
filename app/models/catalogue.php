<?php

function get_all_items($pdo, $categorie, $tri, $search, $tag = '', $theme = '')
{
    $sql = 'SELECT DISTINCT item.*, brands.label AS brand_name
        FROM item
        LEFT JOIN brands ON item.brands_id = brands.id
        LEFT JOIN taguer ON item.id = taguer.item_id
        LEFT JOIN theme ON item.theme_id = theme.id
        LEFT JOIN category ON item.category_id = category.id
        WHERE item.status = "published"';
    $params = [];

    if (!empty($categorie)) {
        $sql     .= ' AND item.category_id = ?';
        $params[] = $categorie;
    }

    if (!empty($search)) {
    $sql     .= ' AND (item.label LIKE ? OR brands.label LIKE ? OR category.label LIKE ? OR theme.label LIKE ?)';
    $params[] = '%' . $search . '%';
    $params[] = '%' . $search . '%';
    $params[] = '%' . $search . '%';
    $params[] = '%' . $search . '%';
}

    if (!empty($tag)) {
        $sql     .= ' AND taguer.tag_id = ?';
        $params[] = $tag;
    }

    if (!empty($theme)) {
        $sql     .= ' AND item.theme_id = ?';
        $params[] = $theme;
    }

    if ($tri === 'prix-croissant') {
        $sql .= ' ORDER BY item.price ASC';
    } elseif ($tri === 'prix-decroissant') {
        $sql .= ' ORDER BY item.price DESC';
    } elseif ($tri === 'nom') {
        $sql .= ' ORDER BY item.label ASC';
    } else {
        $sql .= ' ORDER BY item.created_at DESC';
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function get_all_tags($pdo)
{
    return $pdo->query('SELECT * FROM tag ORDER BY label ASC')->fetchAll();
}

function get_all_themes($pdo)
{
    return $pdo->query('SELECT * FROM theme ORDER BY label ASC')->fetchAll();
}

function get_all_categories($pdo)
{
    return $pdo->query('SELECT * FROM category ORDER BY label ASC')->fetchAll();
}