<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

$db_server = "localhost";
$db_name = "s104021043";
$db_user = "s104021043";
$db_passwd = "C8ie@6lo1";

$con = mysqli_connect($db_server,$db_user,$db_passwd,$db_name);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "Success connect to db";
}
/* change character set to utf8 */
$con->set_charset("utf8");

?>

