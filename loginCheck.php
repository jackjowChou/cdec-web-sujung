<?php
/**
 * Created by PhpStorm.
 * User: SJ
 * Date: 2017/10/14
 * Time: 下午 05:14
 */
include ('mysql_connect.inc.php');
$id=$_POST['id'];
$str=$_POST['pwd'];
$pwd=sha1($_POST[pwd]);
$queryStr="select id,pwd,name,user,from member where `id`=$id;";
if(!$result=$con->query($queryStr)){
    echo"sorry";
    echo"error";
    echo"Query:".$queryStr ."\n";
    echo"Errno".$con->errno."\n";
    echo"Error".$con->error."\n";
    exit;

}
if($result->num_rows===0){
    echo"沒有ID";
exit;
}
$loginuser=$result->fetch_assoc();
if($id==$loginuser['id']&&$pwd==$loginuser['pwd']){
    session_start();
    $_SESSION=['uid']=$id;
    $_SESSION['role']=$id;
    $_SESSION['time']=time();
    echo'成功';
    }else{
    echo'失敗';
}
$result->free();
$con->close();