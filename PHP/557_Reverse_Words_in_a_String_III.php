<?php

// Leetcode #557 PHP Solution

class Solution {
    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $result = [];
        foreach (explode(' ', $s) as $word) {
            $result[] = strrev($word);
        }
        
        return implode(' ', $result);
    }
}