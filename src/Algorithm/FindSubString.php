<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/26/19
 * Time: 11:06 AM
 */

namespace App\Algorithm;


class FindSubString
{
    public function kmp(string $text, string $pattern)
    {
        $i = 0;
        $j = 0;
        $next = $this->getNext($pattern);
        while ($i < strlen($text) && $j < strlen($pattern)) {
            if ($j === -1 || $text[$i] === $pattern[$j]) {
                $i++;
                $j++;
            } else {
                $j = $next[$j];
            }
        }

        if ($j === strlen($pattern)) {
            return $i - $j;
        }

        return -1;
    }

    private function getNext(string $pattern):array
    {
        $next = [];
        $next[0] = -1;
        $i = 0;
        $j = -1;
        while ($i < strlen($pattern)) {
            if ($j === -1 || $pattern[$i] === $pattern[$j]) {
                $i++;
                $j++;
                $next[$i] = $j;
            } else {
                $j = $next[$j];
            }
        }
        return $next;
    }

}