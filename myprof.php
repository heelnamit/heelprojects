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

#main{
	width:600px;
	height:500px;
	background:url('projectpics/sky.jpg');
	position:absolute;
	left:500px;
	top:150px;
	font-family: 'Roboto Slab', sans-serif;
}
#im{
	width:600px;
	height:auto;
	position:absolute;
	left:500px;
	top:550px;
	
}
#par{
	font-size:20px;
	
}
</style>
</head>
<body class="slideUp">

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
<h5><?php echo $data['name'];
	echo $data['lastname']; ?></h5>
</div>
<div id="line"></div>
<div class="vertical-menu">
  <a style="text-decoration:none;"href="#" class="active">My Profile</a>
  <a style="text-decoration:none;"href="profile.php" >Edit Your Profile</a>
    <a style="text-decoration:none;"href="view1.php" > Paying Guest Requests</a>
  <a style="text-decoration:none;"href="chanpsw.php">Change Password</a>
  <a style="text-decoration:none;"href="signout.php">Sign Out</a>
</div>
</div>

<div id="main">

<h1 style="text-decoration:underline; text-align:center;">My Profile</h1>
 </br>
<p id="par"><b>NAME : </b><?php	echo $data['name'];
	echo $data['lastname'];
	echo"</br>"; echo"</br>";
	?>
	<b>EMAIL : </b><?php echo $data['email'];
	echo"</br>";echo"</br>";?>
	<b>YOUR ADDRESS :</b> <?php echo $data['address'];
	echo"</br>";echo"</br>";?>
	<b>GENDER : </b><?php echo $data['gender'];
	echo"</br>";echo"</br>";?>
	<b>USER TYPE : </b><?php echo $data['prop'];?></p>
	<?php
}
mysqli_close($c);




?>

</div>
<div id="im">

<img src="projectpics/myfoot.png" width="600px" height="auto">


</div>
<footer style="margin-top:600px">
<?php
include('footer2.php');

?>
</footer>
</body>
</html>
<?php


}
else
{
	header('location:index1.php');
}



?>