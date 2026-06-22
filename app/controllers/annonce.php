<?php

require_once __DIR__ . '/../models/annonce.php';

function annonce_index($pdo)
{
    if (!isset($_SESSION['user_id'])) {
        redirect('/checkin/login');
    
    }

    if (is_post()) {
        create_annonce($pdo, $_POST, $_FILES, $_SESSION['operator_id']);
        header('Location: /mon_compte/index');
        exit;
    }

    $categories = get_all_categories($pdo);
    $brands     = get_all_brands($pdo);
    $themes     = get_all_themes($pdo);
    $tags       = get_all_tags($pdo);

    return render('app/views/annonce.php', [
        'categories' => $categories,
        'brands'     => $brands,
        'themes'     => $themes,
        'tags'       => $tags,
    ]);
}

function annonce_delete($pdo, $id)
{
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /checkin/login');
        exit;
    }

    $stmt = $pdo->prepare('DELETE FROM item WHERE id = ? AND operator_id = ?');
    $stmt->execute([$id, $_SESSION['operator_id']]);
    header('Location: /mon_compte/index');
    exit;
}