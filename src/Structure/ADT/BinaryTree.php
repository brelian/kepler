<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 10:51 PM
 */

namespace App\Structure\ADT;

/**
 * 概念： 由 n 个节点的有限集合，该集合或者为空，或者由一个根节点和两课互不相交的左子树和右子树组成，其中左子树和右子树
 *      也树二叉树。
 * 5 种基本形态：
 *      1. 空二叉树
 *      2. 只有根节点
 *      3. 只有根节点 + 左子树
 *      4. 只有根节点 + 右子树
 *      5. 根节点 + 左子树 + 右子树
 *
 * 分类：
 *      - 满二叉树: 高度为 k 并具有 $2^k - 1$ 个节点
 *      - 完全二叉树： 满二叉树最第层从右至左去掉若干节点
 * 二叉树的性质：
 *      - 第 i 层的最多节点 $2^{i-1}$
 *      - 高度为 k 的二叉树最多节点数 $2^k - 1$
 *      - 对于一棵非空二叉树，如果叶子结点数为$n_0$，度数为2的结点数为$n_2$，则有:$n_0＝n_2＋1$ 成立
 *      - 具有n个结点的完全二叉树的高度 $depth = \lfloor \log_{2}n \rfloor + 1$
 *      -
 *
 * 操作：
 *      - create()
 *      - clear()： 删除根节点，再递归左右子树
 *      - isEmpty()
 *      - root()
 *      - parent()
 *      - lchild()
 *      - rchild()
 *      - delLeft()
 *      - delRight()
 *      - traverse()
 *
 * 存储：
 *      - 顺序存储： 将普通二叉树转化为满二叉树，依次存储
 *      - 二叉链表： |lchild|data|rchild|
 *      - 三叉链表： |lchild|data|parent|rchild|
 *
 * @package App\Structure\ADT
 */
interface BinaryTree
{
    public function clear();

    public function preOrderTraverse(bool $flag);
    public function inOrderTraverse(bool $flag);
    public function postOrderTraverse(bool $flag);

    public function size();
    public function height();

    public function delLeft();
    public function delRight();


}