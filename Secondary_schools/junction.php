<?php
include('teacher_to_class.php');
include('connect.php');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sqll= "insert into datail
(t_id,Class
) values
('$_POST[id]','$_POST[class]')";

if ($conn->query($sqll) === TRUE) {
 echo "Class is added to you";    
  
} else {
  echo "You is aleady exits in this class ";
}

$conn->close();
?>