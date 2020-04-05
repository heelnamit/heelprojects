<?php
include('header1.php');

?>

<html>
<head>
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>
<style>


</style>


</head>
<body class="shake">
<div style="width:1350px;height:600px;">
<img src="projectpics/onl.jpeg" width="1350px" height="600px">

</div>

	<div style="width:500px;height:450px;position:absolute; left:480px;top:100px;border:1px solid lightgrey;margin-top:1px;padding:10px;">
	<h2 style="color:white;font-family: 'Roboto', sans-serif;text-align:center">Account Reactivation</h2>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	
	    <input type="text" id="fname" name="firstname" placeholder="Your name.." required style="width:100%;">

    <input type="text" id="ename" name="emname" placeholder="E-mail" onmouseout="return s1();"required style="width:100%;">
		<input type="password" id="pass" name="pass" placeholder="Password"  required style="width:100%;">

	<input type="text" id="mname" name="mname" placeholder="Phone" onmouseout="return s2();" required style="width:100%;">
	

	<button class="success" name="sub" style="width:50%;height:30px;margin-left:120px;">Reactivate</button>
	
	</form>
	</div>
<?php
include('footer.php');

?>
</body>

</html>

<?php

if(isset($_POST['sub']))
{
	
	$n1=$_POST['emname'];
	$n2=$_POST['pass'];
	
	$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"update signup set status='activated' where email='$n1'and password='$n2'");

if($q){
	echo "<p style=position:absolute;margin-top:-460px;margin-left:530px;color:green;background-color:black;>"."Your account has been activated. All set to login Again."."</p>";
}
else{
	echo "<p style=position:absolute;margin-top:-460px;margin-left:530px;color:red;background-color:black;>"."You may enter Wrong Email Or Password."."</p>";
}
}
?>

