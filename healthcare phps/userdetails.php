<?php

if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $blood=$_POST['blood'];
    $allergy=$_POST['allergy'];
    $mobile=$_POST['mobile'];
    $ename=$_POST['ename'];
    $enumber=$_POST['enumber'];

    include 'dbconnection.php';

    $conn=openconn();

    $sql="insert into account_details(user_id, user_name, dob	gender, bloodgroup, allergy	mobile, emergency_name, emergency_number
) values('".$name."','".$id."','".$dob."','".$gender."','".$blood."','".$allergy."','".$mobile."','".$ename."','".$enumber."')";

    if(mysql_query($sql)==TRUE)
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
