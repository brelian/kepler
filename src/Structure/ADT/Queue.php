<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 9:22 PM
 */

namespace App\Structure\ADT;

/**
 *
 * 概念：
 *      只允许在一端进行插入操作，另一端进行删除操作的线性表。
 * 术语：
 *      - 队头： 允许插入的一端
 *      - 队尾： 允许删除的一端
 * 操作：
 *      - 创建队列
 *      - 入队
 *      - 出队
 *      - 读取队头元素
 *      - 判断队空
 * 存储：
 *      - 顺序存储
 *          + 队头不固定
 *          + 循环队列： 空队列是队头 front 和 队尾 rear 重合，当数组中只剩一个元素时队列满  (rear + 1) % size == front
 *      - 链表存储
 * @package App\Structure\ADT
 */
interface Queue
{
    public function enqueue(string $item);
    public function dequeue();
    public function isEmpty();
    public function peek();
}