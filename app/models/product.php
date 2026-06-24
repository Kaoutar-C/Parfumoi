<?php

function get_item_by_id($pdo, $id)
{
    $stmt = $pdo->prepare(
        'SELECT item.*, brands.label AS brand_name
         FROM item
         LEFT JOIN brands ON item.brands_id = brands.id
         WHERE item.id = ?'
    );
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function get_operator_by_item($pdo, $operator_id)
{
    $stmt = $pdo->prepare('SELECT id, firstname, lastname, email, avatar, created_at FROM operator WHERE id = ?');
    $stmt->execute([$operator_id]);
    return $stmt->fetch();
}

function add_to_historique($pdo, $operator_id, $item_id)
{
    $stmt = $pdo->prepare('SELECT id FROM collection WHERE creator_id = ?');
    $stmt->execute([$operator_id]);
    $collection = $stmt->fetch();

    if ($collection) {
        $stmt2 = $pdo->prepare('INSERT IGNORE INTO collection_item (collection_id, item_id) VALUES (?, ?)');
        $stmt2->execute([$collection['id'], $item_id]);
    }
}

function get_tags_by_item($pdo, $item_id)
{
    $stmt = $pdo->prepare('
        SELECT tag.label 
        FROM tag
        JOIN taguer ON tag.id = taguer.tag_id
        WHERE taguer.item_id = ?
    ');
    $stmt->execute([$item_id]);
    return $stmt->fetchAll();
}

function get_theme_by_item($pdo, $theme_id)
{
    $stmt = $pdo->prepare('SELECT label FROM theme WHERE id = ?');
    $stmt->execute([$theme_id]);
    return $stmt->fetch();
}

function get_category_by_item($pdo, $category_id)
{
    $stmt = $pdo->prepare('SELECT label FROM category WHERE id = ?');
    $stmt->execute([$category_id]);
    return $stmt->fetch();
}