<?php
$docstring = <<<EOF
This is a doc description:
This doc is used to...
Points:
1. ...
2. ... 
3. ...
The End.
EOF;
echo $docstring;
// This is a doc description:
// This doc is used to...
// Points:
// 1. ...
// 2. ... 
// 3. ...
// The End.
$name = 'Li lei';
$age = 20;
echo <<<EOF
\nname:$name\tage:$age
EOF;
// name:Li lei	age:20
echo PHP_EOL;
echo <<<'EOF'
\nname:$name\tage:$age
EOF;
// \nname:$name\tage:$age
