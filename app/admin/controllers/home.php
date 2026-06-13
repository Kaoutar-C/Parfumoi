<?php



require_once __DIR__ . '/../../../config/data.php';
require_once __DIR__ . '/../admin/models/home.php';

function home_index($PDO){
    
$data = [];

$totalItems = adminCountItems($pdo);
$totalOperators = adminCountOperators($pdo);

$totalBlockedOperators = adminCountBlockedOperators($pdo);
$lastItems = adminLastItems($pdo);
return render('app/admin/views/home.php', $data);}




