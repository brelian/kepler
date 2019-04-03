<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 19-4-3
 * Time: 下午4:46
 */

namespace App\Algorithm;


use App\Structure\LinkedList\Node;

class LinkedListOperation
{

    public function mergeSortedList(Node $head1, Node $head2)
    {
        if ($head1 === null) {
            return $head2;
        }
        if ($head2 === null) {
            return $head1;
        }
        $mergedHead = null;
        return $this->merge($head1, $head2, $mergedHead);
    }

    private function merge(Node $head1, Node $head2, &$mergedHead)
    {
        if ($head1->data < $head2->data) {
            $mergedHead = $head1;
            $mergedHead->next = $this->merge($head1->next, $head2, $mergedHead);
        } else {
            $mergedHead = $head2;
            $mergedHead->next = $this->merge($head1, $head2->next, $mergedHead);
        }
        return $mergedHead;
    }
}