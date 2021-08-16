
<?php
	echo "Update student imformation  with id= ".$_POST["id"]."  is sucessfully";
	?>
<?php
include('welcome head teacher.php');
include('connect.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE student SET First_name='".$_POST["first"]."',last_name='".$_POST["last"]."',class='".$_POST["class"]."' WHERE id=".$_POST["id"];




if ($conn->query($sql) === TRUE) {
 return true;
  
} else {
  echo "Same thing is wrong";
}

$conn->close();
?>
