<?php

require_once __DIR__ . '/../models/home.php';

function home_index($pdo)
{
    $items = get_last_items($pdo);

    return render('app/views/home.php', [
        'items' => $items,
    ]);
}
