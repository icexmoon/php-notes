<?php

namespace xyz\icexmoon\php_notes\ch14\define3\A {
    class MyClass{}
}

namespace {
}

namespace xyz\icexmoon\php_notes\ch14\define3\B {
    use xyz\icexmoon\php_notes\ch14\define3\A\MyClass as MyClass2;
    class MyClass{}
    $mc = new MyClass();
    $mc2 = new MyClass2();
}
