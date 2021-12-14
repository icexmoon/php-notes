<?php
class NodeGroupArray implements Iterator
{
    private array $nodeGroups = [];
    private int $index = 0;
    public function addNodeGroup(NodeGroup $ng)
    {
        $this->nodeGroups[] = $ng;
    }
    public function current(): ?NodeGroup
    {
        return $this->nodeGroups[$this->index];
    }
    public function next(): void
    {
        $this->index++;
    }
    public function rewind(): void
    {
        $this->index = 0;
    }
    public function valid(): bool
    {
        return isset($this->nodeGroups[$this->index]);
    }
    public function key(): mixed
    {
        return $this->index;
    }
}
class NodeGroup implements RecursiveIterator
{
    private NodeGroupArray $childrenGroups;
    private string $content = "";
    public function __construct(string $content = '')
    {
        $this->content = $content;
        $this->childrenGroups = new NodeGroupArray();
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function addChild(NodeGroup $child)
    {
        $this->childrenGroups->addNodeGroup($child);
    }
    public function hasChildren(): bool
    {
        return !empty($this->childrenGroups);
    }
    public function getChildren(): ?RecursiveIterator
    {
        return $this;
    }
    public function current(): ?NodeGroup
    {
        return $this->childrenGroups->current();
    }
    public function next(): void
    {
        $this->childrenGroups->next();
    }
    public function key(): mixed
    {
        return $this->childrenGroups->key();
    }
    public function valid(): bool
    {
        return $this->childrenGroups->valid();
    }
    public function rewind(): void
    {
        $this->childrenGroups->rewind();
    }
}
$root = new NodeGroup("root");
$child1 = new NodeGroup("c1");
$child2 = new NodeGroup("c2");
$child3 = new NodeGroup("c3");
$root->addChild($child1);
$root->addChild($child2);
$root->addChild($child3);
$child1->addChild(new NodeGroup("c1c1"));
$child1->addChild(new NodeGroup("c1c2"));
$child3->addChild(new NodeGroup("c3c1"));
function accessNodeGroup(NodeGroup $ng){
    echo $ng->getContent()." ";
    foreach($ng as $childNg){
        accessNodeGroup($childNg);
    }
}
accessNodeGroup($root);