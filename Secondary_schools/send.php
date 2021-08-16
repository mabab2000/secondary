
<?php
include('welcome teacher.php');

include('connect.php');
// Check connection
if ($conn) {
}

$sql = "update student set ".$_POST['subject']."='".$_POST['marks']."' where id='".$_POST['id']."'" ;




if ($conn->query($sql) === TRUE) {
 echo "Marks is added";;
  
} else {
  echo "<h2><font color='blue'>Class is already exist ";
}

$conn->close();
?>




