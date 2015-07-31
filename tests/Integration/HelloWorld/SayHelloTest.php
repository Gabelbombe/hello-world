<?php
namespace Tests\Integration\HelloWorld;

use HelloWorld\SayHello;
use PHPUnit_Framework_TestCase;

class SayHelloTest extends PHPUnit_Framework_TestCase
{
    public function testNotLowerCase()
    {
        $output = SayHello::world();
        $this->assertNotEquals($output, strtolower($output), "The String is Lower Case");
    }
    public function testNotMisspelled()
    {
        $output = SayHello::world();
        $this->assertContains('Composer', $output, "Composer is misspelt");
    }
}