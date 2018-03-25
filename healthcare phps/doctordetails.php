<?php

if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $number=$_POST['number'];
    $hospital=$_POST['hospital'];
    $specializatiion=$_POST['specialization'];

    include 'dbconnection.php';

    $conn=openconn();

    $sql="insert into doctors(doctor_name, doctor_number, affiliated_hospital, specialization) values('".$name."','".$number."','".$hospital."','".$specializatiion."')";

    if(mysql_query($sql)==TRUE)
    {
        echo "Record Inserted Successfully";
    }
    else
    {
        echo "Error: ". mysql_error($conn);
    }

    closeconn($conn);
}
?>
