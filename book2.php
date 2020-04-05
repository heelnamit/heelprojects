<?php
include 'header2.php';
?>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
<style>
a
{
	text-decoration:none;
}
#b1{
	width:1365px;
	background-image:url('projectpics/book.jpg');
	background-size:cover;
	height:500px;
	
}
#contb{
	width:400px;
	height:350px;
	background:rgba(0,0,0,0.4);
	text-align:center;
	font-family: 'Roboto Slab', sans-serif;
	color:white;
	position:absolute;
	left:200px;
	top:150px;
	
}
.icos i
{
	font-size:30px;
}
#contb2	
{
	width:680px;
	height:450px;
	background:rgba(0,0,0,0.4);
	text-align:center;
	font-family: 'Exo', sans-serif;
	color:black;
	position:absolute;
	left:650px;
	top:100px;
	
}
.success {
  border-color: #4CAF50;
  color: green;
  background-color: white;
  
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div id="b1">
<div id="contb">
<h3>Book Now Pay Later</h3>
<p>Customers have the option to pay at the Property during check-in. No brokerage,No need to run & waste money on furnishing.
</br>
You can also pay your rent through online transactions.

</p>
</br>
<div class="icos">

<i class="fas fa-phone-square"></i><p><strong>Phone:</strong> 9464849610,7009248677</p>
<i class="fas fa-envelope"></i><p><strong>Email:</strong> namitmahajan11@gmail.com</p>
</div>
</div>
<div id="contb2">
<h2 style="color:white"><i class="far fa-calendar-check"></i> Online Booking</h2>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required style="width:45%;margin-left:-10px;">

    <input type="text" id="ename" name="emname" placeholder="E-mail" onmouseout="return s1();"required style="width:45%;float:right;margin-right:20px;">
	<input type="text" id="mname" name="mname" placeholder="Phone" onmouseout="return s2();" required style="width:45%; float:left;margin-left:20px;">
	<input type="date" name="date" style="width:45%;height:50px;margin-left:5px;margin-top:5px">
	<h5  style="margin-left:5px;margin-top:10px;color:white">- Check-In Date - </h5>
	  <textarea id="subject" name="propadd" placeholder="Your communication Address" style="width:550px;height:60px" required></textarea>
	<br/><br/>
	<button class="success" name="sub" style="width:50%;height:30px">Submit</button>
	
</form>


</div>
</body>
</html>


<?php
if (isset($_POST['sub'])){
$n1=$_POST['firstname'];
$n2=$_POST['emname'];
$n3=$_POST['mname'];
$n4=$_POST['propadd'];
$n5=$_POST['date'];
$n6=$_GET['pid'];




$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"INSERT INTO `bookings`(`name`, `email`, `mobile`, `prop_address`, `checkin`,`pid`) VALUES ('$n1','$n2','$n3','$n4','$n5',$n6)");
if($q){
	echo "<p style=position:absolute;margin-top:-250px;margin-left:850px;color:green;background-color:black;>"."ThankYou. Your Request has been successfully sent."."</p>";
}
else{
	echo "<p style=position:absolute;margin-top:-250px;margin-left:850px;color:red;background-color:black;>"."Your Request has not been successfully sent."."</p>";
}
}

?>