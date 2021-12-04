<?php
class Node
{
    public ?Node $left = null;
    public ?Node $right = null;
    public string $context = "";
    public function __construct(string $context)
    {
        $this->context = $context;
    }
}
$root = new Node("root");
$root->left = new Node("root>left");
$root->right = new Node("root>right");
$root->left->left = new Node("root>left>left");
$root->right->left = new Node("root>right>left");
function treeTraverse(?Node $root): array
{
    static $contexts = [];
    if ($root === null) {
        return [];
    }
    treeTraverse($root->left);
    $contexts[] = $root->context;
    treeTraverse($root->right);
    return $contexts;
}
$contexts = treeTraverse($root);
var_dump($contexts);
// array(5) {
//     [0]=>
//     string(14) "root>left>left"
//     [1]=>
//     string(9) "root>left"
//     [2]=>
//     string(4) "root"
//     [3]=>
//     string(15) "root>right>left"
//     [4]=>
//     string(10) "root>right"
//   }
