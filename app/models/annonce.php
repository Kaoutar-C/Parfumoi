<?php

function create_annonce($pdo, $data, $files, $operator_id)
{
    $main_image = 'default.jpg';

    if (!empty($files['photo']['name'])) {
        $extension  = pathinfo($files['photo']['name'], PATHINFO_EXTENSION);
        $main_image = uniqid() . '.' . $extension;
        move_uploaded_file($files['photo']['tmp_name'], 'public/images/' . $main_image);
    }

    $slug = strtolower(str_replace(' ', '-', $data['label']));

    $stmt = $pdo->prepare(
        'INSERT INTO item (slug, label, short_description, price, batch_code, quantity, item_condition, status, main_image, category_id, brands_id, theme_id, operator_id, created_at, updated_at)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())'
    );

    $stmt->execute([
        $slug,
        $data['label'],
        $data['short_description'] ?? '',
        $data['price'],
        $data['batch_code'] ?? '',
        $data['contenance'],
        $data['item_condition'] ?? 'neuf',
        $data['status'] ?? 'published',
        $main_image,
        $data['category_id'],
        $data['brands_id'],
        $data['theme_id'],
        $operator_id,
    ]);
}

function get_all_categories($pdo)
{
    return $pdo->query('SELECT * FROM category ORDER BY label ASC')->fetchAll();
}

function get_all_brands($pdo)
{
    return $pdo->query('SELECT * FROM brands ORDER BY label ASC')->fetchAll();
}

function get_all_themes($pdo)
{
    return $pdo->query('SELECT * FROM theme ORDER BY label ASC')->fetchAll();
}
