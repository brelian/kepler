<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/8/19
 * Time: 7:27 PM
 */

namespace App\Structure\ADT;


interface HashMap
{
    public function set($key, $value);

    public function get($key);

    public function print();
}