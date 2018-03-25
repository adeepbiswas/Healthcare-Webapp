<?php

include 'dbconnection.php';
  $id=$_POST['id'];

$conn=openconn();

$sql="select * from account_details where user_id=".$id;

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
          <td>Name</td>
          <td>ID</td>
          <td>Date of birth</td>
          <td>Gender</td>
          <td>Blood Group</td>
          <td>Allergy</td>
          <td>Mobile Number</td>
          <td>Emergency Name</td>
          <td>Emergency Number</td>
          </tr>
    ";

    while($rows=$result->fetch_assoc())
    {
      echo "<tr>
            <td>".$rows['Reg']."</td><td>".$rows['Name']."</td></tr>";
    }
    echo "</table>";
}

?>
