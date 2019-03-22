<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/22/19
 * Time: 9:37 AM
 */

namespace App\Algorithm\Sort;


class ShellSort
{
    public function sort(array $data):array
    {
        $this->shellSort($data);
        return $data;
    }


    private function shellSort(array &$data):void
    {
        $length = count($data);
        if ($length < 2) {
            return;
        }

        // TODO shell sorting main process
    }

}