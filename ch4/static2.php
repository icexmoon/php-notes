<?php
function static_call(){
    static $funcVar = 1;
    static $funcVar = 2+3;
    static $funcVar = sqrt(1.5);
    //Fatal error: Constant expression contains invalid operations in ...
}