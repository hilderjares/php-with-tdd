<?php

declare(strict_types=1);

namespace App\Entity;

class Cart
{
    private $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function totalProducts(): int
    {
        return count($this->products);
    }
}
