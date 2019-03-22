<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/22/19
 * Time: 3:04 PM
 */

namespace App\Algorithm\Search;


class LinearSearch
{
    public function search(array $haystack, int $needle)
    {
        $length = count($haystack);
        if ($length === 0 || empty($needle)) {
            return -1;
        }

        for ($i = 0; $i < $length; $i++) {
            if ($haystack[$i] === $needle) {
                return $i;
            }
        }
        return -1;
    }

}