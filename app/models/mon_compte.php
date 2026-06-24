<?php

function get_operator_by_id($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM operator WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function get_items_by_operator($pdo, $operator_id)
{
    $stmt = $pdo->prepare('SELECT * FROM item WHERE operator_id = ? AND status != "deleted"');
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

function get_favoris($pdo, $operator_id)
{
    $stmt = $pdo->prepare(
        'SELECT item.* FROM item
         JOIN collection_item ON item.id = collection_item.item_id
         JOIN collection ON collection_item.collection_id = collection.id
         WHERE collection.creator_id = ? AND collection.name = "favoris"'
    );
    $stmt->execute([$operator_id]);
    return $stmt->fetchAll();
}

function add_to_favoris($pdo, $operator_id, $item_id)
{
    $stmt = $pdo->prepare('SELECT id FROM collection WHERE creator_id = ? AND name = "favoris"');
    $stmt->execute([$operator_id]);
    $collection = $stmt->fetch();

    if (!$collection) {
        $stmt = $pdo->prepare('INSERT INTO collection (creator_id, name) VALUES (?, "favoris")');
        $stmt->execute([$operator_id]);
        $collection_id = $pdo->lastInsertId();
    } else {
        $collection_id = $collection['id'];
    }

    $stmt = $pdo->prepare('INSERT IGNORE INTO collection_item (collection_id, item_id) VALUES (?, ?)');
    $stmt->execute([$collection_id, $item_id]);
}

function remove_from_favoris($pdo, $operator_id, $item_id)
{
    $stmt = $pdo->prepare(
        'DELETE FROM collection_item
         WHERE item_id = ?
         AND collection_id = (SELECT id FROM collection WHERE creator_id = ? AND name = "favoris")'
    );
    $stmt->execute([$item_id, $operator_id]);
}