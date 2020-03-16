<?php

use Controllers\DvdsController;
use Controllers\BooksController;
use Controllers\FurnituresController;
use Models\Dvd;
use Models\Book;
use Models\Furniture;

if (isset($_POST['submit'])) {

    $sku = htmlspecialchars($_POST['sku']);
    $name = trim(htmlspecialchars($_POST['name']));
    $type = $_POST['type'];
    $size = (int)trim(htmlspecialchars($_POST['size']));
    $price = (int)trim(htmlspecialchars($_POST['price']));
    $weight = (int)trim(htmlspecialchars($_POST['weight']));
    $height = (int)trim(htmlspecialchars($_POST['height']));
    $width = (int)trim(htmlspecialchars($_POST['width']));
    $length = (int)trim(htmlspecialchars($_POST['length']));

    $_SESSION['sku'] = $_POST['sku'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['price'] = $_POST['price'];

    if ($type === 'dvd') {
        if (checkDvdFields($sku, $name, $price, $size)) {
            $_SESSION['msg'] = "Please, fill all fields!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }


        $dvd = new Dvd($sku, $name, $type, $price, $size);

        if (validateDvdName($dvd)) {
            $_SESSION['msg'] = "Only alphanumeric characters and \"-\"!";
            $_SESSION['msgClass'] = "warning";
            $_SESSION['nameField'] = "form-control is-invalid";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }
        unset($_SESSION['nameField']);

        if (validateDvdPrice($dvd)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            $_SESSION['priceField'] = "form-control is-invalid";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }


        if (validateDvdSize($dvd)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        } else {
            DvdsController::createDvd($dvd);

        }
    }

    if ($type === 'book') {
        if (checkBookFields($sku, $name, $price, $weight)) {
            $_SESSION['msg'] = "Please, fill all fields!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }


        $book = new Book($sku, $name, $type, $price, $weight);

        if (validateBookName($book)) {
            $_SESSION['msg'] = "Only alphanumeric characters and \"-\"!";
            $_SESSION['msgClass'] = "warning";
            $_SESSION['nameField'] = "form-control is-invalid";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }

        if (validateBookPrice($book)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            $_SESSION['priceField'] = "form-control is-invalid";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }


        if (validateBookWeight($book)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        } else {
            BooksController::createBook($book);

        }
    }
    if ($type === 'furniture') {
        if (checkFurnitureFields($sku, $name, $price, $height, $width, $length)) {
            $_SESSION['msg'] = "Please, fill all fields!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }

        $furniture = new Furniture($sku, $name, $type, $price, $height, $width, $length);

        if (validateFurnitureName($furniture)) {
            $_SESSION['msg'] = "Only alphanumeric characters and \"-\"!";
            $_SESSION['msgClass'] = "warning";
            $_SESSION['nameField'] = "form-control is-invalid";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }

        if (validateFurniturePrice($furniture)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            $_SESSION['priceField'] = "form-control is-invalid";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }


        if (validateFurnitureHeight($furniture)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }
        if (validateFurnitureWidth($furniture)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        }
        if (validateFurnitureLength($furniture)) {
            $_SESSION['msg'] = "Numbers only!";
            $_SESSION['msgClass'] = "warning";
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit;
        } else {
            FurnituresController::createFurniture($furniture);
        }
    }
}

