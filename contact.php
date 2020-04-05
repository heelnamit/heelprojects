<?php
include'header1.php';
?>



<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="wickedcss.min.css" rel='stylesheet' type='text/css'>
<style>
/*Font-awesome integration*/
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
/*Google font integration*/
@import url('https://fonts.googleapis.com/css?family=Roboto');

#contact{
    background-image:url('projectpics/pay.jpeg');
   	font-family: 'Roboto Slab', serif;
}

#contact .well{
    margin-top:30px;
    border-radius:0;
	background:rgba(0,0,0,0.4);
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}

@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    }
    
}

</style>
</head>
<body class="bounceIn">
<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h1 style="color:red;"><strong>Contact Us</strong><img src="projectpics/contact.png" width="200px"; height="auto"/> </h1>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
       <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=lahori gate,amritsar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.crocothemes.net"></a><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
</div>
      <div class="col-md-5">
          <h3 style="color:red;margin-left:100px; font-size:40px;"><strong>Get in Touch</strong></h3>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		</br>
          <div class="form-group">
            <input type="text" class="form-control" name="n1" value="" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="n2" value="" placeholder="E-mail"required>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="n3" value="" placeholder="Phone"required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="n4" rows="3" placeholder="Message" required></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="s2">
         <i class="fab fa-telegram-plane"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<?php
include('footer.php');
?>
</body>
</html>

<?php
if (isset($_POST['s2'])){
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"privana");
$q=mysqli_query($c,"INSERT INTO `contact`(`name`, `email`, `mobile`, `message` ) VALUES ('$n1','$n2','$n3','$n4')");
if($q){
	echo "<p style=position:absolute;margin-top:-480px;margin-left:870px;color:white;background-color:black;>"."Thankyou for contacting Us."."</p>";
}
else{
	echo "<p style=position:absolute;margin-top:-480px;margin-left:870px;color:red;background-color:black;>"."Your suggestions has not been submitted."."</p>";
}
}


?>