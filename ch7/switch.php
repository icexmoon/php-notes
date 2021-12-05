<?php
function get_response(string $request): string
{
    $response = "";
    switch ($request) {
        case "hello":
        case "你好":
            $response = "hello";
            break;
        case "how are you":
            $response = "how are you";
            break;
        case "bye":
            $response = "bye";
            break;
        default:
            $response = "I don't known";
    }
    return $response;
}
echo get_response("hello") . PHP_EOL;
echo get_response("你好") . PHP_EOL;
echo get_response("bye") . PHP_EOL;
// hello
// hello
// bye

