<?php
include 'header2.php';
?>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>
<style>


</style>
</head>

<body>
<?php
$pid=$_GET['pid'];
   $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'privana');
        $query=mysqli_query($connection,"SELECT * FROM listing where pid='$pid'");
       while($data=mysqli_fetch_array($query))
	   {
?>
<h2 style="margin-left:200px;font-family: 'Roboto', sans-serif;"><i class="fas fa-home"></i> PG | FLAT | ROOM |In <?php echo $data['house'];?>   </h2>
<div style="width:750px;height:450px;margin-left:200px; margin-top:40px;">
<img src='projectpics/<?php echo $data['pic'];?>' width="750px" height="450px"  alt="Photo Coming soon">
</div>
<?php

	   
	   ?>
	   <div style="width:700px;height:100px;background-color:rgba(0,0,0,0,0);margin-left:200px;margin-top:20px;color:black;border:2px solid lightgrey;box-shadow:5px 10px 18px grey;font-family: 'Roboto Slab', sans-serif;" >
	<?php
	echo $data['prop_address'];
	echo"<h6>Region:";
	echo $data['region'];
	echo"</h6>";
	echo"<h6>Property type: ";
	echo $data['property_type'];
	echo"</h6>";
	echo"<div style=width:60px;height:20px;background-color:green;color:white;text-align:center;>";
	echo $data['status'];
	echo"</div>";
	echo"<h5 style=position:absolute;left:700px;top:660px;text-decoration:>Price (INR): ";
	echo $data['price'];
	echo"*/m</h5>";
	}
	?>
	
	<div style="width:686px;height:332px;border:1px solid lightgrey">
	<img src="projectpics/nbm.png" width="686px" height="332px">
	
	
	</div>
	<div style="width:686px;height:129px;border:1px solid lightgrey;">
	<img src="projectpics/soci.png" width="700px" height="129px">
	
	
	</div>
	<div style="width:686px;height:129px;border:1px solid lightgrey;margin-top:1px;">
	<h5 style="color:#E52A41;font-family: 'Roboto', sans-serif;margin-left:30px;"><strong>Property Details</strong></h5>
	<div style="width:686px;height:1px;background-color:lightgrey;">
	</br>
	<p style="font-family: 'Roboto', sans-serif;padding:3px"> This <?php echo $data['house'];?> furnished house is available for rent and  it is easily accessible and well connected with all type of traffic centers & marketplaces, the house is full of all type of amenities.</p>
	
	</div>
	
	
	<div style="width:300px;height:490px;position:absolute; left:1000px;top:200px;border:1px solid lightgrey;margin-top:1px;padding:10px;">
	<h4 style="color:#E52A41;font-family: 'Roboto', sans-serif;text-align:center">Schedule Visit</h4>
	<form action=<?php $_SERVER['PHP_SELF']; ?> method="post">
	
	    <input type="text" id="fname" name="firstname" placeholder="Your name.." required style="width:100%;">

    <input type="text" id="ename" name="emname" placeholder="E-mail" onmouseout="return s1();"required style="width:100%;">
	<input type="text" id="mname" name="mname" placeholder="Phone" onmouseout="return s2();" required style="width:100%;">
	<strong>Check-In Date: </strong><input type="date" name="date" style="width:100%;height:30px;margin-left:5px;margin-top:5px">
	</br></br>
	<strong>Address of Property :</strong><textarea id="subject" name="propadd" value="<?php echo $data['prop_address']; ?>" placeholder="Your Property Address" style="width:100%;height:50px" required></textarea>
	<br/></br>
	<button class="success" name="sub" style="width:50%;height:30px;margin-left:60px;">Submit</button>
	
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





$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"INSERT INTO `bookings`(`name`, `email`, `mobile`, `prop_address`, `checkin`) VALUES ('$n1','$n2','$n3','$n4','$n5')");
if($q){
	echo "<p style=position:absolute;margin-top:720px;margin-left:1000px;color:green;background-color:black;>"."ThankYou. Your Request has been successfully sent."."</p>";
}
else{
	echo "<p style=position:absolute;margin-top:720px;margin-left:1000px;color:red;background-color:black;>"."Your Request has not been successfully sent."."</p>";
}
}

?>