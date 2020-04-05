<?php
@ob_start();
session_start();
if(isset($_SESSION['em']))
{
include 'header2.php';

?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">


<style>


#box1{
	width:250px;
	height:500px;
	background:#E60E0E;
	margin-left:-50px;
	margin-top:70px;
}
#upper1
{
	width:250px;
	text-align:center;
	padding:20px;
	font-family: 'Roboto Slab', sans-serif;
	color:white;

}
#line{
	width:250px;
	height:2px;
	background:#E0F8E0;
}
.vertical-menu {
    width: 250px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
	font-family: 'Roboto Slab', sans-serif;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}


#b2
{
	width:600px;
	height:400px;
	position:absolute;
	left:400px;
	top:30px;
	font-family: 'Roboto Slab', sans-serif;
	
}
.ipu
{
	border-top-left-radius:100px;
}

</style>
</head>
<body class="slideDown">
<?php
$em=$_SESSION['em'];
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"Select * from signup where email='$em' ");

while($data=mysqli_fetch_array($q))
{

	?>
<div id="box1">
<div id="upper1">
<img src='projectpics/<?php echo $data['pic'];?>' width="150px" height="200px">
<h5>
<?php 
echo $data['name'];
	echo $data['lastname']; 
}
?></h5>
	
	
</div>
<div id="line"></div>
<div class="vertical-menu">
  <a style="text-decoration:none;" href="myprof.php">My Profile</a>
  <a style="text-decoration:none;" href="profile.php" >Edit Your Profile</a>
    <a style="text-decoration:none;"href="view1.php" > Paying Guest Requests</a>
  <a style="text-decoration:none;" href="#" class="active">Change Password</a>
  <a style="text-decoration:none;" href="signout.php">Sign Out</a>
</div>



<div id="b2">
<h1> Change Your Password</h1> 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	
	<input type="text" name="em" placeholder="Enter your registered E-mail" class="ipu" required>
	<input type="password" name="old" placeholder="Enter your Old Password" class="ipu" required>
	<input type="password" name="new" placeholder="Enter your New Password" class="ipu" required>
	<button name="b1" style="width:30%; background:orange; color:white; margin-left;200px;"><i class="fas fa-key"></i> Change Password</button>

</form>
</div>



 
</div>
<footer style="margin-top:600px">
<?php
include('footer2.php');


?>
</footer>
</body>
</html>


<?php
if(isset($_POST['b1']))
{
$em=$_POST['em'];
$old=$_POST['old'];
$new=$_POST['new'];
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
mysqli_query($c,"update signup set password='$new' where email='$em' and password='$old'");

header('location:myprof.php');


}

}


?>