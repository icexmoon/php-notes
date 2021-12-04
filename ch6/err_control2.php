<?php
$lines = @file("file_no_exists") || die("file is not exists, exit.");
// file is not exists, exit.
