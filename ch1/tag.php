<?php
$students = array(
    "Li lei" => array(
        "name" => "Li lei",
        "age" => 10,
    ),
    "Han Meimei" => array(
        "name" => "Han Meimei",
        "age" => 20,
    ),
    "Xiao Li" => array(
        "name" => "Xiao Li",
        "age" => 15,
    )
); 
?>
<html>
    <h1><?php echo "hello"; ?></h1>
    <ul>
        <?php foreach ($students as $key => $student){?> 
        <li>name:<?php echo $student["name"]?> age:<?php echo $student["age"] ?></li>
        <?php } ?>
    </ul>
</html>