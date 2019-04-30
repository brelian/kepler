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
**2019-04-30**
> 添加 LeetCode 搜索相关题目

**2019-04-29**
> 添加 LeetCode 一些题目

**2019-04-19**

> 添加《剑指Offer》No.11

**2019-04-19**

> 添加《剑指Offer》No.3 No.4 No.10

**2019-04-09**
> 完成 merge sort

**2019-04-08**
> 完成 HashMap

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
- [哈希表](src/Structure/Hash/HashMap.php)
### 4. 图
- DFS
- BFS

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
- [归并排序](src/Algorithm/Sort/MergeSort.php)


## LeetCode
### 链表
- No.206 Reverse Linked List
- No.92 Reverse Linked List II (from Mth node to Nth node)
- No.160 Intersection of Two Linked Lists
- No.141 Linked List Cycle
- No.142 Linked List Cycle II
- No.86 Partition List
- No.138 Copy List with Random Pointer
- No.21 Merge Two Sorted Lists
- No.23 Merge k Sorted Lists
### 栈、队列 & 堆
- No.225 Implement Stack using Queues
- No.232 Implement Queue using Stacks
- NO.155 Min Stack
- No.1363 Rails from por.org
- No.224 Basic Calculator
- No.215 Kth Largest Element in an Array
- No.295 Find Median from Data Stream

### 贪心
- No.455 Assign Cookies
- No.376 Wiggle Subsequence
- No.402 Remove K Digits
- No.55 Jump Game
- No.45 Jump Game II
- No.425 Word Squares

### 递归、回溯
- No.78 Subsets
- No.90 Subsets II
- No.40 Combination Sum II
- No.22 Generate Parentheses

### 二叉树与图
- No.113
- No.236
- No.114
- No.199

### 二分查找与二叉树排序

### 哈希表与字符串
- No.409 Longest Palindrome
- No.290 Word Pattern 
- No.49 Group Anagrams
- No.3 Longest Substring without Repeating charters
- No.187 Repeated DNA Sequence
- No.76 Minimum Window Substring

### 搜索
- No.200 Number of Islands
- No.127 Word Ladder
- No.126 Word Ladder II

### 动态规划


## 《剑指 Offer》
- [No.3 数组中重复的数组](/src/Algorithm/JianzhiOffer.php)
- [No.4 二维数组中的查找](/src/Algorithm/JianzhiOffer.php)
- [No.10 Fibonacci 数列](/src/Algorithm/JianzhiOffer.php)
- [No.11 旋转数组的最小数字](/src/Algorithm/JianzhiOffer.php)
## 其他
- [数字全排列](src/Algorithm/Permutation.php)
- [KMP](src/Algorithm/FindSubString.php)

