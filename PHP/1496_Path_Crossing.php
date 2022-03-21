<?php

// Leetcode 1496 PHP Solution

class Solution {
    /**
     * @param String $path
     * @return Boolean
     */
    function isPathCrossing($path) {
        $current_position = [0, 0];
        $positions = [[1]];
        foreach (str_split($path) as $move) {
            switch ($move) {
                case 'N':
                    if ($positions[$current_position[0]][$current_position[1] + 1]) return true;
                    else $current_position[1]++;
                    break;
                case 'E':
                    if ($positions[$current_position[0] + 1][$current_position[1]]) return true;
                    else $current_position[0]++;
                    break;
                case 'S':
                    if ($positions[$current_position[0]][$current_position[1] - 1]) return true;
                    else $current_position[1]--;
                    break;
                case 'W':
                    if ($positions[$current_position[0] - 1][$current_position[1]]) return true;
                    else $current_position[0]--;
                    break;
            }
            $positions[$current_position[0]][$current_position[1]] = 1;
        }
        return false;
    }
}