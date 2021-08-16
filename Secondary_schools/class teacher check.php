<?php
include('connect.php');
include('welcome teacher.php');
$query="SELECT * FROM `class`";
$result= mysqli_query($conn,$query);

  
  
  ?>



<body><form method="post" action="check.php">
	Class:<select name="class"><br><p><p><p>
<option value="">...select class...</option>
<?php while($row=mysqli_fetch_array($result)):;?><p><p>
	<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option><p>
	<?php endwhile;?><p><p><p>
	<input type="submit" value="Display">
	</form>
	
