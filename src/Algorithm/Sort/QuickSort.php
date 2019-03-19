<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/7/19
 * Time: 8:49 PM
 */

namespace App\Algorithm\Sort;


class QuickSort
{
    public function sort($data)
    {
        $this->quickSort($data, 0, count($data) - 1); // 注意此处 -1，避免越界
        return $data;
    }

    private function quickSort(array &$data, int $lo, int $hi)
    {
        if ($hi <= $lo) { // 空数组，或只有一个元素
            return;
        }
        $j = $this->partition($data, $lo, $hi);
        $this->quickSort($data, $lo, $j - 1);
        $this->quickSort($data, $j + 1, $hi);
    }

    private function partition(array &$data, int $lo, int $hi)
    {
        $i = $lo;
        $j = $hi;
        $pivot = $data[$lo]; // 基准

        while ($i != $j) {
            /**
             * 找一个比基准小的，找到的时候会跳出循环
             */
            while ($pivot <= $data[$j] && $i < $j)
                $j--;
            /**
             * 找一个比基准大的，找到的时候会跳出循环
             * 如果已经有序，那么 $i == $hi 时终止循环
             */
            while ($data[$i] <= $pivot && $i < $j)
                $i++;

            $this->exchange($data, $i, $j);
        }
        $this->exchange($data, $lo, $j); // i 和 j 相遇的位置是 pivot 的位置
        return $j;
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