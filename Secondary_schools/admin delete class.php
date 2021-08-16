
<?php
   include ('connect.php');
   
   $r = "DELETE FROM class WHERE Class_name =".$_GET['Class_name'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($con);
   }else{
	   echo "User deleted successfly";
   }
       
   
?>