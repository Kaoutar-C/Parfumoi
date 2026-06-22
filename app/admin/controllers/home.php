<?php

require_once __DIR__ . '/../models/home.php';

function home_index($pdo) {
    $data = [];

    $data['totalAllItems']          = adminCountAllItems($pdo);
    $data['totalPublishedItems']    = adminCountPublishedItems($pdo);
    $data['totalDraftItems']        = adminCountDraftItems($pdo);
    $data['totalOperators']         = adminCountOperators($pdo);
    $data['totalOperatorsWithItem'] = adminCountOperatorsWithItem($pdo);

    return render('app/admin/views/home.php', $data);
}