<?php
include('welcome head teacher.php');
include('connect.php');
$query="SELECT * FROM `class`";
$quer="SELECT * FROM `student`";
$result= mysqli_query($conn,$query);
$resultt=mysqli_query($conn,$quer);
  
  
  ?>



<form method="post" action="update job.php">


Student id:<select name="id"><br><p><p><p>
<option value="">...select student id...</option>
<?php while($row=mysqli_fetch_array($resultt)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
	<?php endwhile;?>
<input type="text" placeholder="First name"name="first">
<input type="text" placeholder="Last name" name="last">
<select name="class">
<option value="">...select class...</option>
<?php while($row=mysqli_fetch_array($result)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
	<?php endwhile;?><p><p><p>
<input type="submit" value="Update"></form>
