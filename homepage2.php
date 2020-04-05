<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="projectpics/nest.png" >
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>

<title> Privana </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="finalpro.css">

<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
<script>
function f1()
{var x= document.getElementById("psw").value;
var y= document.getElementById("pswr").value;
	if(x==y)
	{
	   return (true)
	}
	else
	{
	   alert("Please enter same password in both fields. ");
	   return  (false)
	}
}
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;



</script>
<style>
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
<body class="slideUp">


<div class="row">
  <div class="col-md-4"><a href="#"><img src="projectpics/privana.jpg" width="120px" height="auto"></a></div>
  <div class="col-md-8">
					<a href="one2.php"><i class="fas fa-home"></i> List Your Property</a>
					<a href="comp2.php"><i class="fas fa-exclamation-triangle"></i> Complaint</a>
					<a href="payment2.php"><i class="fas fa-money-bill-alt"></i> Payrent</a>
		
					<div id="hov">
					<a href="#" style="text-decoration:none;"><i class="fas fa-user-circle"></i> My Account</a>
					<div class="sub-menu">
					<li><a href="myprof.php" style="text-decoration:none;">My Profile</a></li>
					<li><a href="chanpsw.php" style="text-decoration:none;">Change Password</a></li>
					<li><a href="delete.php" style="text-decoration:none;">Delete My account</a></li>
					<li><a href="deacti.php" style="text-decoration:none;">Deactivate My account</a></li>
					<li><a href="signout.php" style="text-decoration:none;">LogOut</a></li>
					</div>
					</div>
</div>


<div id="box" style="width:100%;">
<div class="w3-content w3-section" style="width:100%;">
  <img class="mySlides" src="projectpics/1.jpg" width="1360px" height="550px">
  <img class="mySlides" src="projectpics/6.jpg" width="1360px" height="550px" >
  <img class="mySlides" src="projectpics/4.jpg" width="1360px" height="550px">
  <div id="n1">
  <div class="jumbotron">
     <img src="projectpics/jumbo1.png" width="400px" height="150px" style="margin-top:110px;position:absolute;"/>
 </div>
<div id="pid">
<p > Live Hassle Free With No Brokerage</p>
</div>
  <div class="boxco">
	<form class="form-inline" action="search2.php" method="get">
	 <div class="form-group">
 <select id="prop" name="type" style="color:black; width:200px; height:50px; margin-top:-20px;font-family: 'Roboto Slab', sans-serif;">
	<option value="none">Accomodation</option>
      <option value="pg">Pg or shared Rooms</option>
      <option value="single rooms">Single rooms</option>
      <option value="flats">Full Flats</option>
    </select>
</div>
  <div class="form-group">
  
   <input type="text" class="form-control" id="a1" name="name1" placeholder="Enter Your Preffered Location..." style="width:400px; height:50px">
  </div>
  
    <input type="submit" value="Search" class="btn btn-primary" style="width:auto; height:50px; position:absolute; top:5px;" name="s"><i class="fas fa-search"></i>

  </form>

  
</div>
<div id="add" >
<p>----Are You a House Owner ?----</p>
<a href="one.php"><button type="button" class="btn btn-primary">Post a free Add</button></a>

</div>
  </div>
  </div>
  
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); 
}
</script>


</div>
 <h1 style="text-align:center;font-family: 'Roboto Slab', sans-serif "> WHAT WE OFFER ? </h1>
 <p style="text-align:center;font-family: 'Roboto Slab', sans-serif  "> Pg/Furnished Flats/Rooms with Basics Entities </p>

<div id="box1">
	<div class="offer">
	<img src="projectpics/shared.jpg" width="300px" height="auto">
	<h2> Shared Rooms </h2>
	<p>Furnished rooms with Shared accommodation for Boys and girls</p>
	</div>

	<div class="offer">
	<img src="projectpics/single.jpg" width="300px" height="auto">
	<h2> Private Rooms </h2>
	<p>Furnished rooms with private accommodation for Boys and girls</p>
	</div>
	<div class="offer">
	<img src="projectpics/fam.jpg" width="300px" height="auto">

	<h2> Full Houses </h2>
	<p>Semi/fully Furnished houses for Families</p>
	</div>
</div>

<div id="line2">
</div>

<div id="box2" >
<h1 style="text-align:center; font-family: 'Roboto Slab', sans-serif"> House-Hunting Algorithm</h1> </br>
	<div class="algo">
	<img  class="img-circle" src="projectpics/search.png" width="150px" height="auto">
	<h3 style="color:orange">Search</h3>
	<p>Browse through verified & detailed listings with real photos.Search on our interface by price,location or otherwise.Available on your nearest phone,tab or desktop. </p>
	</div>

	<div class="algo">
	<img  class="img-circle" src="projectpics/connect.png" width="150px" height="auto">
	<h3 style="color:orange">Connect</h3>
	<p>Directly connect with the genuine people for free! Ya, you can read it right, no brokers here.find the perfect roomate through social connect and the perfect place to stay through hood views.</P>
	</div>

	<div class="algo">
	<img  class="img-circle" src="projectpics/moveins.png" width="150px" height="auto">
	<h3 style="color:orange">Move In</h3>
	<p>Move In to your preferred listing location with a single click.We love feedback. If you like us, do share with your friends and if you hate us,do let us know.HAPPY HUNTING my dear friend.</P> 
	</div>
