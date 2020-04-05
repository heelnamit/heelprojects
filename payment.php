<?php
include 'header1.php';
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>
<style>
#top
{
	width:1360px;
	height:200px;
	background:url('projectpics/pay.jpeg');
	
}
#top1
{
	
	height:auto;
	font-family: 'Roboto Slab', sans-serif;
	color:white;
	position:absolute;
	left:400px;
	top:120px;
}
#box1
{
	
	font-family: 'Roboto Slab', sans-serif;
	
}
.line{
	width:600px;
	height:2px;
	background:rgba(0,0,0,0.4);
}
#b1{
	width:50%;
	background:red;
	font-family: 'Libre Baskerville', serif;
	color:white;
}
#box2
{
	position:absolute;
	left:900px;
	top:300px;
	
}
#white{
	width:1360px;
	height:100px;
	background:red;
	position:absolute;
	
	top:730px;
	
}
</style>
</head>
<body class="bounceIn">
<div id="top">
<div id="top1">
<h1 style="font-size:70px;" >Payment Options</h1>
</div>
</div>


<div id="box1">
<h3>1. Pay using NEFT/RTGS/Net Banking</h3>
<p>BENEFICIARY NAME :Privana Pvt. Limited </br>
   ACCOUNT NUMBER :XXXXXXXxXX </br>
    ACCOUNT TYPE : CURRENT ACCOUNT</br>
      BRANCH : Amritsar </br>
     IFSC : 000000
	 </p>
<div class="line"></div>


<h3>2. Pay using Credit / Debit card</h3>
<p>Pay your rent securely through Debit card Or Credit card Or Digital Wallet.</p>

<a href="https://www.instamojo.com/@heel_namit/l36d7c19386694e0dafd66bed7de4f58e/" rel="im-checkout" data-behaviour="remote" data-style="light" data-text="Checkout With Instamojo"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>

<div class="line"></div>

<h3>3. Pay using paytm</h3>
<p>Paytm No: 9464849610</p>

<div class="line"></div>
</div>
<div id="box2">

<img src="projectpics/on.jpeg" width="300px" height="auto">
</br></br>
<img src="projectpics/onli.jpg" width="300px" height="auto">
</div>

<div id="white">

</div>
<footer style="margin-top:560px">
<?php
include('footer.php');

?>
</footer>

</body>
</html>
