<?php

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testIfClassCartExists()
    {
        $class = class_exists('\\App\\Entity\\Cart');

        $this->assertTrue($class);
    }
}