</div>
<div id="line3">
</div>
<div id="gallery">
<h1 style= "text-align:center ; font-family: 'Roboto Slab', sans-serif">Trending Locations</h1>
		





<div class="container">
	<div class="row">
		
        <div class="container">
            <div class="row">
        		<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="projectpics/khalclg.jpg"  width="300" height="auto"/><div class="d1"><p class="inside" >Khalsa College Side</p></div></div>
                <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="projectpics/ranjit2.jpg"  width="300" height="auto" /><div class="d1"><p class="inside" >Ranjit Avenue Side</p></div></div>
                <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="projectpics/gndu.jpg" width="300" height="auto" /><div class="d1"><p class="inside" >Guru Nanak Dev University Side</p></div></br></div>
				 </div>
				  <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="projectpics/majitha.jpg"  width="300" height="auto" /><div class="d1"><p class="inside" >Majitha Road Side</p></div></div>
				<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="projectpics/bbk.jpg"  width="300" height="auto" /><div class="d1"><p class="inside" > Near BBK DAV College</p></div></div>
				<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="projectpics/city1.jpg"  width="300" height="auto"/><div class="d1"><p class="inside" >City Center Side</p></div></div>
				</div>
            
           
        </div>
        
        
	</div>
</div>


<div id="why">

<h1 style="text-align:center; font-family: 'Roboto Slab', sans-serif">Why Choose Privana ?</h1> </br>


<div class="container2">
            <div class="row">
        		<div class="col-md-3 col-sm-4 col-xs-6">
				<img src="projectpics/brok.png" width="100px" height="auto">
				<h3>No Brokerage</h3>
				<p>You don't need pay any Brokerage.</p>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
				<img src="projectpics/list.png" width="100px" height="auto">
				<h3>Free Listing</h3>
				<p>No hidden fees charged when you list your property on our website.</p>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
				<img src="projectpics/tenant.png" width="100px" height="auto">
				<h3>Verified Tenant</h3>
				<p>Finding a verified tenant is easy with us.</p>
				</div>
</div>
			            <div class="row">
        		<div class="col-md-3 col-sm-4 col-xs-6">
				<img src="projectpics/sear.png" width="100px" height="auto">
				<h3>Search</h3>
				<p>Find a place that fits all your preferences.</p>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
				<img src="projectpics/visit.png" width="100px" height="auto">
				<h3>Scheduled Visit</h3>
				<p>Finalize a date to visit the property you like.</p>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
				<img src="projectpics/cust.png" width="100px" height="auto">
				<h3>24/7 Customer Support</h3>
				<p>We provide highest levels of service and realibilty.</p>
				</div>
</div>


</div>

<div id="bottom1">
	
            
			<div id="a1"style="width:400px;height:auto;position:absolute;left:10px;top:1150px;">
	
				<h5 style="font-family: 'Roboto Slab', sans-serif; color:white; text-align:center;font-weight:700;">About Privana</h5>
				<p style="font-family: 'Exo', sans-serif; color:white; text-align:center">The company is born out of an idea to make house hunting easy for students,bachelors & bachelorettes and families for whom it is not less than a nightmare to find a perfect abode in a good locality.
				Whatever is your budget, whatever you call home (a bed, a room or an entire house), we have something for you</p>
			</div>
			
			
			<div id="a2" style="position:absolute;left:500px;">
			<br>
			<h5 style="font-family: 'Roboto Slab', sans-serif; color:white;font-weight:700;">Get To Know US</h5>
		
			<div class="anchor" >
			<a href=""> Home </a> </br></br>
			<a href="abtus.php">About Us </a> </br></br>
			<a href="comp.php"> Complaint </a> </br></br>
			<a href="contact.php"> Contact Us</a> </br></br>
	
			</div>
			</div>
				<div id="a3" style="position:absolute;left:700px; top:1145px">
				<div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=amritsar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.crocothemes.net"></a><style>.mapouter{overflow:hidden;;}.gmap_canvas {background:none!important;}</style></div>
				</div>
			</div>
			
			
	
		</div>

		
		<div id="end" style="width:100%;
	height:50px;
	background:rgba(0,0,0,0);
	margin-left:0px;
	position:absolute;
	margin-top:220px;
	text-align:center;
	padding:10px;">
			<p style="margin-left:10px; color:white;font-family: 'Roboto Slab', serif;font-size:10px;"> Copyright © 2018 Privana Pvt. Ltd.</p>

		<a class="hov" href=""><i class="fab fa-facebook-square"></i></a>
		<a class="hov" href=""><i class="fab fa-twitter-square"></i></a>
		<a class="hov" href=""><i class="fab fa-instagram"></i></a>
		
		
		</div>
		
		</div>
















</body>
</html>
