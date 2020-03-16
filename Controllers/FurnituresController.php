<?php

namespace Controllers;

use Database;
use Models\Furniture;

class FurnituresController
{
    public static function getFurnitures(): array
    {
        $furnitures = [];
        $db = new Database();

        foreach ($db->connection->query("SELECT * FROM products WHERE type = 'furniture'")->fetch_all() as $furnitureInfo) {
            $furnitures[$furnitureInfo[1]] = new Furniture(
                $furnitureInfo[1],
                $furnitureInfo[2],
                $furnitureInfo[3],
                $furnitureInfo[4],
                $furnitureInfo[7],
                $furnitureInfo[8],
                $furnitureInfo[9]
            );
        }
        return $furnitures;
    }

    public static function createFurniture(Furniture $furniture): void
    {
        $sku = $furniture->getSku();
        $name = $furniture->getName();
        $type = $furniture->getType();
        $price = $furniture->getPrice();
        $height = $furniture->getHeight();
        $width = $furniture->getWidth();
        $length = $furniture->getLength();

        $db = new Database();
        $db->connection->query("INSERT INTO products (sku, name, type, price, height, width, length) VALUES ('$sku','$name','$type','$price','$height','$width','$length')");
        unset($_SESSION['msg']);
        $_SESSION['msgClass'] = 'success';
        $_SESSION['msg'] = 'Furniture added!';
        header("location: /product/list");
    }
}