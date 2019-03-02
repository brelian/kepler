<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 10:32 PM
 */

namespace App\Structure\Queue;


use App\Structure\ADT\Queue;
use App\Structure\LinkedList\Node;

class LinkedListQueue implements Queue
{
    private $front;
    private $rear;

    public function __construct(int $val)
    {
        $this->front = new Node($val);
        $this->rear = $this->front;
    }

    public function dequeue()
    {
        // TODO: Implement dequeue() method.
    }

    public function isEmpty()
    {
        // TODO: Implement isEmpty() method.
    }

    public function enqueue(string $item)
    {
        // TODO: Implement enqueue() method.
    }

    public function peek()
    {
        // TODO: Implement peek() method.
    }

}