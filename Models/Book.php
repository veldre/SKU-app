<?php

namespace Models;

class Book extends Product
{
    protected $weight;

    public function __construct(string $sku, string $name, string $type, int $price, int $weight)
    {
        parent::__construct($sku, $name, $type, $price);
        $this->weight = $weight;
    }


    public function getWeight(): string
    {
        return $this->weight;
    }

    public function convertWeight(): string
    {
        $weight = number_format($this->weight / 1000, 2, '.', ' ');
        return $weight . " KG";
    }
}