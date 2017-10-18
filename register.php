<?php
/**
 * Created by PhpStorm.
 * User: SJ
 * Date: 2017/10/14
 * Time: 下午 10:16
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<body>


<form name="formadd" method="post" action="register_finish.php" id="add">
    帳號：<input type="text" name="id" id="id"  />
    <p> 密碼：
        <input type="password" name="pwd" id="pwd"  />
    <p> 再一次輸入密碼：
        <input type="password" name="pwd2" id="pwd2"/>
    <p>姓名：
        <input type="text" name="name" id="name" />

    <p>身分別
        <input type="radio" name="user" value="1" id="radio"/>學生
        <input type="radio" name="user" value="2" id="radio"/>管理者<p>

        <input type="submit" name="button" value="確定" />


</form>

</body>
</html>
