<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 3/2/19
 * Time: 10:44 PM
 */

namespace App\Structure\ADT;

/**
 * 概念： 树有 n 个节点的有限集合，且满足
 *      1. 只有一个根节点
 *      2. 其余节点组成互不相交的子树
 *
 * 术语：
 *      - 根节点
 *      - 叶节点
 *      - 儿子节点
 *      - 父亲节点
 *      - 兄弟节点
 *      - 祖先节点
 *      - 子孙节点
 *      - 树的高度（深度）： 从根节点开始，树节点中的最大层次称为树的深度（depth）或高度。
 *      - 节点的度
 *      - 有序树
 *      - 无序树
 *
 * 操作：
 *      - 判空
 *      - 清空
 *      - 找根节点
 *      - 找父节点
 *      - 找子节点
 *      - 剪枝
 * @package App\Structure\ADT
 */
interface Tree
{

}