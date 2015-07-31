<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

Use HelloWorld\SayHello;

Class Test Extends PHPUnit_Framework_TestCase
{
    public function test() {
        $this->assertEquals('Hello Composer!', SayHello::world());
    }
}
