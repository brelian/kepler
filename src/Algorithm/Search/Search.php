<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 9:52 PM
 */

namespace App\Algorithm\Search;


use App\Algorithm\Sort\QuickSort;

class Search implements SearchInterface
{
    public function linearSearch(array $haystack, int $needle)
    {
        $finder = new LinearSearch();
        return $finder->search($haystack, $needle);
    }


    public function binarySearch(array $haystack, int $needle)
    {
        $finder = new BinarySearch();
        return $finder->search($haystack, $needle);
    }

    public function binarySearchRecursion(array $haystack, int $needle, int $low, int $high)
    {
        // TODO: Implement binarySearchRecursion() method.
    }


    public function exponentialSearch(array $haystack, int $needle)
    {
        // TODO: Implement exponentialSearch() method.
    }


    public function interpolationSearch(array $haystack, int $needle)
    {
        // TODO: Implement interpolationSearch() method.
    }

}