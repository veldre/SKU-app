<?php
ob_start();
include_once __DIR__ . '/includes/header.php';


$redirect = $_SERVER['REQUEST_URI'];
switch ($redirect) {
    case '/product/new' :
        require __DIR__ . '/views/product/create.php';
        break;
    default:
        require __DIR__ . '/views/product/index.php';
        break;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($redirect === '/product/store') {
        require __DIR__ . '/views/product/store.php';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apply'])) {

    require __DIR__ . '/views/product/delete.php';
}

include_once __DIR__ . '/includes/footer.php';