<?php
include('teacher_subject.php');
include('connect.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sqll= "insert into teacher_subject
(T_id,subject
) values
('$_POST[id]','$_POST[subject]')";

if ($conn->query($sqll) === TRUE) {
 echo "Subject is added to you";    
  
} else {
  echo "Subject is aleady exits";
}

$conn->close();
?>
