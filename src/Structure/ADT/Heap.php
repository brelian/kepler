<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 10:40 AM
 */

namespace App\Structure\ADT;

/**
 *  概念： 有序的完全二叉树，根据顺序分为最小堆和堆大堆
 *  最小堆： 根节点大于所有的子节点（层级节点有序，兄弟节点无序）
 *  存储： 数组
 * @package App\Structure\ADT
 */
interface Heap
{
    public function create(array $list);

    /**
     * 1. 插入元素后将最后位置
     * 2. 上浮到合适的位置
     * @param int $val
     */
    public function insert(int $val);


    public function shiftUp();

    /**
     * 向下调整
     * @param int $smallest 向下浮动的元素位置
     */
    public function shiftDown(int $smallest);

}