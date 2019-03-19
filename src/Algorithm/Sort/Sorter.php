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
        // $sorter = new
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
        $sorter = new QuickSort();
        return $sorter->sort($data); // 防止越界
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