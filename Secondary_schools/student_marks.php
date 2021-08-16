<?php
include('welcome teacher.php');
include('connect.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM student where class='".$_POST["class"]."'");

echo "<table border='1'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Class</th>
<th>".$_POST['subject']."    </th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['First_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['Class'] . "</td>";
echo "<td>".$row[$_POST['subject']]."</td>";
echo "</tr>";
}
echo "</table>";
$query="SELECT * FROM `student` where Class='".$_POST["class"]."'";

$result= mysqli_query($conn,$query);
echo "<form method='post' action='send.php'>";
echo "<input type='hidden' name='subject' value=".$_POST["subject"].">";?>
	<input type="hidden" >
	
	<select name="id">
<option value="">...select student id...</option>
<?php while($row=mysqli_fetch_array($result)):;?><p><p>
if($resultt.$row[1]==$result.$row[0]){
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
<?php endwhile;?>}

	<input type="text" name="marks">
	<input type="submit" value="send"><br>
	</form>
<?php
mysqli_close($conn);
	?>