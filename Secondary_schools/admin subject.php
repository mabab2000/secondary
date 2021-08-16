<?php
include ('welcome admin.php');
include ('connect.php');
$result = mysqli_query($conn,"SELECT * FROM subject ");

echo "<table border='1' bgcolor='#99cc00'>
<tr>
<th>Subject</th>
<th colspan='3'>Manage</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['subject'] . "</td>";
echo "<td><a href=''>Update</td>";
echo "<td><a href=''>Delete</td>";
echo "<td><a href=''>More</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>