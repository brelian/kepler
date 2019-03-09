<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 7:19 PM
 */

namespace App\Structure\ADT;

/**
 * 链表： 使用链式存储的线性表
 * 术语：
 *      - 结点： 数据域和指针域组成
 *      - 头节点： 为了方便链表的操作引入的第一个不用于存储任何信息的（冗余）节点，所以一般而言，在创建链表
 *          时会先创建一个头节点。
 * 操作：
 *      - 插入元素
 *      - 删除元素
 */
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

    /**
     * 链表判空
     * @return mixed
     */
    public function isEmpty();
}