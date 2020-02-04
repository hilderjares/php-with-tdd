<?php

namespace App;

use App\Entity\Product;
use PHPUnit\Framework\Constraint\IsEmpty;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testIfProductNameExist()
    {
        $product = new Product();
        $product->setName('product 01');

        $this->assertNotNull($product->getName(), "product name not exists");
    }

    public function testIfProductPriceExist()
    {
        $product = new Product();
        $product->setPrice(20.01);

        $this->assertNotNull($product->getPrice(), "product price not exists");
    }

    public function testIfProductCategoryExist()
    {
        $product = new Product();
        $product->setCategory('basic');

        $this->assertNotNull($product->getCategory(), "product category not exists");
    }
}
