<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/24/19
 * Time: 12:42 PM
 */

namespace App\Algorithm;

define('DFS', 0);
define('RECURSIVE', 1);

class Permutation
{
    /**
     * mark item is visited
     * @var array
     */
    protected $visited;
    /**
     * storage the series
     * @var array
     */
    protected $container;
    /**
     * show permutation of number n
     * @var int
     */
    protected $n;
    /**
     * mark current step
     * @var int
     */
    protected $step;
    /**
     * recurse result
     * @var array
     */
    protected $result;

    public function __construct(int $n)
    {
        $this->n = $n;
        $this->visited = array_fill(1, $n, false);
        $this->container= array_fill(1, $n,0);
        $this->step = 1;
    }

    /**
     * usage:
     *      $three = new Permutation(5);
     *      $three->show();
     * @param $mode
     */
    public function show(int $mode)
    {
        switch ($mode) {
            case DFS:
                $this->dfs(1);
                break;
            case RECURSIVE:
                $this->recurse();
        }
    }

    private function dfs(int $step):void
    {
        if ($step === $this->n + 1) {
            $this->traverse($this->container);
            return;
        }
        for ($i = 1; $i <= $this->n; $i++) {
            if (!$this->visited[$i]) {
                $this->container[$step] = $i;
                $this->visited[$i] = true;
                $this->dfs($step + 1);
                $this->visited[$i] = false;
            }
        }
        return;
    }


    private function traverse($data)
    {
        echo "\n";
        for ($i = 1; $i <= $this->n; $i++) {
            echo $data[$i] . '  ';
        }
    }
    /*
    // 每一个序号都有机会被放入一个盒子中
    public function v1()
    {
        $n = 3;
        $step = 1; // 假设是第一步
        for ($i = 0; $i <= $n; $i++) {
            $a[$step] = $i;
        }
    }


    public function v2()
    {
        $n = 3;
        $step = 1; // 假设是第一步
        $visited = [];// 记录当前扑克牌是否被放过了
        for ($i = 0; $i <= $n; $i++) {
            if ($visited[$i] === 0) {
                $a[$step] = $i;
                $visited[$i] = 1;
            }
        }
    }


    // 处理下一步
    public function dfs(int $step): void
    {
        if ($step === $n+1) {
            for ($i = 1; $i <= $n; $i++) {
                echo $a[$i];
            }
        }
        for ($i = 1; $i <= $n; $i++) {
            if ($visited[$i] === 0) {
                $a[$step] = $i;
                $visited[$i] = 1;
                $this->dfs($step+1);
                $visited[$i] = 0;
            }
        }
    }
    */


    // 递归版本
    /**
     * 1. 固定第 i 个元素，对剩下的 n - 1 个元素全排列
     * 2. 将 i 与第 i + 1 个元素交换，重复步骤 1
     */
    public function recurse()
    {
        $data = [];
        for ($i = 1; $i <= $this->n; $i++) {
            $data[$i] = $i;
        }
        $this->run(1, $data); // from index 1
    }

    private function run(int $index, array &$data):void
    {
        if ($index === $this->n) {
            $this->traverse($data);
            return ;
        }

        for ($i = $index; $i <= $this->n; $i++) {
            $this->exchange($data, $i, $index);
            $this->run($index + 1, $data);
            $this->exchange($data, $i, $index);
        }
    }

    private function exchange(array &$data, int $i, int $j)
    {
        if ($data[$i] === $data[$j]) {
            return ;
        }
        $data[$i] ^= $data[$j];
        $data[$j] ^= $data[$i];
        $data[$i] ^= $data[$j];
    }
}