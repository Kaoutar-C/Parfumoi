<?php

function get_operator_by_id($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM operator WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function get_items_by_operator($pdo, $operator_id)
{
    $stmt = $pdo->prepare('SELECT * FROM item WHERE operator_id = ?');
    $stmt->execute([$operator_id]);
    return $stmt->fetchAll();
}

function get_historique_by_operator($pdo, $operator_id)
{
    $stmt = $pdo->prepare(
        'SELECT item.* FROM item
         JOIN collection_item ON item.id = collection_item.item_id
         JOIN collection ON collection_item.collection_id = collection.id
         WHERE collection.creator_id = ?'
    );
    $stmt->execute([$operator_id]);
    return $stmt->fetchAll();
}
