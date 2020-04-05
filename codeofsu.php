<?php

$n1=$_POST['n1'];
$n2=$_POST['n2'];

$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$query=mysqli_query($c,"insert into signup(email, password) values('$n1','$n2')");
if($query)
{
	session_start();
	$_SESSION['em']=$n1;
header("location:profile.php");
}
else{
	header("location: wrong.php");
}

?>