<?php
include 'header2.php';
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
a
{
	text-decoration:none;
}
#b1{
	width:1365px;
	background:url('lis.jpg');
	background-size:cover;
	height:500px;
	
}
#b11{
	width:1365px;
	background:rgba(0,0,0,0.4);
	height:500px;
	
}
#contb{
	width:400px;
	height:350px;
	background:rgba(0,0,0,0);
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
	background:rgba(0,0,0,0);
	text-align:center;
	font-family: 'Exo', sans-serif;
	color:black;
	position:absolute;
	left:650px;
	top:100px;
	
}
#prop
{
	width:300px;
	height:30px;
}
#white
{
    width:1365px;
	height:200px;
	background:white;
}


</style>


<script>
function s2()
{
	var x= document.getElementById("mname").value;
	if(isNaN(x))
	{
		alert('Please enter valid mobile number.  ');
	}
}
function s1(mail) 
{
	var q= document.getElementById("ename").value;
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(q))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}




</script>
</head>
<body class="shake">
<div id="b1">
<div id="b11">

<div id="contb">
<h3>Please feel free to write if you have any complaints/queries.</h3>
<p>We care about the satisfaction level of our tenants, caretakers and landlords and will take care of everything related to house, behavior and screening of the tenant.
</br>
Contact us at any time. Our team is available 24x7x365 days and will resolve your concerns instantly.

</p>
</br>
<div class="icos">

<i class="fas fa-phone-square"></i><p><strong>Phone:</strong> 9464849610,7009248677</p>
<i class="fas fa-envelope"></i><p><strong>Email:</strong> namitmahajan11@gmail.com</p>
</div>
</div>

<div id="contb2">
<h2 style="color:white">Write Your Complaint</h2>
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <input type="text" id="fname" name="firstname" placeholder="Your name.." required style="width:50%;margin-left:-10px;">

    <input type="text" id="ename" name="emname" placeholder="E-mail" onmouseout="return s1();"required style="width:50%;float:right;">
	<input type="text" id="mname" name="mname" placeholder="Phone" onmouseout="return s2();" required style="width:50%; float:left;">

    <label for="proptype"  style="color:white; font-size:15px;">Select User Type</label>
    <select id="prop" name="prop">
	<option value="none">Select User Type</option>
      <option value="tenant">Tenant</option>
      <option value="owner">Owner</option>
      <option value="caretaker">CareTaker</option>
    </select><br/>
	<br/>

    <textarea id="subject" name="propadd" placeholder="Your Property Address" style="width:550px;height:60px" required></textarea>
	<br/><br/>
	    <textarea id="subject" name="comp" placeholder="Your complaint here..." style="width:550px;height:60px" required></textarea>
	<br/><br/>
    <input type="submit" value="Submit" name="sub">

  </form>
</div>


</div>
</div>
</div>
<div id="white">


</div>
<?php
include('footer2.php');
?>


</body>
</html>
<?php
if (isset($_POST['sub'])){
$n1=$_POST['firstname'];
$n2=$_POST['emname'];
$n3=$_POST['mname'];
$n4=$_POST['propadd'];
$n5=$_POST['comp'];
$n6=$_POST['prop'];




$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"INSERT INTO `complaints`(`name`, `email`, `mobile`, `prop_address`, `complaint`, `user_type`) VALUES ('$n1','$n2','$n3','$n4','$n5','$n6')");
if($q){
	echo "<p style=position:absolute;margin-top:-250px;margin-left:850px;color:green;background-color:black;>"."Complaint has been successfully submitted."."</p>";
}
else{
	echo "<p style=position:absolute;margin-top:-250px;margin-left:850px;color:red;background-color:black;>"."Complaint has not been successfully submitted."."</p>";
}
}

?>
