<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 8:05 PM
 */

namespace App\Structure\Stack;


use App\Structure\ADT\Stack;
use App\Structure\LinkedList\SingleLinkedList;

class LinkedStack implements Stack
{
    private $stack;
    private $limit;

    public function __construct(int $limit)
    {
        $this->stack = new SingleLinkedList();
        $this->limit = $limit;
    }

    public function pop()
    {
        // TODO: Implement pop() method.
    }

    public function push()
    {
        // TODO: Implement push() method.
    }

    public function isEmpty()
    {
        // TODO: Implement isEmpty() method.
    }

    public function top()
    {
        // TODO: Implement top() method.
    }
}