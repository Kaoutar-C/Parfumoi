<?php

function adminCountAllItems(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(*) FROM item")->fetchColumn();
}

function adminCountPublishedItems(PDO $pdo): int
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

function adminCountOperatorsWithItem(PDO $pdo): int
{
    return (int) $pdo->query("SELECT COUNT(DISTINCT operator_id) FROM item")->fetchColumn();
}
