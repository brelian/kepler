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
        $one->show();

        $two = new Permutation(2);
        $two->show();

        $five = new Permutation(5);
        $five->show();
    }
}