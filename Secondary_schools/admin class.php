<?php
include ('welcome admin.php');
include ('connect.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM class ");

echo "<table border='1' bgcolor='#99cc00'>
<tr>
<th>Class</th>
<th colspan='3'>Manage</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['Class_name'] . "</td>";
echo "<td><a href=''>Update</td>";?>

<td><a href="admin delete class.php?Class_name=<?php echo $row['Class_name']; ?>">Delete</a></td>
<?php
echo "<td><a href=''>More</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>