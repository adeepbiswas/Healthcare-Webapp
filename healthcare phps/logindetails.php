<?php

if (isset($_POST['submit']))
{
include 'dbconnection.php';
$usname=$_POST['username'];
$password=$_POST['psw'];

$conn=openconn();

$sql="select password from accounts where username=".$usname;

$pass = mysql_query($sql) or die (mysql_error($conn));

if($password==$pass)
{
  header("C:/Users/adeep/Desktop/IWP/Frontpage.html");
}
else
{
    echo "User name or password is invalid";
}
}

?>
