<?php
require_once './connection.cls.php';
require_once '../util/array.php';
function test_conn(Connection $conn)
{
    $users = $conn->qurey("SELECT * FROM user");
    foreach ($users as $user) {
        print_arr($user);
    }
}
$conn = new Connection('localhost', 'root', '', 'test');
$s_conn = serialize($conn);
echo "{$s_conn}".PHP_EOL;
$un_conn = unserialize($s_conn);
test_conn($un_conn);
// O:10:"Connection":4:{s:18:"Connectionserver";s:9:"localhost";s:20:"Connectionusername";s:4:"root";s:20:"Connectionpassword";s:0:"";s:14:"Connectiondb";s:4:"test";}
// [id:1, name:Jack Chen, age:20]
// [id:2, name:Brus Lee, age:15]