<?php


use Models\Dvd;

function checkDvdFields($sku, $name, $price, $size): bool
{
    return (empty($sku) || empty($name) || empty($price) || empty($size)) ?? true;
}


function validateDvdName(Dvd $dvd): bool
{
    return (!preg_match("/^[a-zA-Z0-9-\s]+$/", $dvd->getName())) ?? true;
}


function validateDvdPrice(Dvd $dvd): bool
{
    return (!preg_match("/^[0-9]*$/", $dvd->getPrice())) ?? true;
}


function validateDvdSize(Dvd $dvd): bool
{
    return (!preg_match("/^[0-9]*$/", $dvd->getPrice())) ?? true;
}


