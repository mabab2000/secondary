<?php
include ('welcome admin.php');
include ('connect.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM account_created ");

echo "<table border='1' bgcolor='#99cc00'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Username</th>
<th>Password</th>
<th colspan='3'>Manage</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['UserName'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td><a href=''>Update</td>";
echo "<td><a href=''>Delete</td>";
echo "<td><a href=''>More</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>