<?php

function getAllCategories($pdo)
{
    return $pdo->query("SELECT * FROM category ORDER BY label ASC")->fetchAll();
}

function getAllTags($pdo)
{
    return $pdo->query("SELECT * FROM tag ORDER BY label ASC")->fetchAll();
}

function getAllNotes($pdo)
{
    return $pdo->query("SELECT * FROM note ORDER BY label ASC")->fetchAll();
}
