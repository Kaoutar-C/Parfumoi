<?php

require_once __DIR__ . '/../models/home.php';

function home_index($pdo) {
    $data = [];

    $data['totalAllItems']          = adminCountAllItems($pdo);
    $data['totalPublishedItems']    = adminCountPublishedItems($pdo);
    $data['totalDraftItems']        = adminCountDraftItems($pdo);
    $data['totalOperators']         = adminCountOperators($pdo);
    $data['totalOperatorsWithItem'] = adminCountOperatorsWithItem($pdo);
    $data['totalBrands']            = adminCountBrands($pdo);
    $data['totalCategories']        = adminCountCategories($pdo);
    $data['totalThemes']            = adminCountThemes($pdo);
    $data['totalTags']              = adminCountTags($pdo);

    return render(__DIR__ . '/../views/home.php', $data);
}