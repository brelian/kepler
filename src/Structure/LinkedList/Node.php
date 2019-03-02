<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/1/19
 * Time: 9:59 PM
 */

namespace App\Structure\LinkedList;


class Node
{
    protected $val;
    protected $next;

    public function __construct($val)
    {
        $this->val = $val;
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