<?php session_start(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: SJ
 * Date: 2017/10/14
 * Time: 下午 11:13
 */
include("mysql_connect.inc.php");

$id = $_POST['id'];
//$str=$_POST['pwd'];
$pwd = ($_POST['pwd']);
$sql = "select * from member where id='$id'";
$result = $con->query($sql);
$loginuser = $result->fetch_assoc();
if ($id == $loginuser['id'] && $pwd == $loginuser['pwd']) {
    session_start();
    $_SESSION['id'] = $id;
    $nub = $loginuser ['role'];
    if ($nub == 1) {
        header("Location: question.php");
    } else if($nub==2) {
        header("Location: questiondb.php");
    }



} else {
    echo '帳號或密碼錯誤';
}


?>
