<?php

include 'dbconnection.php';
$searchdoc=$_POST['searchdoc'];

$conn=openconn();

$sql="select * from doctors where doctor_name=".$searchdoc;

$result = mysql_query($sql) or die (mysql_error($conn));

if($result->num_rows)
{
    //writing the result as a table
    echo "<table id='t1' name='t1'>
          <tr>
          <td>Doctor Name</td>
          <td>Doctor Number</td>
          <td>Affiliated Hospital</td>
          <td>Specialization</td>
          </tr>
    ";

    $rows=$result->fetch_assoc();
    echo "<tr>
            <td>".$rows['doctor_name']."</td><td>".$rows['doctor_number']."</td><td>".$rows['hospital']."</td><td>".$rows['specialization']."</td></tr>";
    echo "</table>";
}
else
{
    echo "No Such Record Found";
}

?>
