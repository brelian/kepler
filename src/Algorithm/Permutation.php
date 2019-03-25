<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/24/19
 * Time: 12:42 PM
 */

namespace App\Algorithm;


class Permutation
{
    protected $visited;
    protected $container;
    protected $n;
    protected $step;

    public function __construct(int $n)
    {
        $this->n = $n;
        $this->visited = array_fill(1, $n, false);
        $this->container= array_fill(1, $n,0);
        $this->step = 1;
    }

    public function show()
    {
        $this->dfs($this->step);
    }

    private function dfs(int $step):void
    {
        if ($step === $this->n + 1) {
            $this->traverse();
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


    private function traverse()
    {
       for ($i = 1; $i <= $this->n; $i++) {
           echo $this->container[$i]. '  ';
       }

       echo "\n";
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

}