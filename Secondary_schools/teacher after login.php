
<?php
include('teacher login.php');
include ('connect.php');
if ($conn->connect_error) {
  die("<script> alert('This school is not registre in system')</script>");
}
$result = mysqli_query($conn,"SELECT * FROM teacher where username='".$_POST["user_name"]."'");

while($row = mysqli_fetch_array($result))
{
	if($row[4]==$_POST["password"] ){
	echo "<input name='id' type='hidden' value='".$row[0]."'>";
		 echo "Login as ".$_POST["user_name"];echo " sucessfully ";
		 echo "<a href='welcome teacher.php'>Continue</a>";

}
else{
	echo "Filled to login";
		 echo "<a href='teacher login.php'>Try again</a>";



}}
?>









	
	






