<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/19/19
 * Time: 8:59 PM
 */

namespace App\Algorithm\Sort;


class BucketSort
{
    public function sort(array $data)
    {
        $bucket = [];
        $length = count($data);

        for ($i = 0; $i < $length; $i++) {
            $nums = $bucket[$data[$i]] ?? 0; // initial to zero if not exist
            $bucket[$data[$i]] = $nums + 1;
        }

    }

}