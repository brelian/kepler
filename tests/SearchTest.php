<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/22/19
 * Time: 3:07 PM
 */

namespace Tests;


use App\Algorithm\Search\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    private $finder;
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->finder = new Search();
    }


    public function testLinearSearch()
    {
        $this->assertEquals($this->finder->linearSearch([], 1), -1);
        $this->assertEquals($this->finder->linearSearch([1,2,3,4,5], 3), 2);
        $this->assertEquals($this->finder->linearSearch([3,4,2,5], 1), -1);
        $this->assertEquals($this->finder->linearSearch([2,3,1,3,4], 3), 1);
    }

    public function testBinarySearch()
    {
        $this->assertEquals($this->finder->binarySearch([], 1), -1);
        $this->assertEquals($this->finder->binarySearch([1,2,3,4,5], 3), 2);
        $this->assertEquals($this->finder->binarySearch([3,4,5,7], 1), -1);
        $this->assertEquals($this->finder->binarySearch([2,3,3,3,3,4], 3), 1);
    }
}