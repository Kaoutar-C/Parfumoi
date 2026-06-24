<?php

function items_index($pdo)
{
    if (isset($_GET['delete'])) {
        deleteAdminItem($pdo, $_GET['delete']);
        redirect('/admin/items');
    }

    if (isset($_GET['disable'])) {
        disableAdminItem($pdo, $_GET['disable']);
        redirect('/admin/items');
    }

    if (isset($_GET['publish'])) {
        publishAdminItem($pdo, $_GET['publish']);
        redirect('/admin/items');
    }

    if (is_post() && isset($_POST['action']) && $_POST['action'] === 'edit') {
        updateAdminItem($pdo, $_POST['id'], $_POST);
        redirect('/admin/items');
    }

    $item_edit = null;
    if (isset($_GET['edit'])) {
        $item_edit = getAdminItemById($pdo, $_GET['edit']);
    }

    $search = $_GET['search'] ?? '';
    $items  = getAllAdminItems($pdo, $search);

    return render(__DIR__ . '/../views/items.php', [
        'items'     => $items,
        'item_edit' => $item_edit,
        'search'    => $search,
    ]);
}

function items_draft($pdo)
{
    if (isset($_GET['publish'])) {
        publishAdminItem($pdo, $_GET['publish']);
        redirect('/admin/items/draft');
    }

    if (isset($_GET['delete'])) {
        deleteAdminItem($pdo, $_GET['delete']);
        redirect('/admin/items/draft');
    }

    $items = getAdminDraftItems($pdo);

    return render(__DIR__ . '/../views/items_draft.php', [
        'items' => $items,
    ]);
}