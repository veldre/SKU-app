<?php

namespace Controllers;

use Database;

class ProductsController
{
    public static function deleteProducts($selectedItems)
    {
        if (isset($_POST['apply'])) {
            $db = new Database();

            $deletableItems = "'" . implode("','", $selectedItems) . "'";

            $db->connection->query("DELETE FROM products WHERE sku IN ($deletableItems) ");
            $_SESSION['msgClass'] = 'success';
            $_SESSION['msg'] = 'Selected items deleted!';
            header("location: /");
        }
    }
}

