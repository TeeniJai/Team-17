<?php
$title ="Reading Data from thhe database";
include '../layout/header.php';
include 'db.php';
$sql = "select * from account table";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "<table class ='table'>
    <tr> <th> payment</th><th>Fname</th><th>phone</th>
    <th>address</th><th>email</th><th>accountID</th><tr>";


    while($row =$result ->fetch_assoc()){
  echo"
  <tr>
  <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a>  </td>

  <td>$row[fname]</td>
  <td>$row[phone]</td>
  <td>$row[address]</td>
  <td>$row[email]</td>
  <td>$row[accountID]</td>
  <td>$row[payment]</td>
  </tr>
  ";
}
 echo "</table>";
}
else
{
    echo "No results";
}
$conn->close();
include '../layout/footer.php';

?>