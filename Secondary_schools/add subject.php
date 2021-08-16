<?php
include('welcome head teacher.php');
?>
<form method="post" action="re enter subject.php">
	
	<input type="text" value="<?php echo $_POST['subjectcreate']?>"name="subjectcreate" placeholder="Enter suject " fixed required>
	<input type="submit" value="Confirm"><br>
	</form>
	<?php
include('connect.php');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sqll= "insert into subject
(subject) values
('$_POST[subjectcreate]')";


if ($conn->query($sqll) === TRUE) {
 echo ("<script> alert('thank you')</script> ");;
  
} else {
  echo "Subject is aleady exits ";
}

$conn->close();
?>
