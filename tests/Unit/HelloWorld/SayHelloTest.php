<?php
namespace Tests\Unit\HelloWorld;

use \PHPUnit_Framework_TestCase;
use \HelloWorld\SayHello;

class SayHelloTest extends PHPUnit_Framework_TestCase
{
    public function testWorld()
    {
        $output = SayHello::world();
        $this->assertEquals("Hello Composer!", $output, "Failed to say hello to the world");
    }
}