<?php
include "Common.php";
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $dummyHead = new ListNode(0);
        $temp = $dummyHead;
        $carry = 0;

        while ($l1 != null || $l2 != null || $carry != 0) {
            $digit1 = ($l1 != null) ? $l1->val : 0;
            $digit2 = ($l2 != null) ? $l2->val : 0;

            $total = $digit1 + $digit2 + $carry;
            $digit = $total%10;
            $carry = (int)($total/10);

            $newNode = new ListNode($digit);
            $temp->next = $newNode;
            $temp = $temp->next;

            $l1 = ($l1 !== null) ? $l1->next : null;
            $l2 = ($l2 !== null) ? $l2->next : null;
        }

        $result = $dummyHead->next;
        $dummyHead->next = null;    
        return $result;
    }
}
$l1 = new ListNode(1,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(0,new ListNode(1,null)))))))))))))))))))))))))))))));
$l2 = new ListNode(5, new ListNode(6, new ListNode(4, null)));

$obj = new Solution();
$obj->addTwoNumbers($l1, $l2);