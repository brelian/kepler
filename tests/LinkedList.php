<?php

namespace Tests;

use App\Structure\LinkedList\SingleLinkedList;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * 链表相关测试
 * @package Tests
 */
class LinkedListTest extends TestCase
{
    protected $singleLinkedList;
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->singleLinkedList = new SingleLinkedList();
    }

    public function testIsEmpty()
    {
        $this->assertEquals($this->singleLinkedList->isEmpty(), true);
    }

    public function testInsert()
    {
        $this->singleLinkedList->insert(0, 12);
        $this->singleLinkedList->insert(1, 13);
        $this->singleLinkedList->insert(2, 14);
    }

    public function testTraverse()
    {
        $this->assertEquals($this->singleLinkedList->length(), 3);

        // $output = $this->singleLinkedList->traverse();
        // $this->assertEquals($output, '12 13 14');
    }
}

