<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 9:49 AM
 */

namespace App\Structure\Tree;


class BinaryNode
{
    private $data;
    private $left;
    private $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}