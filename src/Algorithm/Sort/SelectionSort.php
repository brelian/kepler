<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/21/19
 * Time: 7:56 PM
 */

namespace App\Algorithm\Sort;


class SelectionSort
{
    public function sort(array $data):array
    {
        $this->selectionSort($data);
        return $data;
    }

    private function selectionSort(array &$data):void
    {
        $length = count($data);
        /**
         * minimum item position
         */
        $minPos = 0;
        for ($i = 0; $i < $length-1; $i++) {
            // find minimum item
           for ($j = $i + 1; $j < $length; $j++) {
               if ($data[$j] < $data[$minPos]) {
                   $minPos = $j;
               }

           }
           // move minimum item to position i

            $this->exchange($data, $i, $minPos);
        }
    }

    private function exchange(array &$data, int $i, int $j): void
    {
        if ($data[$i] === $data[$j]) {
            return;
        }
        $data[$i] ^= $data[$j];
        $data[$j] ^= $data[$i];
        $data[$i] ^= $data[$j];
    }

}