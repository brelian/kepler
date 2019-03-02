<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 7:19 PM
 */

namespace App\Structure\ADT;


interface LinkedList
{
    /**
     * 创建一个空链表
     * @return mixed
     */
    public function create();

    /**
     * 在 i 的位置插入一个元素
     * @param $i
     * @param $data
     * @return mixed
     */
    public function insert($i, $data);

    /**
     * 删除第 i 个元素
     * @param $i
     * @return mixed
     */
    public function delete($i);

    /**
     * 查找元素，返回元素位置，找不到时返回 0
     * @param $val
     * @return int
     */
    public function search($val):int;

    /**
     * 遍历联保
     * @return mixed
     */
    public function traverse();

    /**
     * 清空链表
     * @return mixed
     */
    public function clear();

    /**
     * 返回链表元素个数
     * @return mixed
     */
    public function length();
}