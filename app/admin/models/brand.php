<?php

function getAllBrands($pdo)
{
    $sql = "SELECT * FROM brands ORDER BY label ASC";
    return $pdo->query($sql)->fetchAll();
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
