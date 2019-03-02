<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 9:52 PM
 */

namespace App\Algorithm\Search;

/**
 * 大海捞针
 * @package App\Algorithm\Search
 */
interface SearchInterface
{

    public function linearSearch(array $haystack, int $needle);
    public function binarySearch(array $haystack, int $needle);
    public function binarySearchRecursion(array $haystack, int $needle, int $low, int $high);
    public function interpolationSearch(array $haystack, int $needle); // 插值搜索
    public function exponentialSearch( array $haystack, int $needle); // 指数搜索

}