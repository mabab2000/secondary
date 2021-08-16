
<?php
include('welcome teacher.php');
include('connect.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query="SELECT * FROM `teacher`";
$quer="SELECT * FROM `class`";

$result= mysqli_query($conn,$query);
$resultt=mysqli_query($conn,$quer);
 
  
  ?>

<table width="100%" border="1">
<tr>
	<td>
	
	
	
	<form method="post" action="junction.php">
	
	
	Teacher_id:<select name="id"><br><p><p><p>
<option value="">...your Id...</option>
<?php while($row=mysqli_fetch_array($result)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
	<?php endwhile;?>
	<input type="hidden" >
	<select name="class">
<option value="">...select class...</option>
<?php while($row=mysqli_fetch_array($resultt)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
	<?php endwhile;?>
	<input type="hidden" >
	
	
	<input type="submit" value="Register as teacher in class"><br>
	</form>
</form></td>
	
	
</tr>

