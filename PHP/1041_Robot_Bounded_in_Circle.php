<?php

// Leetcode #1041 PHP Solution

class Solution {
    /**
     * @param String $instructions
     * @return Boolean
     */
    function isRobotBounded($instructions) {
        $direction = 'N';
        $position = [0, 0];
    
        foreach (str_split($instructions) as $i) {
            switch ($i) {
                case 'G':
                    switch ($direction) {
                        case 'N':
                            $position[1]++;
                            break;
                        case 'E':
                            $position[0]++;
                            break;
                        case 'S':
                            $position[1]--;
                            break;
                        case 'W':
                            $position[0]--;
                            break;
                    }
                    break;
                case 'R':
                    switch ($direction) {
                        case 'N':
                            $direction = 'E';
                            break;
                        case 'E':
                            $direction = 'S';
                            break;
                        case 'S':
                            $direction = 'W';
                            break;
                        case 'W':
                            $direction = 'N';
                            break;
                    }
                    break;
                case 'L':
                    switch ($direction) {
                        case 'N':
                            $direction = 'W';
                            break;
                        case 'E':
                            $direction = 'N';
                            break;
                        case 'S':
                            $direction = 'E';
                            break;
                        case 'W':
                            $direction = 'S';
                            break;
                    }
                    break;
                default:
                    return false;   // Invalid character
            }
        }
        
        return ($position[0] == 0 && $position[1] == 0) || $direction != 'N';
    }
}