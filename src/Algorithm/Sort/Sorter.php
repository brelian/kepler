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
    public function bubbleSort(array $data)
    {
        // TODO: Implement bubbleSort() method.
    }

    public function bucketSort(array $data)
    {
        $sorter = new BucketSort();
        return $sorter->sort($data);
    }

    public function heapSort(array $data)
    {
        // TODO: Implement heapSort() method.
    }

    public function insertionSort(array $data)
    {
        $sorter = new InsertionSort();
        return $sorter->sort($data);
    }

    public function mergeSort(array $data)
    {
        // TODO: Implement mergeSort() method.
    }

    public function quickSort(array $data)
    {
        $sorter = new QuickSort();
        return $sorter->sort($data); // 防止越界
    }

    public function radixSort(array $data)
    {
        // TODO: Implement radixSort() method.
    }

    public function selectionSort(array $data)
    {
        $sorter = new SelectionSort();
        return $sorter->sort($data);
    }

    public function shellSort(array $data)
    {
        // TODO: Implement shellSort() method.
    }

    // ============= helpers ==============
    private function traverse(array $data): void
    {
        foreach ($data as $datum) {
            echo $datum. '\n';
        }
    }
}