<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/26/19
 * Time: 11:19 AM
 */

namespace Tests;


use App\Algorithm\FindSubString;
use PHPUnit\Framework\TestCase;

class FindSubStringTest extends TestCase
{
    public function testKMP()
    {
        $finder = new FindSubString();
        $this->assertEquals($finder->kmp('hello word', 'llo'), 2);
        $this->assertEquals($finder->kmp('', 'llo'), -1);
        $this->assertEquals($finder->kmp('abababcab', 'llo'), -1);
        $this->assertEquals($finder->kmp('abababcab', 'abcab'), 4);
    }

}