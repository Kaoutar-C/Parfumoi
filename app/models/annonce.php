<?php

function get_or_create_brand($pdo, $label)
{
    if (empty($label)) return null;

    $stmt = $pdo->prepare('SELECT id FROM brands WHERE label = ?');
    $stmt->execute([$label]);
    $brand = $stmt->fetch();

    if ($brand) {
        return $brand['id'];
    }

    $slug = strtolower(str_replace(' ', '-', $label));
    $stmt = $pdo->prepare('INSERT INTO brands (slug, label) VALUES (?, ?)');
    $stmt->execute([$slug, $label]);
    return $pdo->lastInsertId();
}

function create_annonce($pdo, $data, $files, $operator_id)
{
    $main_image = 'default.jpg';

    if (!empty($files['photo']['name'])) {
        $extension  = pathinfo($files['photo']['name'], PATHINFO_EXTENSION);
        $main_image = uniqid() . '.' . $extension;
        move_uploaded_file($files['photo']['tmp_name'], 'public/images/' . $main_image);
    }

    $slug      = strtolower(str_replace(' ', '-', $data['label']));
    $brands_id = get_or_create_brand($pdo, $data['brand_label'] ?? '');

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
        $brands_id,
        $data['theme_id'],
        $operator_id,
    ]);

    $item_id = $pdo->lastInsertId();

    if (!empty($data['tag_id'])) {
        $stmt = $pdo->prepare('INSERT INTO taguer (item_id, tag_id) VALUES (?, ?)');
        $stmt->execute([$item_id, $data['tag_id']]);
    }
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

function get_all_tags($pdo)
{
    return $pdo->query('SELECT * FROM tag ORDER BY label ASC')->fetchAll();
}