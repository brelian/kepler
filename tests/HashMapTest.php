<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/8/19
 * Time: 7:57 PM
 */

namespace Tests;


use App\Structure\Hash\HashMap;
use PHPUnit\Framework\TestCase;

class HashMapTest extends TestCase
{
    public function testHashMap()
    {
        $map = new HashMap();
        for ($i = 0; $i < 20; $i++) {
            $map->set('key'.$i, $i * 2);
        }

        $this->assertEquals($map->get('key3'), 6);
        $this->assertEquals($map->get('key9'), 18);
        $map->print();
    }

}