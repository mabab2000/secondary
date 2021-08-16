<?php
include('connect.php');
$query="SELECT * FROM `class`";
$result= mysqli_query($conn,$query);

  
  
  ?>
<body bgcolor="#669966">
<body bgcolor="#669966">
<table width= "50%" border="1" align="center">
<tr>
<td bgcolor="#cc33ff"><h2><a href="enter class.php">Create class</a></h2></td>
<td bgcolor="#cc33ff"><h2><a href="subject.php">Add subject</a></h2></td>
	<td bgcolor="#cc33ff"><h2><a href="registration.php">Registration</a></h2></td>
	<td bgcolor="#cc33ff"><h2><a href="delete.php">Delete</a></h2></td>
	<td bgcolor="#cc33ff"><h2><a href="update.php">Update</a></h2></td>
	<td bgcolor="#cc33ff"><h2><a href="class teacher check.php">Display</a></h2></td>
</tr>
</table>


<form method="post" action="head teacher job.php">

First name:<input type="text" name="first"><br>
Last name:<input type="text" name="last"><br>
Class :<select name="class">
<option value="">...select class...</option>
<?php while($row=mysqli_fetch_array($result)):;?>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
	<?php endwhile;?>
</select><br>
<input type="submit" value="Register">
</form>

</html>

