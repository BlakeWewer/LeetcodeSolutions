<?php

// Leetcode #1 PHP Solution

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $indexed_values = [];
        foreach ($nums as $index => $num) {
            if (isset($indexed_values[$num])) return [$indexed_values[$num], $index];
            else $indexed_values[$target-$num] = $index;
        }
        return [-1, -1];
    }
}