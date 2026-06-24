<?php

function adminCountAllItems(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM item")->fetchColumn();
}

function adminCountItems(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM item WHERE status = 'published'")->fetchColumn();
}

function adminCountDraftItems(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM item WHERE status = 'draft'")->fetchColumn();
}

function adminCountOperators(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM operator")->fetchColumn();
}

function adminCountBlockedOperators(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM operator WHERE is_active = 0")->fetchColumn();
}

function adminCountOperatorsWithItem(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(DISTINCT operator_id) FROM item")->fetchColumn();
}

function adminLastItems(PDO $pdo): array
{
    $sql = "SELECT item.*, operator.firstname, operator.lastname
            FROM item
            LEFT JOIN operator ON item.operator_id = operator.id
            ORDER BY item.created_at DESC
            LIMIT 5";
    return $pdo->query($sql)->fetchAll();
}

function adminCountPublishedItems(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM item WHERE status = 'published'")->fetchColumn();
}

function adminCountBrands(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM brands")->fetchColumn();
}

function adminCountCategories(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM category")->fetchColumn();
}

function adminCountThemes(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM theme")->fetchColumn();
}

function adminCountTags(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM tag")->fetchColumn();
}