<?php

if (isset($_POST['submit']))
{
    $name=$_POST['username'];
    $password=$_POST['psw'];

    include 'dbconnection.php';

    $conn=openconn();

    $sql="insert into accounts(username, password) values('".$name."','".$password."')";

    if(mysql_query(mysql_error($sql)==TRUE)
    {
        echo "Record Inserted Successfully";
    }
    else
    {
        echo "Error: ".mysql_error($conn);
    }

    closeconn($conn);
}
?>
