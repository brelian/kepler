<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/3/19
 * Time: 10:26 AM
 */

namespace App\Structure\ADT;

/**
 * 概念： 节点之间的逻辑关系是由优先级决定的，而不是右入队顺序决定，优先级高的在对头，优先级低的在队尾。
 * 存储方式：
 *      - 线性队列
 *          + 方法1. 插入时根据元素优先级寻找特定位置，O(n) 复杂度
 *          + 方法2. 根据优先级决定出队元素
 *      - 二叉堆
 * 操作：
 *
 * @package App\Structure\ADT
 */
interface PriorityQueue
{

}