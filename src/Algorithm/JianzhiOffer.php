<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/19/19
 * Time: 9:40 AM
 */

namespace App\Algorithm;


class JianzhiOffer
{
    /**
     * No.3
     * given n integer items array, and all items in [0, n-1]
     * assumption:
     *  1. each given array must have at least a repeat item
     * @param array $arr given integer array
     * @return mixed output repeated number or false
     */
    public function findRepeatInArray(array $arr)
    {
        $len = count($arr);

        // handel illegal input
        if (empty($arr)) {
            return false;
        }
        for ($i = 0; $i < $len; $i++) {
            if ($arr[$i] < 0 || $arr[$i] > $len - 1) {
                return false;
            }
        }

        for ($i = 0; $i < $len; $i++) {
            while ($arr[$i] != $i) {
                $j = $arr[$i];
                if ($arr[$j] === $arr[$i]) {
                    return $arr[$i];
                }
                // exchange
                $arr[$i] ^= $arr[$j];
                $arr[$j] ^= $arr[$i];
                $arr[$i] ^= $arr[$j];
            }
        }

        return false;
    }

    /**
     * Mo.4 find item in two sorted dimensional array
     * @param array $arr
     * @param $target
     * @return bool
     */
    public function findInTwoDimensionalArray(array $arr, $target)
    {
        $i = 0;
        $vLen = count($arr);
        $j = count($arr[0]) - 1;
        while ($i < $vLen && $j >= 0 ) {
            if ($target === $arr[$i][$j]) {
                return true;
            } else if ($target < $arr[$i][$j]) {
                $j--;
            } else {
                $i++;
            }
        }

        return false;
    }


    public function fibonacci(int $n)
    {
        if ($n < 0) {
            return false;
        }
        if ($n < 2) {
            return $n;
        }

        $result = 0;
        $beforeOne = 1;
        $beforeTwo = 0;

        $i = 2;
        while ($i <= $n) {
            $result = $beforeOne + $beforeTwo;
            $beforeTwo = $beforeOne;
            $beforeOne = $result;
            $i++;
        }
        return $result;
    }
}