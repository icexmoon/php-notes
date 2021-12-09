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
test_conn($conn);
// [id:1, name:Jack Chen, age:20]
// [id:2, name:Brus Lee, age:15]
