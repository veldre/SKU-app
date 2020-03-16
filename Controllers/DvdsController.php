<?php

namespace Controllers;

use Database;
use Models\Dvd;

class DvdsController
{
    public static function getDvds(): array
    {
        $dvds = [];
        $db = new Database();

        foreach ($db->connection->query("SELECT * FROM products WHERE type = 'DVD'")->fetch_all() as $dvdInfo) {
            $dvds[$dvdInfo[1]] = new Dvd(
                $dvdInfo[1],
                $dvdInfo[2],
                $dvdInfo[3],
                $dvdInfo[4],
                $dvdInfo[5]
            );
        }
        return $dvds;
    }

    public static function createDvd(Dvd $dvd): void
    {
        $sku = $dvd->getSku();
        $name = $dvd->getName();
        $type = $dvd->getType();
        $price = $dvd->getPrice();
        $size = $dvd->getSize();

        $db = new Database();
        $db->connection->query("INSERT INTO products (sku, name, type, price, size) VALUES ('$sku','$name','$type','$price','$size')");
        unset($_SESSION);
        $_SESSION['msgClass'] = 'success';
        $_SESSION['msg'] = 'DVD added!';
        header("location: /product/list");
    }
}