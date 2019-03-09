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

    public function __construct()
    {
        $this->create();
    }

    public function create()
    {
        $this->head = new Node(0);
        $this->head->next = null;
    }

    /**
     * 功能： 判空
     * 实现： 头节点的指针域是否为 null
     * @return bool|mixed
     */
    public function isEmpty()
    {
        return $this->head->next === null;
    }

    /**
     * 功能： 清空链表
     * 实现： 逐一删除除头节点以外的所有节点
     * @return mixed|void
     */
    public function clear()
    {
        $cursor = $this->head;
        while ($cursor !== null) {
            $tmp = $cursor;
            $cursor = $cursor->next;
            unset($tmp);
        }
    }

    public function delete($i)
    {
        // TODO: Implement delete() method.
    }

    /**
     * 功能： 求得链表的长度，使用 O(n) 复杂度，可以通过维护类属性 length 来降低复杂度为 O(1)
     * 实现： 使用游标节点遍历链表
     * @return int|mixed
     */
    public function length()
    {
        $cursor = $this->head;
        $length = 0;
        while ($cursor->next !== null) {
            $length += 1;
            $cursor = $cursor->next;
        }

        return $length;
    }

    public function traverse()
    {
        $cursor = $this->head;
        $output = '';
        while ($cursor->next !== null) {
            $output .= $cursor->val . ' ';
        }

        return $output;
    }

    public function insert($i, $data)
    {
        $cursor = $this->head;
        for ($j = 0; $j < $i; $j++) {
            $cursor = $cursor->next;
        }
        $additionalNode = new Node($data);
        $additionalNode->next = $cursor->next;
        $cursor->next = $additionalNode;
    }

    public function search($val): int
    {
        // TODO: Implement search() method.
    }


}