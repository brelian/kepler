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

    private $top;

    public function __construct(int $limit)
    {
        $this->stack = [];
        $this->limit = $limit;
        $this->top = 0;
    }

    public function pop()
    {
        // TODO: Implement pop() method.
    }


    public function push($item)
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

    public function size()
    {
        // TODO: Implement size() method.
    }

}