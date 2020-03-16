<?php

namespace Models;

class Furniture extends Product
{
    protected $height;
    protected $width;
    protected $length;

    public function __construct(string $sku, string $name, string $type, int $price, int $height, int $width, int $length)
    {
        parent::__construct($sku, $name, $type, $price);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function getHeight(): string
    {
        return $this->height;
    }


    public function getWidth(): int
    {
        return $this->width;
    }


    public function getLength(): int
    {
        return $this->length;
    }


    public function getDimensions(): string
    {
        return $this->getHeight() / 10 . "x" . $this->getWidth() / 10 . "x" . $this->getLength() / 10;
    }
}