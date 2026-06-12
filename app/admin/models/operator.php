<?php

function findOperatorByEmail($pdo, $email)
{
    $sql = "SELECT * FROM operator WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    return $stmt->fetch();
}

function getAllOperators($pdo)
{
    $sql = "SELECT * FROM operator ORDER BY id DESC";
    return $pdo->query($sql)->fetchAll();
}

function getOperatorById($pdo, $id)
{
    $sql = "SELECT * FROM operator WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function createOperator($pdo, $data)
{
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO operator (email, password, firstname, lastname, phone, is_active, created_at)
            VALUES (?, ?, ?, ?, ?, 1, NOW())";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        $data['email'],
        $password,
        $data['firstname'],
        $data['lastname'],
        $data['phone']
    ]);
}

function updateOperator($pdo, $id, $data)
{
    if (!empty($data['password'])) {
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $sql = "UPDATE operator SET email = ?, firstname = ?, lastname = ?, phone = ?, password = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$data['email'], $data['firstname'], $data['lastname'], $data['phone'], $password, $id]);
    }

    $sql = "UPDATE operator SET email = ?, firstname = ?, lastname = ?, phone = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$data['email'], $data['firstname'], $data['lastname'], $data['phone'], $id]);
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
    $sql = "DELETE FROM operator WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
