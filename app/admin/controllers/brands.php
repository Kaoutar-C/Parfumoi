<?php

function brands_index($pdo)
{
    if (isset($_GET['delete'])) {
        deleteBrand($pdo, $_GET['delete']);
        redirect('/admin/brands');
    }

    if (is_post()) {
        createBrand($pdo, $_POST);
        redirect('/admin/brands');
    }

    $search = $_GET['search'] ?? '';
    $brands = getAllBrands($pdo, $search);

    return render(__DIR__ . '/../views/brands.php', [
        'brands' => $brands,
        'search' => $search,
    ]);
}