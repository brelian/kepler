<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/8/19
 * Time: 7:29 PM
 */

namespace App\Structure\Hash;

use App\Structure\ADT\HashMap as HashMapInterface;

class HashMap implements HashMapInterface
{
    private $bucket;
    private $size = 10;

    public function __construct()
    {
        $this->bucket = new \SplFixedArray($this->size);
    }

    public function get($key)
    {
        $index = $this->hash($key);
        $current = $this->bucket[$index];
        while ($current) {
            if ($current->key === $key) {
                return $current->value;
            }
            $current = $current->next;
        }
        return null;
    }

    public function set($key, $value)
    {
        $index = $this->hash($key);
        $newNode = $this->createNode($index, $key, $value);
        return $this->bucket[$index] = $newNode;
    }

    public function print()
    {
        print_r($this->bucket);
    }

    private function createNode($index, $key, $value)
    {
        if (isset($this->bucket[$index])) {
            return new HashNode($key, $value, $this->bucket[$index]);
        }
        return new HashNode($key, $value, null);
    }

    private function hash($key)
    {
        return crc32($key) % $this->size;
    }
}