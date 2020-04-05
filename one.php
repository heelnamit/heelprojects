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

#b1{
	width:1365px;
	background:url('lis.jpg');
	background-size:cover;
	height:600px;
	
}
#b11{
	width:1365px;
	background:rgba(0,0,0,0.4);
	height:600px;
	
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
	width:550px;
	height:450px;
	background:rgba(0,0,0,0);
	text-align:center;
	font-family: 'Exo', sans-serif;
	color:black;
	position:absolute;
	left:700px;
	top:100px;
	
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

<?php
@ob_start();

if(isset($_SESSION['em']))
{
	session_start();
include 'header1.php';
?>

<body class="bounceIn">
<div id="b1">
<div id="b11">

<div id="contb">
<h3>List Your property And Earn More</h3>
<p>Have a property to let out? Become a partner with Privana and make your property a full time asset with increased rental yield. Enjoy our range of features hassle-free like property management, No brokerage and assured steady income.</p>
</br>
<div class="icos">
<i class="fas fa-address-card"></i><p><strong>Address:</strong> Hno.381/9 I/s Lahori gate, Amritsar,143001.</p>
<i class="fas fa-phone-square"></i><p><strong>Phone:</strong> 9464849610,7009248677</p>
<i class="fas fa-envelope"></i><p><strong>Email:</strong> namitmahajan11@gmail.com</p>
</div>
</div>

<div id="contb2">
<h2 style="color:white">List your House</h2>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <input type="text" id="ename" name="emname" placeholder="E-mail" onmouseout="return s1();"required>
	<input type="text" id="mname" name="mname" placeholder="Phone" onmouseout="return s2();" required>

    <label for="proptype"  style="color:white; font-size:15px;">Select Property Type</label>
    <select id="prop" name="prop">
      <option value="pg">Pg</option>
      <option value="flats">Flats</option>
      <option value="full">Full Houses</option>
    </select>
	<label for="proptype"  style="color:white; font-size:15px;">Select Region</label>
    <select id="region" name="region">
      <option value="GNDU side">GNDU side</option>
      <option value="Khalsa college side">Khalsa college side</option>
      <option value="Majitha road side">Majitha road side</option>
	   <option value="BBK DAV side">BBK DAV side</option>
	    <option value="city side">city side</option>
		 <option value="Ranjit avenue side">Ranjit avenue side</option>
	  
    </select><br/>
	<br/>
	<br>
	 <label for="proptype"  style="color:white; font-size:15px;position:absolute;margin-left:130px;margin-top:-30px;">Photo: </label>
 <input type="file" name="file" style='position:absolute;margin-left:180px;margin-top:-30px;color:white;'>
    <textarea id="subject" name="propadd" placeholder="Your Property Address" style="width:550px;height:60px" required></textarea>
	<br/><br/>
    <input type="submit" value="Submit" name="sub">

  </form>
</div>


</div>
</div>
</div>
<div id="white">


</div>


</body>
</html>
<?php
if (isset($_POST['sub'])){
$n1=$_POST['firstname'];
$n2=$_POST['emname'];
$n3=$_POST['mname'];
$n4=$_POST['propadd'];
$n5=$_POST['prop'];
$n6=$_POST['region'];
$file=$_FILES['file']['name'];
$n7=random_int(10,200);


$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
move_uploaded_file($_FILES['file']['tmp_name'],'projectpics/'.$_FILES['file']['name']);
$q=mysqli_query($c,"INSERT INTO `listing`(`name`,`mobile`, `prop_address`, `property_type`,`pic`,`region`,`email`,`pid`) VALUES ('$n1','$n3','$n4','$n5','$file','$n6','$n2','$n7')");
if($q){
	echo "<p style=position:absolute;margin-top:-280px;margin-left:870px;color:white;background-color:black;>"."Thankyou for listing Your Property."."</p>";
}
else{
	echo "<p style=position:absolute;margin-top:-250px;margin-left:850px;color:red;background-color:black;>"."Data is not submitted successfully."."</p>";
}
}
}
else{
	include 'header1.php';
?>
<body class="bounceIn">
<div id="b1">
<div id="b11">

<div id="contb">
<h3>List Your property And Earn More</h3>
<p>Have a property to let out? Become a partner with Privana and make your property a full time asset with increased rental yield. Enjoy our range of features hassle-free like property management, No brokerage and assured steady income.</p>
</br>
<div class="icos">
<i class="fas fa-address-card"></i><p><strong>Address:</strong> Hno.381/9 I/s Lahori gate, Amritsar,143001.</p>
<i class="fas fa-phone-square"></i><p><strong>Phone:</strong> 9464849610,7009248677</p>
<i class="fas fa-envelope"></i><p><strong>Email:</strong> namitmahajan11@gmail.com</p>
</div>
</div>

<div id="contb2">
<h2 style="color:white">List your House</h2>
  <form action="index1.php" method="post" enctype="multipart/form-data">

    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <input type="text" id="ename" name="emname" placeholder="E-mail" onmouseout="return s1();"required>
	<input type="text" id="mname" name="mname" placeholder="Phone" onmouseout="return s2();" required>

    <label for="proptype"  style="color:white; font-size:15px;">Select Property Type</label>
    <select id="prop" name="prop">
      <option value="pg">Pg</option>
      <option value="flats">Flats</option>
      <option value="full">Full Houses</option>
    </select>
	<label for="proptype"  style="color:white; font-size:15px;">Select Region</label>
    <select id="region" name="region">
      <option value="GNDU side">GNDU side</option>
      <option value="Khalsa college side">Khalsa college side</option>
      <option value="Majitha road side">Majitha road side</option>
	   <option value="BBK DAV side">BBK DAV side</option>
	    <option value="city side">city side</option>
		 <option value="Ranjit avenue side">Ranjit avenue side</option>
	  
    </select><br/>
	<br/>
	<br>
	 <label for="proptype"  style="color:white; font-size:15px;position:absolute;margin-left:130px;margin-top:-30px;">Photo: </label>
 <input type="file" name="file" style='position:absolute;margin-left:180px;margin-top:-30px;color:white;'>
    <textarea id="subject" name="propadd" placeholder="Your Property Address" style="width:550px;height:60px" required></textarea>
	<br/><br/>
    <input type="submit" value="Submit" name="sub">

  </form>
</div>


</div>
</div>
</div>

<?php
include('footer.php');
?>

</body>
</html>

<?php
}
?>