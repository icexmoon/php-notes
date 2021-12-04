<?php
var_dump(0 == "a");
// bool(false)
var_dump("1" == "01");
// bool(true)
var_dump("10" == "1e1");
// bool(true)
var_dump(100 == "1e2");
// bool(true)