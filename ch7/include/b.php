<?php
// b.php
require "./s.php";
require "./a.php";
// Warning: require(./s.php): Failed to open stream: No such file or directory in ... on line 2

// Fatal error: Uncaught Error: Failed opening required './s.php' (include_path='.;C:\php\pear') in ...
// Stack trace:
// #0 {main}
//   thrown in ...b.php on line 2