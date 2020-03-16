<?php

use Controllers\ProductsController;

if (isset($_POST['apply'])) {

    if (!isset($_POST['checkBoxArray'])) {
        $_SESSION['msgClass'] = 'warning';
        $_SESSION['msg'] = 'No items selected!';
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    } else {
        $selectedItems = $_POST['checkBoxArray'];
        ProductsController::deleteProducts($selectedItems);
    }
}
