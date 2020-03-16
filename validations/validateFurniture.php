<?php

use Models\Furniture;

function checkFurnitureFields($sku, $name, $price, $height, $width, $length): bool
{
    return (empty($sku) || empty($name) || empty($price) || empty($height) | empty($width) || empty($length)) ?? true;
}


function validateFurnitureName(Furniture $furniture): bool
{
    return (!preg_match("/^[a-zA-Z0-9-\s]+$/", $furniture->getName())) ?? true;
}


function validateFurniturePrice(Furniture $furniture): bool
{
    return (!preg_match("/^[0-9]*$/", $furniture->getPrice())) ?? true;
}


function validateFurnitureHeight(Furniture $furniture): bool
{
    return (!preg_match("/^[0-9]*$/", $furniture->getHeight())) ?? true;
}

function validateFurnitureWidth(Furniture $furniture): bool
{
    return (!preg_match("/^[0-9]*$/", $furniture->getWidth())) ?? true;
}

function validateFurnitureLength(Furniture $furniture): bool
{
    return (!preg_match("/^[0-9]*$/", $furniture->getLength())) ?? true;
}


