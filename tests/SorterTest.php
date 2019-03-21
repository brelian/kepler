<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/7/19
 * Time: 7:36 PM
 */

namespace Tests;


use App\Algorithm\Sort\Sorter;
use PHPUnit\Framework\TestCase;

class SorterTest extends TestCase
{
    protected $sorter;

    public function __construct(?string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->sorter = new Sorter();
    }

    public function testQuickSort()
    {

        $this->assertEquals($this->sorter->quickSort([]),[]);
        $this->assertEquals($this->sorter->quickSort([1]),[1]);
        $this->assertEquals($this->sorter->quickSort([2,1]),[1,2]);
        $this->assertEquals($this->sorter->quickSort([1,2,3]),[1,2,3]);
        $this->assertEquals($this->sorter->quickSort([2,3,1]),[1,2,3]);
        $this->assertEquals($this->sorter->quickSort([1,3,2]),[1,2,3]);
        $this->assertEquals($this->sorter->quickSort([1,2,3,2]),[1,2,2,3]);
    }


    public function testSelectionSort()
    {

        $this->assertEquals($this->sorter->selectionSort([]),[]);
        $this->assertEquals($this->sorter->selectionSort([1]),[1]);
        $this->assertEquals($this->sorter->selectionSort([2,1]),[1,2]);
        $this->assertEquals($this->sorter->selectionSort([1,2,3]),[1,2,3]);
        $this->assertEquals($this->sorter->selectionSort([2,3,1]),[1,2,3]);
        $this->assertEquals($this->sorter->selectionSort([1,3,2]),[1,2,3]);
        $this->assertEquals($this->sorter->selectionSort([1,2,3,2]),[1,2,2,3]);
    }


    public function testInsertionSort()
    {

        $this->assertEquals($this->sorter->insertionSort([]),[]);
        $this->assertEquals($this->sorter->insertionSort([1]),[1]);
        $this->assertEquals($this->sorter->insertionSort([2,1]),[1,2]);
        $this->assertEquals($this->sorter->insertionSort([1,2,3]),[1,2,3]);
        $this->assertEquals($this->sorter->insertionSort([2,3,1]),[1,2,3]);
        $this->assertEquals($this->sorter->insertionSort([1,3,2]),[1,2,3]);
        $this->assertEquals($this->sorter->insertionSort([1,2,3,2]),[1,2,2,3]);
    }
}