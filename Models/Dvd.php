<?php


namespace Models;

class Dvd extends Product
{
    protected $size;

    public function __construct(string $sku, string $name, string $type, int $price, int $size)
    {
        parent::__construct($sku, $name, $type, $price);
        $this->size = $size;
    }


    public function getSize(): string
    {
        return $this->size;
    }
}