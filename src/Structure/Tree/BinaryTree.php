<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 9:49 AM
 */

namespace App\Structure\Tree;
use App\Structure\ADT\BinaryTree as BinaryTreeInterface;

class BinaryTree implements BinaryTreeInterface
{
    private $root;

    public function __construct(BinaryNode $node)
    {
        $this->root = $node;
    }

    public function clear()
    {
        if ($this->root !== null) {
           $this->_clear($this->root);
           $this->root = null;
        }
    }

    private function _clear(BinaryNode $node)
    {
        if ($node->left !== null) {
            $this->_clear($node->left);
        }

        if($node->right !== null) {
            $this->_clear($node->right);
        }
        unset($node);
    }


    public function size()
    {
        return $this->_size($this->root);
    }

    private function _size(BinaryNode $node)
    {
        if ($node === null) {
            return 0;
        }
         return 1 + $this->_size($node->left) + $this->_size($node->right);
    }


    public function height()
    {
        return $this->_height($this->root);
    }

    private function _height(BinaryNode $node)
    {
        if ($node === null) {
            return 0;
        }
        return 1 + max($this->_height($node->left), $this->_height($node->right));
    }


    public function preOrderTraverse()
    {

    }

    public function _preOrderTraverse(BinaryNode $node)
    {
        if ($node !== null) {
            echo $node->data;
            $this->_preOrderTraverse($node->left);
            $this->_preOrderTraverse($node->right);
        }
    }
}