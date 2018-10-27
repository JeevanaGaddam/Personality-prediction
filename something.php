<?php
session_start();
$con=mysqli_connect('localhost','root','root','registration');

$name=$_SESSION['username'];
$f=$_POST['fathername'];
$m=$_POST['mothername'];
$na=$_POST['nationality'];
$c=$_POST['contact'];
$d=$_POST['dob'];

if(isset($_POST['submit']))
{


	$q="INSERT into xy(name,f,m,na,c,d) values('$name','$f','$m','$na','$c','$d')";
	$w=mysqli_query($con,$q);
 
	
header("Location: education.php");


}
?>
<html>


 <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.max.css">
    

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
    <style >
    #fa{
        padding:20px 30px;
      }
    </style>

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
	



<div class="header">
	<h3 style="color:white">Personal Details</h3>
	<br><br>
</div>
<form action="something.php"  method="POST">
   
	<p><span class="glyphicon glyphicon-asterisk" style="color:white;"></span></p><input type="text" id="fa" name="fathername" style='color:black; 
' ;
   placeholder="Enter Fathername" required>    
	<br><br>
  <input type="text" id="fa" name="mothername" style="color:black;" placeholder="Enter Mothername" required>
	<br><br>
  <input type="text" id="fa" name="nationality" style="color:black;" placeholder="Enter Nationality" required>
			<br><br>
      <input type="text" id="fa" name="contact" style="color:black;" placeholder="Enter Contact number" required>
		<br><br>
	 <input type="text" id="fa" name="dob" style="color:black;" placeholder="dd/mm/yyyy" required>
	<br><br>

<input type="submit"  class="btn" name="submit" >
</form>
</body>
</html>

