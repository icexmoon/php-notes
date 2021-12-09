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
function treeTraverse(?Node $root, array &$contexts)
{
    if ($root === null) {
        return [];
    }
    treeTraverse($root->left, $contexts);
    $contexts[] = $root->context;
    treeTraverse($root->right, $contexts);
}
$root2 = clone $root;
$root2->left->context = 'root2>left';
require_once '../util/array.php';
$contexts = [];
treeTraverse($root, $contexts);
print_arr($contexts);
$contexts = [];
treeTraverse($root2, $contexts);
print_arr($contexts);
// [0:root>left>left, 1:root2>left, 2:root, 3:root>right>left, 4:root>right]
// [0:root>left>left, 1:root2>left, 2:root, 3:root>right>left, 4:root>right]

