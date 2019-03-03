<?php

namespace Tests;

use App\Structure\LinkedList\SingleLinkedList;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';

class LinkedListTest extends TestCase
{
    public function testDivideInt()
    {
        $this->assertEquals(3, floor(7 / 2));
        $this->assertEquals(3, floor(6 / 2));
    }
}

