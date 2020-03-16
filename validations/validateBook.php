<?php

use Models\Book;

function checkBookFields($sku, $name, $price, $weight): bool
{
    return (empty($sku) || empty($name) || empty($price) || empty($weight)) ?? true;
}


function validateBookName(Book $book): bool
{
    return (!preg_match("/^[a-zA-Z0-9-\s]+$/", $book->getName())) ?? true;
}


function validateBookPrice(Book $book): bool
{
    return (!preg_match("/^[0-9]*$/", $book->getPrice())) ?? true;
}


function validateBookWeight(Book $book): bool
{
    return (!preg_match("/^[0-9]*$/", $book->getWeight())) ?? true;
}


