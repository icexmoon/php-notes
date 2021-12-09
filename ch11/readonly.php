<?php
class Base{
    protected string $readWrite;
}
class Child extends Base{
    readonly protected string $readWrite;
    // Fatal error: Cannot redeclare non-readonly property Base::$readWrite as readonly Child::$readWrite in ...
}
