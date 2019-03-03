<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 11:29 AM
 */

namespace Tests;


use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testDivide()
    {
        $this->assertEquals(3, 6 >> 2);
        echo 7 >> 2;
        $this->assertEquals(3, 7 >> 2);
    }

}