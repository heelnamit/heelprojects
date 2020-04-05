
<?php
include ('header1.php');

?>


<html>
<head>
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<style>

#main
{
	width:900px;
	height:400px;
	background:url('projectpics/sky.jpg');
	margin-left:250px;
	margin-top:70px;
}
#i1{
	width:250px;
	height:auto;
	position:absolute;
	left:300px;
	top:210px;
}
#i2{
	width:500px;
	height:200px;
	position:absolute;
	left:600px;
	top:220px;
	font-family: 'Libre Baskerville', serif;
	color:red;

	
}
</style>

</head>
<body class="wiggle">

<div id="main">

<div id="i1">
<img src="projectpics/oops.jpg" width="250px" height="auto";>
</div>
<div id="i2">
<h2> <i class="fas fa-exclamation-triangle"></i>OOOOPSSS!! No user Found .</h2>
<p style="font-size:25px;text-align:center; ">Either you are not registered or You have entered Wrong Email or Password. Please Check and Login Again.</p>
<a href="index1.php"style="font-size:25px; text-align:center; text-decoration:none; color:green;" >Login again <i class="fas fa-undo-alt"></i> </a>
</div>


</div>

<?php
include('footer.php');
?>




</body>

</html>