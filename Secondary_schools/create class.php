
<?php
include('enter class.php');
include('connect.php');
if ($conn) {
}

$sql = "insert into class (Class_name) values ('$_POST[classcreate]')" ;
;



if ($conn->query($sql) === TRUE) {
 echo "<h2><font color='blue'>lass of ".$_POST["classcreate"]." is created sucessfully";;
  
} else {
  echo "<h2><font color='blue'>Class is already exist ";
}

$conn->close();
?>




