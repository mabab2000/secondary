<?php
include('welcome teacher.php');
include('connect.php');
$query="SELECT * FROM `datail`";
$quer="SELECT * FROM teacher_subject join teacher where teacher_subject.T_id=teacher.id ";
$que="SELECT * FROM `subject` ";

$result= mysqli_query($conn,$query);
$resultt=mysqli_query($conn,$quer);


  ?>

<table width="100%" border="1">
<tr>
	<td>
	
	
	
	<form method="post" action="student_marks.php">
	
	
	
	<input type="hidden" >
	<select name="class">
<option value="">...select class...</option>
<?php while($row=mysqli_fetch_array($result)):;?><p><p>
if($resultt.$row[1]==$result.$row[0]){
	<option value="<?php echo $row[1];?>"><?php echo $row[1];?></option><p>
<?php endwhile;?>}
	<input type="hidden" >
	<select name="subject">
<option value="">...select subject...</option>
<?php while($row=mysqli_fetch_array($resultt)):;?><p><p>
if($resultt.$row[1]==$result.$row[0]){
	<option value="<?php echo $row[1];?>"><?php echo $row[1];?></option><p>
<?php endwhile;?>}
	<input type="hidden">
	<input type="submit" value="Add marks"><br>
	</form>
</form></td>
	