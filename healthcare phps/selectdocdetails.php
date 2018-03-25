<?php

include 'dbconnection.php';
$hospital=$_POST['hospital'];

$conn=openconn();

$sql="select * from doctors where hospital=".$hospital;

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
          <td>Doctor Name</td>
          <td>Doctor Number</td>
          <td>Affiliated Hospital</td>
          <td>Specialization</td>
          </tr>
    ";

    while($rows=$result->fetch_assoc())
    {
      echo "<tr>
            <td>".$rows['doctor_name']."</td><td>".$rows['doctor_number']."</td><td>".$rows['hospital']."</td><td>".$rows['specialization']."</td></tr>";
    }
    echo "</table>";
}

?>
