// Leetcode 102 Typescript Solution

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     val: number
 *     left: TreeNode | null
 *     right: TreeNode | null
 *     constructor(val?: number, left?: TreeNode | null, right?: TreeNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.left = (left===undefined ? null : left)
 *         this.right = (right===undefined ? null : right)
 *     }
 * }
 */

 function levelOrder(root: TreeNode | null): number[][] {
    var result: number[][] = [];
    
    if (!root) {
        return result;
    }
    
    var nodes = [];
    
    nodes.push(root);
    while (nodes.length != 0) {
        var size = nodes.length;
        var level = [];
        
        for (var i = 0; i < size; i++) {
            var node = nodes.shift();
            level.push(node.val);
            
            if (node.left) {
                nodes.push(node.left);
            }
            if (node.right) {
                nodes.push(node.right);
            }
        }
        
        result.push(level);
    }  
    
    return result;
};