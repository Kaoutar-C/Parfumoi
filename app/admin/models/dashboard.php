<?php

function adminCountItems($pdo)
{
    $sql = "SELECT COUNT(*) AS total FROM item";
    return $pdo->query($sql)->fetch()['total'];
}

function adminCountOperators($pdo)
{
    $sql = "SELECT COUNT(*) AS total FROM operator";
    return $pdo->query($sql)->fetch()['total'];
}

function adminCountMessages($pdo)
{
    $sql = "SELECT COUNT(*) AS total FROM message";
    return $pdo->query($sql)->fetch()['total'];
}

function adminCountBlockedOperators($pdo)
{
    $sql = "SELECT COUNT(*) AS total FROM operator WHERE is_active = 0";
    return $pdo->query($sql)->fetch()['total'];
}

function adminLastItems($pdo)
{
    $sql = "SELECT item.*, operator.firstname, operator.lastname
            FROM item
            LEFT JOIN operator ON item.operator_id = operator.id
            ORDER BY item.created_at DESC
            LIMIT 5";
    return $pdo->query($sql)->fetchAll();
}
