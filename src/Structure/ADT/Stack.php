<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 7:55 PM
 */

namespace App\Structure\ADT;


/**
 * 栈： 栈是限定仅在尾部进行插入和删除操作的线性表。
 * 术语：
 *      - 栈顶 top
 *      - 栈底 bottom
 * 特点： 先进先出 Last In First Out
 *
 * 实现：
 *      - 数组存储 $stack = [];
 *      - 链接存储 $stack = new LinkedList();
 *
 * 操作：
 *      - 插入元素
 *      - 删除元素
 *
 * @package App\Structure\ADT
 */
interface Stack
{
    /**
     * 插入元素
     * @return mixed
     */
    public function pop();

    /**
     * 删除栈顶元素
     * @return mixed
     */
    public function push();

    /**
     * 判断栈是否为空
     * @return mixed
     */
    public function isEmpty();

    /**
     * 访问栈顶元素
     * @return mixed
     */
    public function top();
}