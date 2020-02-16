<?php

use App\Entity\Cart;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testIfClassCartExists()
    {
        $class = class_exists('\\App\\Entity\\Cart');

        $this->assertTrue($class);
    }

    public function testIfAddProductInCart()
    {
        $product = new Product();
        $product->setName('Product 1');
        $product->setPrice(20.10);
        $product->setCategory('Category One');

        $cart = new Cart();
        $cart->addProduct($product);

        $this->assertIsArray($cart->getProducts());
    }

    public function testIfValuesProductsInCartTheyAreCorrect()
    {
        $product = new Product();
        $product->setName('Product 1');
        $product->setPrice(20.10);
        $product->setCategory('Category One');

        $cart = new Cart();
        $cart->addProduct($product);

        $this->assertEquals('Product 1', $cart->getProducts()[0]->getName());
        $this->assertEquals(20.10, $cart->getProducts()[0]->getPrice());
        $this->assertEquals('Category One', $cart->getProducts()[0]->getCategory());
    }

    public function testIfTotalProductsTheyAreCorrect()
    {
        $productOne = new Product();
        $productOne->setName('Product 1');
        $productOne->setPrice(20.10);
        $productOne->setCategory('Category One');

        $productTwo = new Product();
        $productTwo->setName('Product 2');
        $productTwo->setPrice(22);
        $productTwo->setCategory('Category One');

        $cart = new Cart();
        $cart->addProduct($productOne);
        $cart->addProduct($productTwo);

        $this->assertEquals(2, $cart->totalProducts());
    }
}
