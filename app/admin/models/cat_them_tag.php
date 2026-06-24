<?php

function getAllCategories($pdo)
{
    return $pdo->query("SELECT * FROM category ORDER BY label ASC")->fetchAll();
}

function createCategory($pdo, $data)
{
    $stmt = $pdo->prepare("INSERT INTO category (slug, label) VALUES (?, ?)");
    return $stmt->execute([$data['slug'], $data['label']]);
}

function deleteCategory($pdo, $id)
{
    $stmt = $pdo->prepare("DELETE FROM category WHERE id = ?");
    return $stmt->execute([$id]);
}

function getAllThemes($pdo)
{
    return $pdo->query("SELECT * FROM theme ORDER BY label ASC")->fetchAll();
}

function createTheme($pdo, $data)
{
    $stmt = $pdo->prepare("INSERT INTO theme (slug, label) VALUES (?, ?)");
    return $stmt->execute([$data['slug'], $data['label']]);
}

function deleteTheme($pdo, $id)
{
    $stmt = $pdo->prepare("DELETE FROM theme WHERE id = ?");
    return $stmt->execute([$id]);
}

function getAllTags($pdo)
{
    return $pdo->query("SELECT * FROM tag ORDER BY label ASC")->fetchAll();
}

function createTag($pdo, $data)
{
    $stmt = $pdo->prepare("INSERT INTO tag (slug, label) VALUES (?, ?)");
    return $stmt->execute([$data['slug'], $data['label']]);
}

function deleteTag($pdo, $id)
{
    $stmt = $pdo->prepare("DELETE FROM tag WHERE id = ?");
    return $stmt->execute([$id]);
}