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
        return $this->bucketSort($data);
    }

    private function bucketSort(array $data): array
    {
        $length = count($data);
        if ($length < 2) {
            return $data;
        }

        $offset = min($data);
        if ($offset < 0) {
            throw new \Exception('All items of array should be greater then zero', 100);
        }
        $bucketSize = max($data) - $offset + 1;
        $bucket = array_fill(0, $bucketSize, 0);

        for ($i = 0; $i < $length; $i++) {
            $bucket[$data[$i] - $offset]++;
        }

        return $this->traverseBucket($bucket, $offset);

    }

    private function traverseBucket(array $bucket, int $offset):array
    {
        $sorted = [];
        for ($i = 0; $i < count($bucket); $i++) {
            while ($bucket[$i] > 0) {
                array_push($sorted, $i+$offset);
                $bucket[$i]--;
            }
        }

        return $sorted;
    }

}