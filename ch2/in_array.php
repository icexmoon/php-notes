<?php

function testHttpMehtodAllow($method){
    $httpMethod = ["GET","POST","DELETE","PUSH"];
    if (in_array($method, $httpMethod)){
        echo "$method is a validate http method.".PHP_EOL;
    }
    else{
        echo "$method is not a validate http method.".PHP_EOL;
    }
}
testHttpMehtodAllow('get');
testHttpMehtodAllow('GET');
// get is not a validate http method.
// GET is a validate http method.