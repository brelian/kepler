<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 8:04 PM
 */

namespace App\Structure\Stack;


use App\Structure\ADT\Stack;

class ArrayStack implements Stack
{
    /**
     * @var array 顺序存储栈的数组变量
     */
    private $stack;
    /**
     * @var int 栈的最大容量，构造时给出
     */
    private $limit;

    public function __construct(int $limit)
    {
        $this->stack = [];
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