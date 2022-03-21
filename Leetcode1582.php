<?php

// Leetcode 1582 PHP Solution

class Solution {
    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function numSpecial($mat) {
        $special_count = 0;
        $potential_rows = array_filter($mat, function ($row) {
            return count(array_filter($row, function ($value) {
                return $value == 1;
            })) == 1;
        });
        
        
        for ($j = 0; $j < count($mat[0]); $j++) {
            $special = false;
            $broken = false;
            for ($i = 0; $i < count($mat); $i++) {
                if ($mat[$i][$j] == 1) {
                    if (!$special && in_array($i, array_keys($potential_rows))) $special = true;
                    else $broken = true;
                }
            }
            if ($special && !$broken) $special_count++;
        }
        
        return $special_count;
    }
}
