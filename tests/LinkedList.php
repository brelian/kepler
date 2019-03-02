<?php

namespace Tests;

use App\Structure\LinkedList\SingleLinkedList;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';

class LinkedListTest extends TestCase
{
    public function testHello()
    {
        $single = new SingleLinkedList(234);
        $root = $single->getRoot();
        $this->assertEquals(234,$root->getVal());
        return $single;
    }
}

