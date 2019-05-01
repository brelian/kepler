# Leetcode 刷题笔记

#### [No.7 Reverse Integer](https://leetcode.com/problems/reverse-integer/)

- 循环终止条件 `x / 10 != 0`
- 溢出：[-2^31, 2^31-1] ，如这个数，2,147,483,645 反转后是 546,384,741,2 溢出是应为最后一位是 5 大于了 2，也就是说溢出只可能发生在最后一次运算，所以在最后一次运算之前进行溢出判断即可。
- 溢出判断： b = a + x 如果 b - x != a 则加法运算发生了溢出

完整代码如下：

```java
class Solution {
    public int reverse(int x) {
        int result = 0;
        while (x / 10 !=  0) {
            result = result * 10 + x % 10;
            x /= 10;
        }
        
        // handle overflow
        int last = result;
        result = result * 10 + x;
        if ((result - x) / 10 != last) {
            return 0;
        }
        
        return result;
    }
}
```





#### [Palindrome Number](https://leetcode.com/problems/palindrome-number/)

分析：负数永远不可能是回文数

思路一： 使用栈，进栈和出栈序列一只则是回文

思路二： 反转整数，反转后如果不发生溢出且反转后与原来的数相同则是回文

```java
class Solution {
    public boolean isPalindrome(int x) {
        if (x < 0) {
            return false;
        }
        
        return reverse(x) == x;
    }
    
    
    private int reverse(int x) {
        int result = 0;
        while (x / 10 != 0) {
            result = result * 10 + x % 10;
            x /= 10;
        }
        
        // handle overflow
        int last = result;
        result = result * 10 + x;
        if (last != (result - x ) / 10) {
            return 0;
        }
        
        return result;
    }
}
```





#### [No.2 Add Two Numbers](https://leetcode.com/problems/add-two-numbers/)

我的解法：遍历两个链表公共部分，非公共部分特殊处理，使用头插法添加新的计算节点，最后在反转链表

解题错误：忽略了最后一次计算 carry > 0 的情况

优化点： 使用 dummyHead 辅助节点，并且使用尾插法添加新节点，避免了链表反转



本题关键：

1. 定义一个无效的头节点 dummyHead, 最后返回 dummyHead.next
2. 两个链表遍历结束后，注意处理进位 carry，如果 carry > 0 则需要插入节点

```java
public ListNode addTwoNumbers(ListNode l1, ListNode l2) {
    ListNode dummyHead = new ListNode(0);
    ListNode p = l1, q = l2, curr = dummyHead;
    int carry = 0;
    while (p != null || q != null) {
        int x = (p != null) ? p.val : 0;
        int y = (q != null) ? q.val : 0;
        int sum = carry + x + y;
        carry = sum / 10;
        curr.next = new ListNode(sum % 10);
        curr = curr.next;
        if (p != null) p = p.next;
        if (q != null) q = q.next;
    }
    if (carry > 0) {
        curr.next = new ListNode(carry);
    }
    return dummyHead.next;
}
```



#### [No.3 Longest Substring Without Repeating Characters](https://leetcode.com/problems/longest-substring-without-repeating-characters/)

分析：本题是使用字符 map 统计字符出现的次数，值得注意的是给定的字符串的 ASCII 码是 0 ~ 128 之间，所以字符 `C - 0 ` 即可得到该字符的 ASCII 码。

完整代码如下：

```java
class Solution {
    public int lengthOfLongestSubstring(String s) {
        int begin = 0;
        int maxLen = 0;
        int[] charMap = new int[128];
        
        
        for (int i = 0; i < s.length(); i++) {
            // put i to map
            int index = s.charAt(i) - 0;
            charMap[index]++;
            while (charMap[index] > 1) {
                charMap[s.charAt(begin) - 0]--;
                begin++;
            }
            
            if (i - begin + 1 > maxLen) {
                maxLen = i - begin + 1;
            }
        }
        
        return maxLen;
    }
}
```



注： 

> 5' has the int value 53
> if we write '5'-'0' it evaluates to 53-48, or the int 5
> if we write char c = 'B'+32; then c stores 'b'



####  [No.8 String to Integer (atoi)](https://leetcode.com/problems/string-to-integer-atoi/)

关键点： 边界处理和溢出处理

- 字符串为空判断 `null == str || str.length() == 0`
- 空白字符判断  `str.charAt(i) == ' '`
- 字符转数字 `str.charAt(i) - '0'`
- 符号处理，考虑 "+-" 和 "-+" 的 case
- 溢出处理，记住溢出规律`Integer.MAX_VALUE +1 == Integer.MIN_VALUE `

```jav
class Solution {
    public int myAtoi(String str) {
        if (null == str || str.length() == 0) {
            return 0;
        }
        boolean negative = false;
        
        int start = 0;
        while (start < str.length() && str.charAt(start) == ' ') {
            start++;
        }
        if (start == str.length()) {
            return 0;
        }
        
        if (str.charAt(start) == '-') {
            negative = true;
            start++;
        } else if (str.charAt(start) == '+') {
            start++;
        }
        
        if (start == str.length() || str.charAt(start) - '0' > 9 
            || str.charAt(start) - '0' < 0) {
            return 0;
        }
        
        int res = 0;
        while (start < str.length() && str.charAt(start) - '0' >= 0 
               && str.charAt(start) - '0' <= 9) {
            int tail = (str.charAt(start) - '0');
            if (res > Integer.MAX_VALUE/10) {
                return negative ? Integer.MIN_VALUE : Integer.MAX_VALUE;
            }
            // when tail == 8, that is number of -2147483648 given, 
            // 2147483640 + 8 == -2147483648 and 
            // -2147483640 * -1 also equals -2147483648 (itself)
            if (res == Integer.MAX_VALUE/10 && tail > 7 ) {
                return negative ? Integer.MIN_VALUE : Integer.MAX_VALUE;
            }
            res = res * 10 + tail;
            start++;
        }
        return negative ?  -1 * res : res;
    }
}
```



