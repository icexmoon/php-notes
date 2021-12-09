<?php
require_once "./rocket.cls.php";
require_once "./plane.cls.php";
$rocket = new Rocket();
$plane = new Plane();
Rocket::counter_print();
Plane::counter_print();