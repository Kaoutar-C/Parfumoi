<?php

require_once __DIR__ . '/../models/annonce.php';

function annonce_index($pdo)
{
    session_start();

    if (!isset($_SESSION['operator_id'])) {
        header('Location: /connection');
        exit;
    }

    if (is_post()) {
        create_annonce($pdo, $_POST, $_FILES, $_SESSION['operator_id']);
        header('Location: /mon-compte');
        exit;
    }

    $categories = get_all_categories($pdo);
    $brands     = get_all_brands($pdo);
    $themes     = get_all_themes($pdo);

    return render('app/views/annonce.php', [
        'categories' => $categories,
        'brands'     => $brands,
        'themes'     => $themes,
    ]);
}
