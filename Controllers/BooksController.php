<?php

namespace Controllers;

use Database;
use Models\Book;

class BooksController
{
    public static function getBooks(): array
    {
        $books = [];
        $db = new Database();

        foreach ($db->connection->query("SELECT * FROM products WHERE type = 'book'")->fetch_all() as $bookInfo) {
            $books[$bookInfo[1]] = new Book(
                $bookInfo[1],
                $bookInfo[2],
                $bookInfo[3],
                $bookInfo[4],
                $bookInfo[6]
            );
        }
        return $books;
    }

    public static function createBook(Book $book): void
    {
        $sku = $book->getSku();
        $name = $book->getName();
        $type = $book->getType();
        $price = $book->getPrice();
        $weight = $book->getWeight();

        $db = new Database();
        $db->connection->query("INSERT INTO products (sku, name, type, price, weight) VALUES ('$sku','$name','$type','$price','$weight')");
        unset($_SESSION['msg']);
        $_SESSION['msgClass'] = 'success';
        $_SESSION['msg'] = 'Book added!';
        header("location: /product/list");
    }
}