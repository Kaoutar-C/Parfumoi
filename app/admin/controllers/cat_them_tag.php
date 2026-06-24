<?php

function cat_them_tag_index($pdo)
{
    if (isset($_GET['delete_category'])) {
        deleteCategory($pdo, $_GET['delete_category']);
        redirect('/admin/cat_them_tag');
    }

    if (isset($_GET['delete_theme'])) {
        deleteTheme($pdo, $_GET['delete_theme']);
        redirect('/admin/cat_them_tag');
    }

    if (isset($_GET['delete_tag'])) {
        deleteTag($pdo, $_GET['delete_tag']);
        redirect('/admin/cat_them_tag');
    }

    if (is_post() && isset($_POST['type'])) {
        if ($_POST['type'] === 'category') createCategory($pdo, $_POST);
        if ($_POST['type'] === 'theme')    createTheme($pdo, $_POST);
        if ($_POST['type'] === 'tag')      createTag($pdo, $_POST);
        redirect('/admin/cat_them_tag');
    }

    $categories = getAllCategories($pdo);
    $themes     = getAllThemes($pdo);
    $tags       = getAllTags($pdo);

    return render(__DIR__ . '/../views/cat_them_tag.php', [
        'categories' => $categories,
        'themes'     => $themes,
        'tags'       => $tags,
    ]);
}