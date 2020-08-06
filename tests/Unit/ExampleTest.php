<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    function test_echo()
    {
        $a = 10; 
        
        dd($a++ + $a++); 
    }
}
