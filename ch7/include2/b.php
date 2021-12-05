<?php
// b.php
include "./s.php";
include "./a.php";

// Warning: include(./s.php): Failed to open stream: No such file or directory in ...b.php on line 3

// Warning: include(): Failed opening './s.php' for inclusion (include_path='.;C:\php\pear') in ...b.php on line 3
// a.php is loaded.