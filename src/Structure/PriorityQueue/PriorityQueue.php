<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 10:43 AM
 */

namespace App\Structure\PriorityQueue;

use App\Structure\ADT\PriorityQueue as PriorityQueueInterface;
use App\Structure\Heap\MinHeap;

class PriorityQueue implements PriorityQueueInterface
{
    private $heap;

    public function __construct(int $size)
    {
        $this->heap = new MinHeap($size);
    }
}