<?php

// Leetcode 268 PHP Solution

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $values = array_fill(1, count($nums), true);
        foreach ($nums as $key => $num) {
            $values[$num] = false;
        }
        return array_keys(array_filter($values, function ($value) {
            return !!$value;
        }))[0] ?? 0;
    }
}