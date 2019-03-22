<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/22/19
 * Time: 3:14 PM
 */

namespace App\Algorithm\Search;


class BinarySearch
{
    public function search(array $haystack, int $needle): int
    {
        $low = 0;
        $high = count($haystack) - 1;
        if ($high === 0 || empty($needle)) {
            return -1;
        }

        while ($low <= $high) {
            $middle = ($low + $high) >> 1;
            if ($needle > $haystack[$middle]) {
                $low = $middle + 1;
            } elseif ($needle < $haystack[$middle]) {
                $high = $middle - 1;
            } else {
                // may be repeat: return the first
                while ($haystack[$middle] === $haystack[$middle - 1]) {
                    $middle--;
                }
                return $middle;
            }
        }

        return -1;

    }

}