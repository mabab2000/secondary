<?php
include ('welcome head teacher.php');
include('connect.php');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM student where class='".$_POST["class"]."'");

echo "<table border='1'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['First_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>