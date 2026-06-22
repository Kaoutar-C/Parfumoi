<?php

session_start();

require 'core/http.php';
require 'core/router.php';
require 'core/html.php';
require_once 'app/models/operator.php';
require 'config/database.php';

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