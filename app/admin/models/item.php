<?php

function getAllAdminItems($pdo)
{
    $sql = "SELECT item.*, brands.label AS brand_name, operator.firstname, operator.lastname
            FROM item
            LEFT JOIN brands ON item.marque_id = brands.id
            LEFT JOIN operator ON item.operator_id = operator.id
            ORDER BY item.id DESC";
    return $pdo->query($sql)->fetchAll();
}

function getAdminItemById($pdo, $id)
{
    $sql = "SELECT * FROM item WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function createAdminItem($pdo, $data)
{
    $sql = "INSERT INTO item (slug, label, prix, short_description, content, batch_code, item_condition, quantity, status, marque_id, category_id, theme_id, operator_id, created_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        $data['slug'],
        $data['label'],
        $data['prix'],
        $data['short_description'],
        $data['content'],
        $data['batch_code'],
        $data['item_condition'],
        $data['quantity'],
        $data['status'],
        $data['marque_id'],
        $data['category_id'],
        $data['theme_id'],
        $data['operator_id']
    ]);
}

function updateAdminItem($pdo, $id, $data)
{
    $sql = "UPDATE item
            SET slug = ?, label = ?, prix = ?, short_description = ?, content = ?, batch_code = ?, item_condition = ?, quantity = ?, status = ?, marque_id = ?, category_id = ?, theme_id = ?, operator_id = ?, updated_at = NOW()
            WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        $data['slug'],
        $data['label'],
        $data['prix'],
        $data['short_description'],
        $data['content'],
        $data['batch_code'],
        $data['item_condition'],
        $data['quantity'],
        $data['status'],
        $data['marque_id'],
        $data['category_id'],
        $data['theme_id'],
        $data['operator_id'],
        $id
    ]);
}

function disableAdminItem($pdo, $id)
{
    $sql = "UPDATE item SET status = 'disabled' WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function publishAdminItem($pdo, $id)
{
    $sql = "UPDATE item SET status = 'published' WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function deleteAdminItem($pdo, $id)
{
    $sql = "DELETE FROM item WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}

function adminCountItems(PDO $pdo): int
{
    $sql = "SELECT COUNT(*) AS total FROM item WHERE status = 'published'";
    return (int) $pdo->query($sql)->fetch()['total'];
}

function adminCountDraftItems(PDO $pdo): int
{
    $sql = "SELECT COUNT(*) AS total FROM item WHERE status = 'draft'";
    return (int) $pdo->query($sql)->fetch()['total'];
}

