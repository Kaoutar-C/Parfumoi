<?php

require_once __DIR__ . '/../models/mon_compte.php';

function favoris_toggle($pdo, $id)
{
    if (!isset($_SESSION['operator_id'])) {
        header('Location: /checkin/login');
        exit;
    }

    $favoris     = get_favoris($pdo, $_SESSION['operator_id']);
    $ids_favoris = array_map('intval', array_column($favoris, 'id'));

    if (in_array((int)$id, $ids_favoris)) {
        remove_from_favoris($pdo, $_SESSION['operator_id'], $id);
    } else {
        add_to_favoris($pdo, $_SESSION['operator_id'], $id);
    }

    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '/home/index'));
    exit;
}