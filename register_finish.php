<?php session_start(); ?>

<?php
/**
 * Created by PhpStorm.
 * User: SJ
 * Date: 2017/10/14
 * Time: 下午 03:30
 */
include ("mysql_connect.inc.php");

$id = $_POST['id'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$name=$_POST['name'];
$role=$_POST['user'];

if ($id!=null && $pwd != null && $pwd2 != null && $pwd == $pwd2 && $name != null && $role != null ) {
    //新增資料進資料庫語法
    $sqli = "INSERT INTO member (id,pwd,username,role)values ('$id','$pwd','$name','$role')";

    if ($con->query($sqli) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqli . "<br>" . $con->error;
    }

    $con->close();
}else{
    echo "帳號重複";
}



    ?>