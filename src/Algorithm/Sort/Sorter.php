<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 9:34 PM
 */

namespace App\Algorithm\Sort;


class Sorter implements SorterInterface
{
    public function bubbleSort(array &$data)
    {
        // TODO: Implement bubbleSort() method.
    }

    public function bucketSort(array &$data)
    {
        // TODO: Implement bucketSort() method.
    }

    public function heapSort(array &$data)
    {
        // TODO: Implement heapSort() method.
    }

    public function insertionSort(array &$data)
    {
        // TODO: Implement insertionSort() method.
    }

    public function mergeSort(array &$data)
    {
        // TODO: Implement mergeSort() method.
    }

    public function quickSort(array $data)
    {

        $this->_quickSort($data, 0, count($data) - 1); // 防止越界
        return $data;
    }

    private function _quickSort(array &$data, int $lo, int $hi)
    {
        if ($hi <= $lo) { // 空数组，或只有一个元素
            return ;
        }
        $j = $this->partition($data, $lo, $hi);
        $this->_quickSort($data, $lo, $j-1);
        $this->_quickSort($data, $j+1, $hi);
    }

    private function partition(array &$data, int $lo, int $hi)
    {
        $i = $lo;
        $j = $hi + 1;
        $pivot = $data[$lo];

        while (true) {
            while ($data[++$i] < $pivot) {
                if ($i === $hi) break;
            }
            while ($pivot < $data[--$j]) {
                if ($j === $lo) break;
            }
            if ($i >= $j) {
                break;
            }
            // exchange
            $this->exchange($data, $i, $j);
        }
        $this->exchange($data, $lo, $j); // i 和 j 相遇的位置是 pivot 的位置
        return $j;
    }

    private function exchange(array &$data, int $i, int $j):void
    {
        if ($data[$i] === $data[$j]) {
            return ;
        }
        $data[$i] ^= $data[$j];
        $data[$j] ^= $data[$i];
        $data[$i] ^= $data[$j];
    }

    public function radixSort(array &$data)
    {
        // TODO: Implement radixSort() method.
    }


    public function selectionSort(array &$data)
    {
        // TODO: Implement selectionSort() method.
    }

    public function shellSort(array &$data)
    {
        // TODO: Implement shellSort() method.
    }
}