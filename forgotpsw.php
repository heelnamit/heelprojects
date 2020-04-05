<?php
include 'header1.php';
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
<style>


</style>
</head>

<body>
    <div style="width:1350px;height:600px;">
<img src="projectpics/sky.jpg" width="1350px" height="600px">

</div>
	<div style="width:600px;height:400px;background:rgba(0,0,0,0.4);position:absolute;left:420px;top:150px;font-family:'Roboto Slab', sans-serif;border:solid 2px;">
    <h1 style="text-align: center;color:yellow;">Forgot Password? RESET IT HERE.</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" style="text-align: center;">
        <input type="text" name="email" placeholder="Enter your email" style="width: 500px;">
        <br>
        <input type="text" name="pin" placeholder="Enter your account pin" style="width: 500px;">
        <br>
        <input type="Password" name="pswd" placeholder="Enter new Password" style="width: 500px;">
        <br>
        <input type="submit" name="s" placeholder="SUBMIT" style="width: 100px;height: 50px;background-color: black;color: white;">
    </form>
	</div>
	<footer>
	<?php
	include('footer.php');
	?>
	</footer>
	
</body>
</html>
<?php
if (isset($_POST['s'])) {
	$email=$_POST['email'];
	$pin=$_POST['pin'];
	$password=$_POST['pswd'];
	$connection=mysqli_connect("localhost","root","");
	mysqli_select_db($connection,'privana');
	$query=mysqli_query($connection,"update signup set password='$password' where pin='$pin' and email='$email'");
  if ($query) {
 	echo "<p style=color:red;position:absolute;left:530px;top:510px;>"."Password changed successfully."."</p>";
 }
 else{
 	echo "<p style=color:red;position:absolute;left:530px;top:510px;>"."WRONG DETAILS."."</p>";
}
 mysqli_close($connection);
}
?>