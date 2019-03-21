<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 9:36 PM
 */

namespace App\Algorithm\Sort;


interface SorterInterface
{

    public function quickSort(array $data);

    public function bubbleSort(array $data);

    public function insertionSort(array $data);

    public function shellSort(array $data);

    public function selectionSort(array $data);

    public function heapSort(array $data);

    public function mergeSort(array $data);

    public function bucketSort(array $data);

    public function radixSort(array $data);

}