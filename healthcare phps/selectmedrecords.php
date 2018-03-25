<?php

include 'dbconnection.php';
$id=$_POST['id'];


$conn=openconn();

$sql="select * from mri where user_id=".$id;
$sql.="select * from adhd where hospital=".$id;
$sql.="select * from xray where hospital=".$id;
$sql.="select * from bloodgroup where hospital=".$id;

$result = mysql_query($sql) or die (mysql_error($conn));

//print_r($result);
if($result->num_rows)
{
    //$rows=$result->fetch_assoc();
   // print_r($rows);

    //$rows=$result->fetch_all();
   // print_r($rows);

  /* $rows=$result->fetch_assoc();
    echo "Reg Number is ". $rows['Reg']."<br>";
    echo "Name is ". $rows['Name']."<br>"; */

    /*while($rows=$result->fetch_assoc())
    {
    echo "Reg Number is ". $rows['Reg']."<br>";
    echo "Name is ". $rows['Name']."<br>";
    }*/

    //writing the result as a table
    echo "<table id='t1' name='t1'>
          <tr>
          <td>User ID</td>
          <td>Repor</td>
          </tr>
    ";

    while($rows=$result->fetch_assoc())
    {
      echo "<tr>
            <td>".$rows['user_id']."</td><td>".$rows['report']."</td><td>"</tr>";
    }
    echo "</table>";

}

?>
