<?php
@ob_start();
?>

<?php

	$name=$_POST['uname'];
	$psw=$_POST['psw'];
	$connection=mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"privana");
	$q=mysqli_query($connection,"select * from signup where email='$name' and password='$psw' and status='activated'");
	$result=mysqli_fetch_array($q);
if(($result['email']==$name)&&($result['password']==$psw)) 
{
	session_start();
	$_SESSION['em']=$name;
	
	header('location:myprof.php');
   }
   else{
header ( 'location:wrong.php');
   }
?>