<?php

namespace AppTest;

use App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testGetTitle()
    {
        $Hello = new Hello();
        
        $this->assertEquals($Hello->getTitle(), 'Hello World!');
    }
}