<?php
function get_response(string $request): string
{
    return match (true) {
        str_contains($request, 'hello') || str_contains($request, '你好') => 'hello',
        str_contains($request, 'bye') || str_contains($request, '再见') => 'bye',
        default => "I don't known",
    };
}
echo get_response("hello, how are you.").PHP_EOL;
// hello
echo get_response("你好，吃饭了吗？").PHP_EOL;
// hello
echo get_response("bye.").PHP_EOL;
// bye

