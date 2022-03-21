<?php

// Leetcode #581 PHP Solution

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findUnsortedSubarray($nums) {
        $starting_index = -1;
        $ending_index = -1;
        $first_occurance = [];
        $max_value = $nums[0];
        
        for ($i = 0; $i < count($nums) - 1; $i++) {
            if ($max_value < $nums[$i + 1]) $max_value = $nums[$i + 1];
            if (!isset($first_occurance[$nums[$i]])) $first_occurance[$nums[$i]] = $i;
            if ($nums[$i] >= $nums[$i + 1] || $max_value >= $nums[$i + 1]) {
                foreach ($first_occurance as $value => $key) {
                    if ($value > $nums[$i + 1]) {
                        $starting_index = $starting_index == -1 ? $key : min($starting_index, $key);
                        $ending_index = $i + 1;
                        break;
                    }
                }
            }
        }
        
        return $starting_index == -1 ? 0 : ($ending_index + 1 - $starting_index);
    }
}