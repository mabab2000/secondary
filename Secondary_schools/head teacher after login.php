
<?php
include('head login.php');
include('connect.php');
$user=$_POST["user_name"];
$pass=$_POST["password"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection

$result = mysqli_query($conn,"SELECT username,password FROM account_created where username='".$user."'");

while($row = mysqli_fetch_array($result))
{
	if($row['password']==$pass ){
		echo "<h2>Login as ".$_POST["user_name"];echo " sucessfully ";
		 echo "<h2><a href='welcome head teacher.php'>Continue</a>";

} 
else{
	echo "<H2>Filled to login";
		 echo "<a href='head login.php'>Try again</a>";



}}
mysqli_close($conn);
?>



