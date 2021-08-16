

<?php
include('welcome teacher.php');
include('connect.php');
$query="SELECT * FROM `teacher`";
$quer="SELECT * FROM `subject` ";
$que="SELECT * FROM `teacher_class` INNER JOIN teacher ON teacher_class.teacher_id=teacher.id";
$result= mysqli_query($conn,$query);
$resultt=mysqli_query($conn,$quer);
 $resulttt=mysqli_query($conn,$que);
  
  ?>

<table width="100%" border="1">
<tr>
	<td>
	
	
	
	<form method="post" action="teacher_to_subject.php">
	
	
	Teacher_id:<select name="id"><br><p><p><p>
<option value="">...your Id...</option>
<?php while($row=mysqli_fetch_array($result)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
	<?php endwhile;?>
	<input type="hidden" >
	<select name="subject">
<option value="">...select subject...</option>
<?php while($row=mysqli_fetch_array($resultt)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
	<?php endwhile;?>
	<input type="hidden" >
	<input type="hidden" >
	<input type="submit" value="add your suject"><br>
	</form>
</form></td>
	
	
</tr>

