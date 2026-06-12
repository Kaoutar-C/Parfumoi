<?php

function get_vendeur_by_id($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT id, firstname, lastname, phone, avatar, created_at FROM operator WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function get_items_by_vendeur($pdo, $id)
{
    $stmt = $pdo->prepare(
        'SELECT item.*, brands.label AS brand_name
         FROM item
         LEFT JOIN brands ON item.brands_id = brands.id
         WHERE item.operator_id = ?
         AND item.status = "published"'
    );
    $stmt->execute([$id]);
    return $stmt->fetchAll();
}
