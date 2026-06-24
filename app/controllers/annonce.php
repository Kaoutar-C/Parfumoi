<?php

function annonce_index($pdo)
{
    if (!is_logged()) {
        redirect('/checkin/login');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $brands_id = createBrandIfNotExists($pdo, trim($_POST['brand_label']));
        $_POST['operator_id'] = $_SESSION['operator_id'];
        createAnnonce($pdo, $_POST, $brands_id);
        redirect('/mon_compte');
    }

    $brands     = getAllBrands($pdo);
    $categories = get_all_categories($pdo);
    $themes     = get_all_themes($pdo);
    $tags       = get_all_tags($pdo);

    return render('app/views/annonce.php', [
        'brands'     => $brands,
        'categories' => $categories,
        'themes'     => $themes,
        'tags'       => $tags,
    ]);
}

function annonce_delete($pdo, $id)
{
    if (!is_logged()) {
        redirect('/checkin/login');
    }

    deleteAnnonce($pdo, $id, $_SESSION['operator_id']);
    redirect('/mon_compte');
}