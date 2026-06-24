<?php

function getAllAdminItems($pdo, $search = '')
{
    $sql = "SELECT item.*, brands.label AS brand_name, 
            operator.firstname, operator.lastname,
            category.label AS category_label,
            theme.label AS theme_label
            FROM item
            LEFT JOIN brands ON item.brands_id = brands.id
            LEFT JOIN operator ON item.operator_id = operator.id
            LEFT JOIN category ON item.category_id = category.id
            LEFT JOIN theme ON item.theme_id = theme.id
            WHERE item.label LIKE ?
            AND item.status != 'deleted'
            ORDER BY item.id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['%' . $search . '%']);
    return $stmt->fetchAll();
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
    $sql = "INSERT INTO item (slug, label, price, short_description, batch_code, item_condition, quantity, status, brands_id, category_id, theme_id, operator_id, created_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        $data['slug'],
        $data['label'],
        $data['price'],
        $data['short_description'],
        $data['batch_code'],
        $data['item_condition'],
        $data['quantity'],
        $data['status'],
        $data['brands_id'],
        $data['category_id'],
        $data['theme_id'],
        $data['operator_id']
    ]);
}

function updateAdminItem($pdo, $id, $data)
{
    $sql = "UPDATE item
            SET slug = ?, label = ?, price = ?, short_description = ?, batch_code = ?, item_condition = ?, quantity = ?, status = ?, brands_id = ?, category_id = ?, theme_id = ?, operator_id = ?, updated_at = NOW()
            WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        $data['slug'],
        $data['label'],
        $data['price'],
        $data['short_description'],
        $data['batch_code'],
        $data['item_condition'],
        $data['quantity'],
        $data['status'],
        $data['brands_id'],
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
    $stmt = $pdo->prepare("UPDATE item SET status = 'deleted' WHERE id = ?");
    return $stmt->execute([$id]);
}

function getAdminDraftItems($pdo)
{
    $sql = "SELECT item.*, brands.label AS brand_name, operator.firstname, operator.lastname
            FROM item
            LEFT JOIN brands ON item.brands_id = brands.id
            LEFT JOIN operator ON item.operator_id = operator.id
            WHERE item.status = 'draft'
            ORDER BY item.created_at ASC";
    return $pdo->query($sql)->fetchAll();
}