<?php

namespace Models;

class Product
{
    protected $sku;
    protected $name;
    protected $type;
    protected $price;

    public function __construct(string $sku, string $name, string $type, int $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function getSku(): string
    {
        return $this->sku;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getType(): string
    {
        return $this->type === "dvd" ? strtoupper($this->type) : ucfirst($this->type);
    }


    public function getPrice(): string
    {
        return $this->price;
    }

    public function convertPrice(): string
    {
        $price = number_format($this->price / 100, 2, '.', ' ');
        return "$ " . $price;
    }
}