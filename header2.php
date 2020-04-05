
<html>
<head>
<link rel="icon" href="C:\Users\Namit Mahajan\Desktop\projectpics\nest.png" >
<title> Privana </title>
<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">

<style>
.col-md-8 a
{
	text-decoration:none;
    margin-left:60px;
	color:black;
	font-family: 'Exo', sans-serif;
	
	
}
.row
{
	padding-top:10px;
	padding-left:10px;
}
.col-md-8
{
	padding-top:30px;
}
.boxco
{
	position:absolute;
	left:500px;
	top:300px;
	
}
#pid
{
	position:absolute;
	left:340px;
	top:180px;
	font-family: 'Roboto Slab', sans-serif;
	font-size:40px;
	
}

#add{
	position:absolute;
	left:560px;
	top:400px;
	font-family: 'Roboto Slab', sans-serif;
}

.2box
{
	text-align:center;
}
.offer
{
	border: 2px solid rgba(0,160,80,0);;
	width:310px;
	height:370px;
	float:left;
	text-align:center;
	margin-left:20px;
	font-family: 'Roboto Slab', serif;
    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
	
}
#box1
{
	position:absolute;
	left:200px;
}
.algo
{
	border-style:solid;
	width:250px;
	height:340px;
	float:left;
	text-align:center;
	margin-left:70px;
	font-family: 'Roboto Slab', serif;
   
	border: 2px solid rgba(0,160,80,0);
	
	
}
.algo:hover{
	background:	 #99fdff;
	
   -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
}
#box2
{
	position:absolute;
	left:200px;
	top:1180px;
}


.img-responsive {
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    margin-bottom:20px;
	
}

.img-responsive:hover {
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
 
}

#bottom1
{
	width:1380px;
	height:300px;
	background:black;
}

.anchor a
{
	text-decoration:none;
	font-family: 'Roboto Slab', serif;
	
} 
#line
{
	width:1380px;
	height:2px;
	background:blue;
}
#end
{
	width:400px;
	height:50px;
	margin-left:460px;
	text-align:center;
	padding:10px;
}
#end a 
{
	font-size:25px;
	margin-left:10px;
	text-decoration:none;
	color:white;
}
.hov:hover
{
	  transform: translateX(10px) rotate(360deg);
}


* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}





#hov
{
	position:absolute;
	left:500px;
	top:32px;
}

.sub-menu a{
	color:white;
	text-decoration:none;
}

.sub-menu {
	display:none;
	color:white;
	width:250px;
	transition:opacity linear 0.15s;
	box-shadow:0px 2px 3px rgba(0,0,0,0.2);
	background:#FC694F;
	z-index:1;
	position:absolute;
;
}
#hov:hover .sub-menu
{
	display:block;
}

</style>
</head>
<body>

<header>
<div class="row">
  <div class="col-md-4"><a href="homepage2.php"><img src="projectpics/privana.jpg" width="120px" height="auto"></a></div>
  <div class="col-md-8">
					<a href="one2.php" style="text-decoration:none;"><i class="fas fa-home"></i> List Your Property</a>
					
					<a href="comp2.php" style="text-decoration:none;"><i class="fas fa-exclamation-triangle"></i> Complaint</a>
					<a href="payment2.php" style="text-decoration:none;"><i class="fas fa-money-bill-alt"></i> Payrent</a>
					<div id="hov">
					<a href="#" style="text-decoration:none;"><i class="fas fa-user-circle"></i> My Account</a>
					<div class="sub-menu">
					<li style='list-style:none;'><a href="myprof.php" style="text-decoration:none;color:white;">My Profile</a></li>
					<li style='list-style:none;'><a href="chanpsw.php" style="text-decoration:none;color:white;">Change Password</a></li>
					<li style='list-style:none;'><a href="delete.php" style="text-decoration:none;color:white;">Delete My account</a></li>
					<li style='list-style:none;'><a href="deacti.php" style="text-decoration:none;color:white;">Deactivate My account</a></li>
					<li style='list-style:none;'><a href="signout.php" style="text-decoration:none;color:white;">LogOut</a></li>
					</div>
					</div>
</div>

</header>

</body>
</html>












