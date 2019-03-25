<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/25/19
 * Time: 6:11 PM
 */

namespace Tests;


use App\Algorithm\Permutation;
use PHPUnit\Framework\TestCase;

class PermutationTest extends TestCase
{
    public function testPermutation()
    {
        $one = new Permutation(1);
        //$one->show(0);
        $one->show(1);

        $two = new Permutation(2);
        //$two->show(0);
        $two->show(1);

        $five = new Permutation(3);
        //$five->show(0);
        $five->show(1);
    }
}