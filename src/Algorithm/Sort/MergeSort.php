<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/9/19
 * Time: 8:18 PM
 */

namespace App\Algorithm\Sort;


class MergeSort
{

    public function sort(array $data)
    {
        $len = count($data);
        if ($len < 2) {
            return $data;
        }
        $this->ordering($data, 0, $len - 1);
        return $data;
    }

    private function ordering(array &$data, int $lo, int $hi)
    {
        if ($hi <= $lo) {
            return;
        }
        $mid = $lo + (($hi - $lo) >> 1);
        $this->ordering($data, $lo, $mid);
        $this->ordering($data, $mid + 1, $hi);
        $this->merge($data, $lo, $mid, $hi);
    }

    private function merge(array &$data, int $lo, int $mid, int $hi)
    {
        $aux = [];
        $i = $lo;
        $j = $mid + 1;

        // copy to $aux from $lo to $hi
        for ($k = $lo; $k <= $hi; $k++) {
            $aux[$k] = $data[$k];
        }

        // merge $aux to origin space $data
        for ($k = $lo; $k <= $hi; $k++) {
            if ($i > $mid) {
                $data[$k] = $aux[$j++];
            } else if ($j > $hi) {
                $data[$k] = $aux[$i++];
            } else if ($aux[$i] < $aux[$j]) {
                $data[$k] = $aux[$i++];
            } else {
                $data[$k] = $aux[$j++];
            }
        }

    }



}