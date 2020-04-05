<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
?>
<html>
<head>
	<title>Admin Panel</title>
	   <link rel="icon" href="projectpics/nest.png" type="image/png">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto|Roboto+Slab" rel="stylesheet">
    
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	
	<style>
	.container-fluid
	{
		background:white;
		font-family: 'Roboto Slab', sans-serif;
	}
	
	
	</style>
</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="projectpics/privana.jpg" width="100px" height="50px" style="margin-top: -15px;"></a>
    </div>
          <a href="#" style="font-family: 'Roboto Slab', sans-serif ;font-size: 30px;margin-left: 10px; text-decoration:none;">ADMIN PANEL</a>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="admin.php" style="color: black;"> <i><span class="glyphicon glyphicon-tasks" style="color: black;font-size: 15px;"></span></i> Admin </a></li>
	     <li class="active"><a href="booking.php" style="color:white"><span><i class="far fa-clipboard"></i></span> Bookings</a></li>
      <li><a href="inbox.php" style="color:black"><i><span class="glyphicon glyphicon-info-sign" style="color: black;font-size: 15px;"></span></i> Messages <span class="badge badge-light">
        <?php
        $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'privana');
        $query=mysqli_query($connection,"SELECT message FROM contact WHERE status='not read'");
        echo mysqli_num_rows($query);
        ?>
      </span></a></li>
        <li><a href="adminsession.php" style="color:black"> <i><span class="glyphicon glyphicon-off" style="color: black;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
<br><br><br><br>

<h1 style="color: black;text-align: center;font-family: 'Roboto Slab', sans-serif ;">Booking Requests</h1>
	<br>
	<div style="font-family: 'Roboto Slab', sans-serif ;">

<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'privana');
$query=mysqli_query($con,"select * from bookings");
echo "<table border=5 style=border-color:black;margin-left:170px;>";
echo "<th style=background-color:#88EA3B;padding:10px;color:white;>"."User's Email"."</th>";
echo "<th style=background-color:#88EA3B;padding:10px;color:white;>"."User's Name"."</th>";
echo "<th style=background-color:#88EA3B;padding:10px;color:white;>"."Contact No."."</th>";
echo "<th style=background-color:#88EA3B;padding:10px;color:white;>"."Check-In Date"."</th>";
echo "<th style=background-color:#88EA3B;padding:10px;color:white;>"."Property Address"."</th>";
while ($result=mysqli_fetch_array($query)) {
	echo "<tr>";
	echo "<td style=width:200px;height:200px;background-color:#88EA3B;padding:50px;color:white;>";
	echo $result['email'];
	echo "</td>";
  echo "<td style=width:200px;height:200px;background-color:#88EA3B;padding:50px;color:white;>";
  echo $result['name'];
  echo "</td>";
  echo "<td style=width:200px;height:200px;background-color:#88EA3B;padding:50px;color:white;>";
  echo $result['mobile'];
  echo "</td>";
  echo "<td style=width:200px;height:200px;background-color:#88EA3B;padding:50px;color:white;>";
  echo $result['checkin'];
  echo "</td>";
   echo "<td style=width:200px;height:200px;background-color:#88EA3B;padding:50px;color:white;>";
   echo $result['prop_address'];
   echo "<br>";
 
  echo "</td>";
	echo "</tr>";
	?>

	</div>
	<?php
}

echo "</table>";
}
else{
  header('location:alogin.php');
}
?>




















</body>
</html>