<?php

function getAllBrands($pdo, $search = '')
{
    $sql = "SELECT * FROM brands WHERE label LIKE ? ORDER BY label ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['%' . $search . '%']);
    return $stmt->fetchAll();
}

function createBrand($pdo, $data)
{
    $sql = "INSERT INTO brands (slug, label) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$data['slug'], $data['label']]);
}

function deleteBrand($pdo, $id)
{
    $sql = "DELETE FROM brands WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}