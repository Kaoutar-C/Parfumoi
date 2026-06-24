<?php

function createAnnonce($pdo, $data, $brands_id)
{
    $slug = strtolower(trim($data['label']));
    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    $slug = trim($slug, '-');

    $main_image = 'default.jpg';
    if (!empty($_FILES['main_image']['name'])) {
        $ext = pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION);
        $main_image = $slug . '.' . $ext;
        move_uploaded_file($_FILES['main_image']['tmp_name'], __DIR__ . '/../../public/images/' . $main_image);
    }

    $stmt = $pdo->prepare(
        "INSERT INTO item (slug, label, price, short_description, batch_code, item_condition, quantity, quantity_left, status, brands_id, category_id, theme_id, operator_id, main_image, created_at, updated_at)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'draft', ?, ?, ?, ?, ?, NOW(), NOW())"
    );
    $stmt->execute([
        $slug,
        $data['label'],
        $data['price'],
        $data['short_description'],
        $data['batch_code'],
        $data['item_condition'],
        $data['quantity'],
        $data['quantity_left'],
        $brands_id,
        $data['category_id'],
        $data['theme_id'],
        $data['operator_id'],
        $main_image,
    ]);

    $item_id = $pdo->lastInsertId();

    if (!empty($data['tag_id'])) {
        $stmt = $pdo->prepare("INSERT INTO taguer (item_id, tag_id) VALUES (?, ?)");
        $stmt->execute([$item_id, $data['tag_id']]);
    }

    return $item_id;
}

function createBrandIfNotExists($pdo, $brand_label)
{
    $stmt = $pdo->prepare("SELECT * FROM brands WHERE LOWER(label) = LOWER(?)");
    $stmt->execute([$brand_label]);
    $brand = $stmt->fetch();

    if ($brand) {
        return $brand['id'];
    }

    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $brand_label)));
    $stmt = $pdo->prepare("INSERT INTO brands (slug, label) VALUES (?, ?)");
    $stmt->execute([$slug, $brand_label]);
    return $pdo->lastInsertId();
}

function deleteAnnonce($pdo, $id, $operator_id)
{
    $stmt = $pdo->prepare("UPDATE item SET status = 'deleted' WHERE id = ? AND operator_id = ?");
    return $stmt->execute([$id, $operator_id]);
}