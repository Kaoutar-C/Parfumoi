<?php

function getAllOperators($pdo, $search = '')
{
    $sql = "SELECT * FROM operator WHERE firstname LIKE ? OR lastname LIKE ? OR email LIKE ? ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['%' . $search . '%', '%' . $search . '%', '%' . $search . '%']);
    return $stmt->fetchAll();
}

function getOperatorById($pdo, $id)
{
    $sql = "SELECT * FROM operator WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function getItemsByOperator($pdo, $operator_id)
{
    $sql = "SELECT item.*, brands.label AS brand_name 
            FROM item 
            LEFT JOIN brands ON item.brands_id = brands.id
            WHERE item.operator_id = ? AND item.status = 'published'
            ORDER BY item.created_at DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$operator_id]);
    return $stmt->fetchAll();
}

function updateOperator($pdo, $id, $data)
{
    if (!empty($data['password'])) {
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $sql = "UPDATE operator SET email = ?, firstname = ?, lastname = ?, password = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$data['email'], $data['firstname'], $data['lastname'], $password, $id]);
    }

    $sql = "UPDATE operator SET email = ?, firstname = ?, lastname = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$data['email'], $data['firstname'], $data['lastname'], $id]);
}

function blockOperator($pdo, $id)
{
    $sql = "UPDATE operator SET is_active = 0 WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function activateOperator($pdo, $id)
{
    $sql = "UPDATE operator SET is_active = 1 WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function deleteOperator($pdo, $id)
{
    $sql = "UPDATE operator SET is_active = 0 WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}