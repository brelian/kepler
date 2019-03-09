<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/1/19
 * Time: 9:59 PM
 */

namespace App\Structure\LinkedList;

/**
 * 线性表的实现主要在于节点的设计，单链表的节点包括两个部分
 *      - 数据域 $val
 *      - 指针域 存储后继元素的地址 $next
 * Class Node
 * @package App\Structure\LinkedList
 */
class Node
{
    protected $val;
    protected $next;

    public function __construct($val)
    {
        $this->val = $val;
        $this->next = null;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}