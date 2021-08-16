<?php
	echo "delete student with id= ".$_POST["id"]."  is sucessfully";
	?>
<?php
include('connect.php');
include('welcome head teacher.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM student 
where id=".$_POST["id"];



if ($conn->query($sql) === TRUE) {
 return true;
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
