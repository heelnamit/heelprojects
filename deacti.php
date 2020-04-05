<?php
@ob_start();
session_start();
if(isset($_SESSION['em']))
{
$em=$_SESSION['em'];
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"update signup set status='deactivated' where email='$em' ");
 
 header('location:index1.php');
 session_destroy();
}

else
{
	echo"nothing";
}



mysqli_close($c);
?>