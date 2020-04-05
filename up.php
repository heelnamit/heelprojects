<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
	$email=$_GET['cd'];
$connection=mysqli_connect('localhost','root','');
  mysqli_select_db($connection,'privana');
  $query=mysqli_query($connection,"update contact set status='read' where email='$email'");
?>
<html>
<head>
	<title>Admin Panel</title>
	   <link rel="icon" href="fiblogo.png" type="image/png">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <style>.container-fluid
	{
		background:white;
		font-family: 'Roboto Slab', sans-serif;
	}
</style>
</head>
<body style="background-color: lightgrey;">
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="projectpics/privana.jpg" width="100px" height="50px" style="margin-top: -15px;"></a>
    </div>
          <a href="#" style="font-family: 'Roboto Slab', sans-serif;font-size: 30px;margin-left: 10px;text-decoration:none;">ADMIN PANEL</a>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php" style="color: black"> <i><span class="glyphicon glyphicon-tasks" style="color: black;font-size: 15px;"></span></i> Admin </a></li>
	   <li><a href="booking.php" style="color:black"><i class="far fa-clipboard"></i> Bookings</a></li>
      <li class="active"><a href="#"><i><span class="glyphicon glyphicon-info-sign" style="color: white;font-size: 15px;"></span></i> Messages <span class="badge badge-light">
        <?php
        $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'privana');
        $query=mysqli_query($connection,"SELECT message FROM contact WHERE status='not read'");
        echo mysqli_num_rows($query);
        ?>
      </span></a></li>
        <li><a href="adminsession.php" style="color: black"> <i><span class="glyphicon glyphicon-off" style="color: black;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
<div style="margin-left: 20px;margin-top: 100px;width: 400px;height: 500px;background-color: #101010;overflow-y: scroll;" >
<?php
 $connection=mysqli_connect('localhost','root','');
  mysqli_select_db($connection,'privana');
  $query=mysqli_query($connection,"select * from contact where status='not read'");
  while ($r=mysqli_fetch_array($query)) {
    echo "<br>"."<div style=opacity:0.1;>";
    echo "<form action=up2.php method=get>";
    echo "<h1 style=color:white;padding-left:40px;>"."<a href=info.php>".$r['name']."</a>"."</h1>";
    echo "<h4 style=color:white;padding-left:40px;>".$r['email']."</h4>";
    
    echo "<input type=hidden name=cd value=";
    echo $r['email'];
    echo ">";
    echo "<input type=submit value=Open style=color:white;font-size:15px;background-color:red;margin-left:275px;>";
    echo "</form>";
    echo "<br>"."</div>";
    echo "<hr style=color:white;>";
  }
  $query1=mysqli_query($connection,"select * from contact where status='read'");
  while ($r1=mysqli_fetch_array($query1)) {
    echo "<br>";
     echo "<form action=up1.php method=get>";
    echo "<h1 style=color:white;padding-left:40px;>";
    ?><a href='up.php?name=<?php echo $r1['email'];?>'>
    	<?php
    	echo $r1['name'];
    	?>
    		
    	</a>
    	<?php
    echo "</h1>";
    echo "<h4 style=color:white;padding-left:40px;>".$r1['email']."</h4>";
    
    echo "<input type=hidden name=cd value=";
    echo $r1['email'];
    echo ">";
     echo "<input type=submit onclick=up1.php value='Mark as unread' style=color:white;font-size:15px;background-color:red;margin-left:25px;>";
    echo "</form>";
     echo "<hr style=color:white;>";
  }
?>
</div>
<div id="inbox" style="width: 850px;margin-left: 450px;background-color: #101010;height: 500px;margin-top: -500px;">
  <?php
  $name=$_GET['name'];
  $query2=mysqli_query($connection,"select * from contact where status='read' and email='$name'");
  while ($r2=mysqli_fetch_array($query2)) {
    echo "<br>";
    echo "<h1 style=color:white;padding-left:40px;>".$r2['name']."</h1>";
    echo "<h4 style=color:white;padding-left:40px;>".$r2['email']."</h4>";
    echo "<h3 style=color:green;padding-left:150px;>"."Message :- "."</h3>"."<h4 style=color:white;padding-left:300px;margin-top:-30px;padding-right:10px;>".$r2['message']."</h4>";
    echo "<br>";
    echo "<hr style=color:white;>";
  }
  ?>
</div>
</body>
</html>

<?php
}
else{
  header('location:alogin.php');
}
?>