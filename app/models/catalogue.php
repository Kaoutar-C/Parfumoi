<?php

function get_all_items($pdo, $categorie, $tri, $search)
{
    $sql    = 'SELECT item.*, brands.label AS brand_name
               FROM item
               LEFT JOIN brands ON item.brands_id = brands.id
               WHERE item.status = "published"';
    $params = [];

    if (!empty($categorie)) {
        $sql     .= ' AND item.category_id = ?';
        $params[] = $categorie;
    }

    if (!empty($search)) {
        $sql     .= ' AND item.label LIKE ?';
        $params[] = '%' . $search . '%';
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
