// Leetcode #374 Typescript Solution

/** 
 * Forward declaration of guess API.
 * @param {number} num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * var guess = function(num) {}
 */

 function guessNumber(n: number): number {
    var range_min: number = 1;
    var range_max: number = n;
    
    while(range_min <= n) {
        var mid: number = Math.floor(range_min + (range_max - range_min) / 2);
        var value: number = guess(mid);
        switch (value) {
            case 0:
                return mid;
            case -1: 
                range_max = mid - 1;
                break;
            case 1:
                range_min = mid + 1;     
        }
    }
    return 0;
};