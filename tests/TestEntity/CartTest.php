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

    public function testAddProductInCart()
    {
        $product = new Product();
        $product->setName('Product 1');
        $product->setPrice(20.10);
        $product->setCategory('Category One');
        
        $cart = new Cart();
        $cart->addProduct($product);

        $this->assertIsArray($cart->getProducts());
    }
}
