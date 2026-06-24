<?php

session_start();

require __DIR__ . '/core/http.php';
require __DIR__ . '/core/router.php';
require __DIR__ . '/core/html.php';
require __DIR__ . '/config/database.php';
require_once __DIR__ . '/app/admin/models/brand.php';
require_once __DIR__ . '/app/admin/models/operators.php';
require_once __DIR__ . '/app/admin/models/item.php';
require_once __DIR__ . '/app/admin/models/cat_them_tag.php';
require_once __DIR__ . '/app/models/operator.php';
require_once __DIR__ . '/app/models/vendre.php';
require_once __DIR__ . '/app/models/product.php';
require_once __DIR__ . '/app/models/catalogue.php';
require_once __DIR__ . '/app/models/annonce.php';
require_once __DIR__ . '/app/models/mon_compte.php';

$base = __DIR__ . '/app';

$segments = http_in($_SERVER['REQUEST_URI']);

if (isset($segments[0]) && $segments[0] === 'admin') {

    if (empty($_SESSION['user_id'])) {
        redirect('/checkin/login');
    }

    $base = __DIR__ . '/app/admin';

    array_shift($segments);
}

$route = route($segments);

$main = run($route, $base, $pdo);

$body = render($base . '/views/_layout.php', ['page_content' => $main]);

http_out(200, $body);
exit;