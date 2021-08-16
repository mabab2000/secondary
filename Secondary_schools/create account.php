
<?php
include('head login.php');
include('connect.php');
if ($conn->connect_error) {
  die("conect ");
}

$sql = "insert into account_created
(Firstname,Lastname,SchoolName,UserName,Password) values
('$_POST[fname]','$_POST[lname]','$_POST[choolcreate]','$_POST[uname]','$_POST[pass]')";



if ($conn->query($sql) === TRUE) {
 return true;
  
} else {
  echo "User name is taken";
}

$conn->close();
?>
