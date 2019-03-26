# PHP 数据结构与算法

## 项目介绍

该项目致力于提高 PHP 工程师的算法基础，项目实用 PHP 定义了常用的数据结构的抽象数据类型(ADT)，训练者只需实现其中的主要逻辑即可，项目集成了 PHPunit 单元测试包，以便测试。

项目目录结构如下

```javascript
.
├── src
│   ├── Algorithm 			 	  # 算法
│   │   ├── Search 				  # 搜索算法
│   │   └── Sort				  # 排序算法
│   └── Structure                                 # 数据结构
│       ├── ADT					  # 抽象数据类型
│       ├── Heap				  # 堆
│       ├── LinkedList	                          # 链表
│       ├── PriorityQueue                         # 优先队列
│       ├── Queue				  # 队列
│       ├── Stack			  	  # 栈
│       └── Tree				  # 树
└── tests			                  # 测试用例

```
相关的接口实现后，在命令行用 `phpunit` 进行测试，如下测试排序算法

```shell
> vendor/bin/phpunit tests/SorterTest.php  # 排序测试用例
> vendor/bin/phpunit tests/SearchTest.php  # 线性查找测试用例
> vendor/bin/phpunit tests/PermutationTest.php  # 测试数字全排列
```

## Change Log
**2019-03-26**
> 完成 KMP

**2019-03-25**
> 完成全排列

**2019-03-22**
> 完成线性查找和二分查找迭代版

**2019-03-21**

> 完成选择序算法  
> 完成插入序算法


**2019-03-07**

> 完成快速排序算法

## 数据结构

### 1. 线性表
- 链表
    - [单链表](src/Structure/LinkedList/SingleLinkedList.php)
    - [双链表](src/Structure/LinkedList/DoubleLinkedList.php)
    - [环形链表](src/Structure/LinkedList/CircularLinkedList.php)
- 栈
    - [链表实现](src/Structure/Stack/ArrayStack.php)    
    - [数组实现](src/Structure/Stack/LinkedStack.php)    
    
- 队列
    - [链表实现](src/Structure/Queue/LinkedListQueue.php)
    - [数组实现](src/Structure/Queue/ArrayQueue.php)
    - [环形队列](src/Structure/Queue/CircularQueue.php)
### 2. 树
- 二叉树
    - [二叉树](src/Structure/Tree/BinaryTree.php)
- 堆
    - [最大堆](src/Structure/Heap/MaxHeap.php)
    - [最小堆](src/Structure/Heap/MinHeap.php)
- 优先队列
    - [优先队列](src/Structure/PriorityQueue/PriorityQueue.php)
### 3. 哈希表

### 4. 图



## 算法

### 1. 线性查找
- [线性查找](src/Algorithm/Search/LinearSearch.php)
- [二分查找](src/Algorithm/Search/BinarySearch.php)

### 2. 查找树

### 3. 排序
- [插入排序](src/Algorithm/Sort/InsertionSort.php)
- [选择排序](src/Algorithm/Sort/SelectionSort.php)
- [桶排序](src/Algorithm/Sort/BucketSort.php)
- [快速排序](src/Algorithm/Sort/QuickSort.php)


## 其他
- [数字全排列](src/Algorithm/Permutation.php)
- [KMP](src/Algorithm/FindSubString.php)

