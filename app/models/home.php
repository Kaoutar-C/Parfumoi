<?php

function get_last_items($pdo)
{
    $stmt = $pdo->query(
        'SELECT item.*, brands.label AS brand_name
         FROM item
         LEFT JOIN brands ON item.brands_id = brands.id
         WHERE item.status = "published"
         ORDER BY RAND()
         LIMIT 3'
    );
    return $stmt->fetchAll();
}
