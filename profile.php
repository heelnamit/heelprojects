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
<body class="slideDown">
<?php
$em=$_SESSION['em'];

$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$query=mysqli_query($c,"select * from signup where email='$em' ");
while($result=mysqli_fetch_array($query))
{
?>
<div id="bg">
<div id="box1">
<div id="upper1">
<img src='projectpics/<?php echo $result['pic'];?>' width="150px" height="200px" alt="Not Uploaded yet">
<h5>Your Name Here</h5>
</div>
<div id="line"></div>
<div class="vertical-menu">
  <a  style="text-decoration:none;"href="myprof.php">My Profile</a>
  <a style="text-decoration:none;" href="#" class="active">Edit Your Profile</a>
    <a style="text-decoration:none;"href="view1.php" > Paying Guest Requests</a>
  <a style="text-decoration:none;" href="chanpsw.php">Change Password</a>
  <a style="text-decoration:none;" href="signout.php">Sign Out</a>
</div>


</div>

<div id="box2">
<h3><i class="fas fa-user"></i> Edit Profile</h3>

<div id="line2"></div>
        <form class="form-horizontal"  method="post" action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" required name="n3"  >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value=""required name="n4">
            </div>
			 </div>
			<div class="form-group">
		  <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" readonly value="<?php echo $result['email']; ?>" >
            </div>
			 </div>
   <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
			<div class="col-lg-8">
        <input type="checkbox"  name="gender" style="margin-bottom:15px" value="male"> MALE
		<input type="checkbox"  name="gender" style="margin-bottom:15px" value="female"> FEMALE
       </div>
	   </div>
	   
	     <div class="form-group">
            <label class="col-lg-3 control-label">Select User type</label>
			<div class="col-lg-8">
			    <select id="prop" name="prop">
	<option value="none">Select User Type</option>
      <option value="tenant">Tenant</option>
      <option value="owner">Owner</option>
    </select>
			
			
	   </div>
	   </div>
	 <div class="form-group">
				<label class="col-lg-3 control-label">Upload A Profile Picture:</label>
				<div class="col-lg-8">
	 <input type="file" class="form-control" name="file">
		</div>
	    </div>

		<div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="password" readonly value="<?php echo $result['password']; ?>">
            </div>
			 </div>
			 <div class="form-group">
            <label class="col-lg-3 control-label">Permanent Address</label>
            <div class="col-lg-8">
             <textarea id="subject"  placeholder="Your Address" style="width:400px;height:60px" required name="n5"></textarea>
            </div>
			 </div>
			<button id="but" name="s1">Save</button>
   <?php 
}
?>   
</div>
</div>
</form>

<footer style="margin-top:700px">
<?php
include('footer2.php');

?>
</footer>
</body>
</html>
<?php



if (isset($_POST['s1']))

{
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$prop=$_POST['prop'];
$password=$_POST['password'];

$file=$_FILES['file']['name'];

$n5=$_POST['n5'];

$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");

move_uploaded_file($_FILES['file']['tmp_name'],'projectpics/'.$_FILES['file']['name']);

mysqli_query($c,"update signup set name='$n3', lastname='$n4' , address='$n5', pic='$file' , password='$password',gender='$gender' ,prop='$prop' where email='$em'");


mysqli_close($c);

}
}
else
{
	header('location:index1.php');
}

?>