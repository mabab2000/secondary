
<?php
include('subject.php');
include('connect.php');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sqll= "alter table student add ".$_POST["subjectcreate"]." int";



if ($conn->query($sqll) === TRUE) {
 echo ("<script> alert('thank you')</script> ");;
  
} else {
  echo "Subject is aleady exits ";
}

$conn->close();
?>
