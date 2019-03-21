<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/21/19
 * Time: 8:17 PM
 */

namespace App\Algorithm\Sort;


class InsertionSort
{
    public function sort(array $data): array
    {
        $this->selectionSort($data);
        return $data;
    }

    /**
     * current cursor left is sorted, then find the position of current cursor
     * @param array $data
     */
    private function selectionSort(array &$data):void
    {
        $length = count($data);
        for ($i = 1; $i < $length; $i++) {
            $cursor = $i;
            // while cursor data smaller then before, do exchange
            while ($cursor > 0 && $data[$cursor] < $data[$cursor-1]) {
                $this->exchange($data, $cursor, $cursor-1);
                $cursor--;
            }
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