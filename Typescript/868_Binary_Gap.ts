// Leetcode 868 Typescript Solution

function binaryGap(n: number): number {
    var max_distance = 0;
    var binary = n.toString(2).split('');
    var counter = -1;
    
    binary.forEach(function (value) {
        if (parseInt(value) == 1) {
            counter++;
            if (counter > max_distance) {
                max_distance = counter;
            }
            counter = 0;
        } else if (counter > -1) {
            counter++;
        }
    });
    return max_distance;
};