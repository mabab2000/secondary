<html>
<head>
<title>Create account</title>
<?php
include('connect.php');
$query="SELECT * FROM `class`";
$result= mysqli_query($conn,$query);

  
  
  ?>
<script type="text/javascript">
function account()
{
alert("account is created");
}

</script>

</head>
<body>
<style type="text/css">
#text{
	height:25px;
	border-radius:5px;
    padding:40px;
    border:solid thin #aaa;
	width:100%;  
}
#button{
	padding:10px;
	width:100px;
	background-color:lightblue;
	border:none;
}
#box{
	background-color: grey;
	margin:auto;
	width:500px;
	padding:20px;
    box-align: center;
}
</style>
<div id="box">
 <h3><font size="" color="#3333ff"><h1>Create teacher  account</H1></font><p>
<form method="post" action="teacher registration.php">
First name:<input type="text" name="fname" required="reqired"><p>
Last name:<input type="text" name="lname" required="reqired"><p>

Create username:<input type="text" name="uname" required="reqired"><p>
Create password:<input type="password" name="pass" required="reqired"><p>
<input type="submit" value="Save" onclick="coount()">
</form>
<br><br> Fill the above imformation to create an account
</body>
</html>
