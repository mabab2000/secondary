

<?php
include('teacher login.php');
include('connect.php');
// Check connection
if ($conn->connect_error) {
  die("<script> alert('This school is not registred in system')</script> ");
}

$sql = "insert into teacher
(Firstname,Lastname,UserName,Password) values
('$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[pass]')";



if ($conn->query($sql) === TRUE) {
 return true;
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

