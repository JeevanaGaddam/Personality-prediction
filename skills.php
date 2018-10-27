<?php
session_start();
$con=mysqli_connect('localhost','root','root','registration');
if($con===false)
{
	echo "<script> alert('not connected')</script>";
}
else
{
	$name=$_SESSION['username'];
$apt=$_POST['aptitude'];
$code=$_POST['coding'];
$eng=$_POST['english'];
$gk=$_POST['gk'];
if(isset($_POST['submit']))
{
	$q="INSERT into skills(name,apt,code,eng,gk) values('$name','$apt','$code','$eng','$gk')" ;
	$v=mysqli_query($con,$q);
	
	header("Location: index2.php");
}

} 
?>

<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personality Prediction</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top" background="header.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index1.php" style="color:white">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html" style="color:white">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	
	<br><br><br>
<center>
	


	<div class="header"><h2 style="color:white">Skills </h2></div><br><br>
	<form action="skills.php" method="POST">

<div class="content">
	<center>
	<h5 style="color:white">Aptitude</h5>
	<select name="aptitude">
		<option>Low</option>
		<option>Medium</option>
		<option>High</option>
	</select>

	<br><br>

	<h5 style="color:white">Coding skills</h5>
	<select name="coding">
		<option>Low</option>
		<option>Medium</option>
		<option>High</option>
	</select>
	<br><br>

	<h5 style="color:white">English</h5>
	<select name="english">
		<option>Low</option>
		<option>Medium</option>
		<option>High</option>
	</select>
	<br><br>


	<h5 style="color:white">General knowledge</h5>
	<select name="gk">
		<option>Low</option>
		<option>Medium</option>
		<option>High</option>
	</select>
	<br><br>

	<input type="submit" name="submit" class ="btn">
</div>

	</form>
</body>
</center>
</html>