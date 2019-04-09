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


    public function preOrderTraverse(bool $recursive)
    {
        return $recursive ? $this->_preOrderTraverse($this->root) : $this->preOrderTraverseWithoutRecursive();
    }

    private function preOrderTraverseWithoutRecursive()
    {
        $stack = new ArrayStack(1024);
        $node = $this->root;
        $stack->push($node);
        while (!$stack->isEmpty()) {
            $node = $stack->pop();
            echo "\n";
            echo $node->data;
            if ($node->right) {
                $stack->push($node->right);
            }
            if ($node->left) {
                $stack->push($node->left);
            }
        }
    }

    private function _preOrderTraverse(BinaryNode $node)
    {
        if (!$node) {
            return;
        }
        echo "\n";
        echo $node->data;
        $this->_preOrderTraverse($node->left);
        $this->_preOrderTraverse($node->right);
    }

    public function delLeft()
    {
        // TODO: Implement delLeft() method.
    }

    public function delRight()
    {
        // TODO: Implement delRight() method.
    }


    public function inOrderTraverse(bool $recursive)
    {
        return $recursive ? $this->_inOrderTraverse($this->root) : $this->inOrderTraverseWithoutRecursive();
    }

    private function inOrderTraverseWithoutRecursive()
    {
        $stack = new ArrayStack(1024);
        $node = $this->root;
        while ($node || !$stack->isEmpty()) {
            while ($node) {
                $stack->push($node);
                $node = $node->left;
            }

            if (!$stack->isEmpty()) {
                $visited = $stack->pop();
                echo "\n";
                echo $visited->data;
                $node = $node->right;
            }
        }

    }

    private function _inOrderTraverse($node)
    {
        if (!$node) {
            return ;
        }
        $this->_inOrderTraverse($node->left);
        echo "\n";
        echo $node->data;
        $this->_inOrderTraverse($node->right);
    }


    public function postOrderTraverse(bool $recursive)
    {
        // TODO: Implement postOrderTraverse() method.
    }
}