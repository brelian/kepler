<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 9:49 AM
 */

namespace App\Structure\Tree;
use App\Structure\ADT\BinaryTree as BinaryTreeInterface;
use App\Structure\Stack\ArrayStack;

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
        $this->_preOrderTraverse();
    }

    private function _preOrderTraverse(BinaryNode $node)
    {
        if ($node !== null) {
            echo $node->data;
            $this->_preOrderTraverse($node->left);
            $this->_preOrderTraverse($node->right);
        }
    }

    public function delLeft()
    {
        // TODO: Implement delLeft() method.
    }

    public function delRight()
    {
        // TODO: Implement delRight() method.
    }


    /**
     *  1. 首选将当前节点root的各个左子节点压入栈
     *  2. 然后依次从栈中取数据，进行打印，将当前节点置为栈顶的右孩子节点，回到1
     *  3. 直至栈为空
     */
    public function midOrderTraverse()
    {
        $current = $this->root;
        $stack = new ArrayStack(1020);
        if ($current === null) {
            return ;
        }
        while ($current !== null || $stack->size() > 0) {
            while ($current !== null) {
                $stack->push($current);
                $current = $current->left;
            }

            if ($stack->size() > 0) {
                $current = $stack->pop();
                echo "\n" . $current->data; // output node value
                $current = $current->right;
            }
        }
    }


    public function postOrderTraverse()
    {
        // TODO: Implement postOrderTraverse() method.
    }
}