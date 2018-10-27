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
	$school=$_POST['school'];
	$inter=$_POST['inter'];
	$institute=$_POST['institute'];
	$degree=$_POST['degree'];
	$per=$_POST['per'];
	$skills=$_POST['skill'];
	$a="";
	foreach ($skills as $a1 ) {
		$a.=$a1.",";
		# code...
	}
if(isset($_POST['submit']))
	{



		$qu="INSERT into edu(name,school,inter,institute,degree,per,skills) values('$name','$school','$inter','$institute','$degree','$per','$skills') ";
		$v=mysqli_query($con,$qu);
		
header("Location: skills.php");


}


}

?>




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
<style >
    #fa{
        padding:20px 20px;
      }
    </style>

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
	


	<div class="header" style="color:white"><h2>Educational Details</h2></div>
	<br><br>
	<form action="education.php" method="POST">

	<input type="text" name="school" id="fa" style="color:black;" placeholder=" School name" required><br><br>
	<input type="text" name="inter" id="fa" style="color:black;"placeholder="Inter College name" required><br><br>
	<input type="text" name="institute" id="fa" style="color:black;"placeholder="Btech College name" required><br><br>
	<input type="text" placeholder="Enter Stream" name="degree" id="fa" required style="color:black;" ><br><br>
	
<input type="text" name="skill" placeholder="Enter skills" id="fa" required style="color:black;">
<br>
<br>
			<input type="text" name="per" id="fa" required  placeholder="Enter Btech Percentage"><br><br>
			<input type="submit" name="submit" class="btn">
		</form>
	</body>
