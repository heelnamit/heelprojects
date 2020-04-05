  <?php
@ob_start();
session_start();
if(isset($_SESSION['em']))
{
include 'header2.php';
}
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

#box2{
	width:600px;
	height:500px;
	background:	;
	position:absolute;
	left:500px;
	top:80px;
	padding:10px;
	border-radius:120;
	
}
#line2{
	width:550px;
	height:2px;
	background:#817070;
}
#but{
	background:	#FF6347;
	color:white;
	width:20%;
	position:absolute;
	left:300px;
	top:600px;
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
  <a style="text-decoration:none;"href="myprof.php" >My Profile</a>
  <a style="text-decoration:none;"href="profile.php" >Edit Your Profile</a>
    <a style="text-decoration:none;" href="view1.php" class="active"> Paying Guest Requests</a>
  <a style="text-decoration:none;"href="chanpsw.php">Change Password</a>
  <a style="text-decoration:none;"href="signout.php">Sign Out</a>
</div>
</div>
	<div style="width:900;height:500px;background:url('projectpics/bks.jpg');background-size:cover;overflow-y:scroll;position:absolute;left:450px; top:150px;">
<h1 style="text-align:center;position:absolute;left:300px;top:-10px;font-family: 'Roboto Slab', sans-serif;color:white;"> Booking Requests</h1>
<br><br>
<?php 
}?>

	<?php 
	$em=$_SESSION['em'];
	
	
$q1=mysqli_query($c,"Select * from listing where email='$em'");

$data1=mysqli_fetch_array($q1);

		$pid=$data1['pid'];
		
		
		
$q=mysqli_query($c,"Select * from bookings where pid='$pid'");

while($data1=mysqli_fetch_array($q))
{
	?>

	<div style="width:600px;height:230px;background-color:rgba(0,0,0,0.4);margin-left:50px;margin-top:20px;color:white;border:5px solid transparent;box-shadow:5px 10px 18px lightblue;font-family: 'Roboto Slab', sans-serif;">
	<?php
			echo"<h4>Name of Customer: ";
			echo $data1['name']; 
			echo"</h4>";
			
			echo"<h4>Customer's Email: ";
			echo $data1['email']; 
			echo"</h4>";
			
			echo"<h4>Customer's Mobile: ";
			echo $data1['mobile']; 
			echo"</h4>";
					
			echo"<h4>Check-In Date: ";
			echo $data1['checkin']; 
			echo"</h4>";
			echo "</div>";
			
}
	?>

</div>
</body>
</html>