Note: 队列使用笔记

```java
Queue<Integer> q = new LinkedList<>();  // Integer is required do not int
q.offer(); // enqueue
q.poll(); // dequeue
q.size(); // maybe using judge if it empty
```



#### [No.11 Container With Most Water](https://leetcode.com/problems/container-with-most-water/)

本题的关键定义两个指针从两端开始扫描，谁小移动谁，移动以后算面积。

```java
class Solution {
    public int maxArea(int[] height) {
        int left = 0;
        int right = height.length - 1;
        int maxArea = 0;
        while (left < right) {
            maxArea = Math.max(maxArea, Math.min(height[left], height[right]) * (right - left));
            
            if (height[left] < height[right]) {
                left++;
            } else {
                right--;
            }
        }
        
        
        return maxArea;
    }
}
```



Note: Java 中数组长度使用 length 属性获取，字符串长度用 length() 方法获取



#### [No.15 3Sum](https://leetcode.com/problems/3sum/)



```java
class Solution {
    public List<List<Integer>> threeSum(int[] nums) {
        List<List<Integer>> triplets = new ArrayList<>();
        Arrays.sort(nums);
        
        for (int i = 0; i < nums.length - 2; i++) {
            // handle dumplicate items
            if (i > 0 && nums[i] == nums[i-1]) {
                continue;
            }
            
            int lo = i + 1, hi = nums.length - 1, sum = 0 - nums[i];
            while (lo < hi) {
                if (nums[lo] + nums[hi] == sum) {
                    triplets.add(Arrays.asList(nums[i], nums[lo], nums[hi]));
                    while (lo < hi && nums[lo] == nums[lo+1]) lo++;
                    while (lo < hi && nums[hi] == nums[hi-1]) hi--;
                    
                    lo++;
                    hi--;
                } else if (nums[lo] + nums[hi] > sum) {
                    hi--;
                } else {
                    lo++;
                }
            }
        }
        
        return triplets;
    }
}
```



#### [N0.16 3Sum Closest](https://leetcode.com/problems/3sum-closest/)

```java
class Solution {
    public int threeSumClosest(int[] nums, int target) {
        Arrays.sort(nums);
        int closest = nums[0] + nums[1] + nums[2];
        
        for (int i = 0; i < nums.length - 2; i++) {
            int lo = i + 1;
            int hi = nums.length - 1;
            
            while (lo < hi) {
                int sum = nums[i] + nums[lo] + nums[hi];
                if (sum > target) {
                    hi--;
                } else {
                    lo++;
                }               
                if (Math.abs(sum - target) < Math.abs(closest - target)) {
                    closest = sum;
                }
                
            }
        }
        
        return closest;
    }
}
```





#### [No.17 Letter Combinations of a Phone Number](https://leetcode.com/problems/letter-combinations-of-a-phone-number/)



```java
class Solution {
    public List<String> letterCombinations(String digits) {
        List<String> res = new ArrayList<>();
        // corner case 
        if (null == digits || digits.length() == 0) {
            return res;
        }
        
        Map<Integer, String> dict = constructCharMap();
        StringBuilder sb = new StringBuilder();
        dfsHelper(digits, 0, dict, sb, res);
        
        return res;
    }
    
    
    private void dfsHelper(String digits, int level, Map<Integer, String> dict, StringBuilder sb, List<String> res) {
        // base case
        if (level == digits.length()) {
            res.add(sb.toString());
            return;
        }
        
        // recursive rule
        Integer index = digits.charAt(level) - '0';
        String ch = dict.get(index);
        for (char c : ch.toCharArray()) {
            sb.append(c);
            dfsHelper(digits, level + 1, dict, sb, res);
            // recorvery
            sb.deleteCharAt(sb.length()-1);
        }
    }
    
    private Map<Integer, String> constructCharMap() {
        Map<Integer, String> charMap = new HashMap<>();
        
        charMap.put(0, "");
        charMap.put(1, "");
        charMap.put(2, "abc");
        charMap.put(3, "def");
        charMap.put(4, "ghi");
        charMap.put(5, "jkl");
        charMap.put(6, "mno");
        charMap.put(7, "pqrs");
        charMap.put(8, "tuv");
        charMap.put(9, "wxyz");    
        return charMap;
    }
}
```



#### [No.19 Remove Nth Node From End of List](https://leetcode.com/problems/remove-nth-node-from-end-of-list/)

本提关键是使用 dummyHead 做辅助，从而避免多种 corner case 导致的异常问题。

```java
/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode(int x) { val = x; }
 * }
 */
class Solution {
    public ListNode removeNthFromEnd(ListNode head, int n) {
        ListNode dummyHead = new ListNode(0);
        dummyHead.next = head;
        
        int length = 0;
        ListNode first = head;
        
        while (first != null) {
            length++;
            first = first.next;
        }
        length -= n;
        
        ListNode cur = dummyHead;
        while (length > 0) {
            cur = cur.next;
            length--;
        }
        
        cur.next = cur.next.next;
        
        return dummyHead.next;
        
    }
}
```
