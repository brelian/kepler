<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/8/19
 * Time: 7:33 PM
 */

namespace App\Structure\Hash;


class HashNode
{
    public $key;
    public $value;
    /**
     * @var int the number of node has same hash slot
     */
    public $next;

    public function __construct($key, $value, $next = null)
    {
        $this->key = $key;
        $this->value = $value;
        $this->next = $next;
    }

}