<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/19/19
 * Time: 10:06 AM
 */

namespace Tests;


use App\Algorithm\JianzhiOffer;
use PHPUnit\Framework\TestCase;

class JianzhiOfferTest extends TestCase
{
    protected $offer;
    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->offer = new JianzhiOffer();
    }

    public function testFindRepeatInArray()
    {
        $this->assertEquals($this->offer->findRepeatInArray([2,3,3,4,1]), 3);
        $this->assertEquals($this->offer->findRepeatInArray([1,0,2,2,3]), 2);
        $this->assertEquals($this->offer->findRepeatInArray([2,3,1,0,2,5,3]), 2);
    }

    public function testFindInTwoDimensionalArray()
    {
        $data = [
            [1,2,8,9],
            [2,4,9,12],
            [4,7,10,13],
            [6,8,11,15]
        ];
        $this->assertEquals($this->offer->findInTwoDimensionalArray($data, 2), true);
        $this->assertEquals($this->offer->findInTwoDimensionalArray($data, 7), true);
        $this->assertEquals($this->offer->findInTwoDimensionalArray($data, 5),false);
        $this->assertEquals($this->offer->findInTwoDimensionalArray($data, 6), true);
    }

}