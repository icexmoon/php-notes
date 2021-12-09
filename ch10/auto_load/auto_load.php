<?php
require_once "../../util/class.php";
spl_autoload_register(function ($clsName){
    $fileName = "./".convert_clsname_to_fname($clsName).".cls.php";
    require_once $fileName;
});
$mc = new MyClass;
var_dump($mc);