 <?php 
include('admin login.php');
include('connect.php');
// Check connection

$result = mysqli_query($conn,"SELECT password FROM admin where username='".$_POST['user']."'");

while($row = mysqli_fetch_array($result))
{
	if($row['password']==$_POST['password']){
		echo "<h2>Login as ".$_POST["user"];echo " sucessfully ";
		 echo "<a href='welcome admin.php'>Continue</a>";
		 

} 
else{
	echo "<h2>Filled to login";
		 echo "<a href='admin login.php'>Try again</a>";



}}
mysqli_close($conn);
?>



