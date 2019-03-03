<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 10:39 AM
 */

namespace App\Structure\Heap;


use App\Structure\ADT\Heap;

class MinHeap implements Heap
{
    private $heap;
    private $count;

    public function __construct(int $size)
    {
        // initial heap fill with zero
        $this->heap = array_fill(0, $size, 0);
        $this->count = 0;
    }

    public function create(array $list)
    {
        array_map(function($item){
            $this->insert($item);
        }, $list);
    }

    public function insert(int $val)
    {
        if ($this->count === 0) {
            $this->heap[0] = $val;
            $this->count = 1;
        } else {
            $this->heap[$this->count] = $val;
            $this->count++;
            $this->shiftUp();
        }
    }

    public function shiftUp()
    {
        // 带上浮元素的位置
        $up = $this->count - 1;
        // 父亲节点, 此处整数除法 floor(6/3) == floor( 7 / 2) == 3
        $parent = floor(($up - 1) / 2);

        while ($up > 0 && $this->heap[$parent] > $this->heap[$up]) {
            $this->heapItemSwap($this->heap[$up], $this->heap[$parent]);
            $up = $parent;
            $parent = floor(($up - 1) / 2);
        }
    }

    public function shiftDown(int $down)
    {
        $smallest = $down;
        // 左孩子位置
        $left = $smallest * 2 + 1;
        // 右孩子位置
        $right = ($smallest + 1) * 2;
        // 与左右孩子中的最小比较: 谁大谁下沉
        if ($left < $this->count && $this->heap[$left] < $this->heap[$smallest]) {
            $smallest = $left;
        }
        if ($right < $this->count && $this->heap[$right] < $this->heap[$smallest]) {
            $smallest = $right;
        }

        // 如果元素序号发生改变：交换
        if ($smallest !== $down) {
            $this->heapItemSwap($down, $smallest);
            $this->shiftDown($smallest);
        }
    }


    private function heapItemSwap(int $a ,int $b)
    {
        // TODO
    }



}