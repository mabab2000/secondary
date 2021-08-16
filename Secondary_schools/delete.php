
<?php
include('welcome head teacher.php');
include ('connect.php');
$query="SELECT * FROM `class`";
$quer="SELECT * FROM `student`";
$result= mysqli_query($conn,$query);

  $resultt=mysqli_query($conn,$quer);
  
  ?>



<form method="post" action="delete job.php">

Student id:<select name="id"><br><p><p><p>
<option value="">...select student id...</option>
<?php while($row=mysqli_fetch_array($resultt)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
	<?php endwhile;?>
<input type="submit" value="delete"></form>