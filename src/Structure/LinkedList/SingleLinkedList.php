<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/1/19
 * Time: 9:43 PM
 */

namespace App\Structure\LinkedList;


use App\Structure\ADT\LinkedList;

class SingleLinkedList implements LinkedList
{
    protected $head; // 头节点 --> 首节点

    public function create()
    {
        $this->head = new Node(0);
        $this->head->next = null;
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function delete($i)
    {
        // TODO: Implement delete() method.
    }

    public function length()
    {
        // TODO: Implement length() method.
    }

    public function traverse()
    {
        // TODO: Implement traverse() method.
    }

    public function insert($i, $data)
    {
        // TODO: Implement insert() method.
    }

    public function search($val): int
    {
        // TODO: Implement search() method.
    }


}