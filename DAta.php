
<?php
include 'dbcon.php';
?>
<table border="2">
<tr>
<td>student ID</td>
<td>Name</td>
<td>Address</td>
<td>Phone</td>
<td>Gender</td>
<td>Country</td>
</tr>
<?php

$result=mysqli_query($con,"SELECT * FROM `reg`");
while($row=mysqli_fetch_array($result))
{?>
  
  <tr>
  <td><?php echo $row["sid"];?></td>
  <td><?php echo $row["name"];?></td>
  <td><?php echo $row["address"];?></td>
  <td><?php echo $row["phone"];?></td>
  <td><?php echo $row["gender"];?></td>
  <td><?php echo $row["country"];?></td>
  </tr>
  
<?php
}
?>
</table>
