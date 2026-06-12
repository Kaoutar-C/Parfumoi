<?php

function getAllMessages($pdo)
{
    $sql = "SELECT * FROM message ORDER BY id DESC";
    return $pdo->query($sql)->fetchAll();
}

function getMessageById($pdo, $id)
{
    $sql = "SELECT * FROM message WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateMessageStatus($pdo, $id, $status)
{
    $sql = "UPDATE message SET status = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$status, $id]);
}

function deleteMessage($pdo, $id)
{
    $sql = "DELETE FROM message WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
