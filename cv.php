<?php
include_once 'errors.php';
session_start();
$con=new mysqli('localhost','root','root','registration');
if($con->connect_error)
{
  echo "not connected";
} 
else
{
  $nam3=$_SESSION['username'];
  

$op="SELECT email,password from users where username='$nam3'";
$s="SELECT na,f,m,c,d from xy where name='$nam3'";
$skil="SELECT apt,code,eng,gk from skills where name='$nam3'";
$edu="SELECT school,inter,institute,degree,per,skills from edu where name='$nam3'";
$apt="SELECT aptres from aptresult where name='$nam3'";
$code="SELECT coderes from coderesult where name='$nam3'";
$eng="SELECT engres from engresult where name='$nam3'";
$gk="SELECT gkres from gkresult where name='$nam3'";


$s1=$con->query($s);
$resultsp = $con->query($op);
$skil1=$con->query($skil);
$edu1=$con->query($edu);
$a=$con->query($apt);
$c=$con->query($code);
$e=$con->query($eng);
$g=$con->query($gk);

if ($resultsp->num_rows > 0) {
    // output data of each row
    while($row1 = $resultsp->fetch_assoc()) {
      #print_r($row);
        $email=$row1['email'];
        $password=$row1['password'];
    }

} else {
    echo "0 results";
}
if($s1->num_rows>0)
{
  while($row2=$s1->fetch_assoc())
  {

    $nationality=$row2['na'];
    $fathername=$row2['f'];
    $mothername=$row2['m'];
    $contact=$row2['c'];
    $dob=$row2['d'];
  }
}
if($skil1->num_rows>0)
{
  while($row3=$skil1->fetch_assoc())
  {
    $apt=$row3['apt'];
    $code=$row3['code'];
    $eng=$row3['eng'];
    $gk=$row3['gk'];
  }
}
if($edu1->num_rows>0)
{
  while($row4=$edu1->fetch_assoc())
  {
    $school=$row4['school'];
    $inter=$row4['inter'];
    $institute=$row4['institute'];
    $degree=$row4['degree'];
    $per=$row4['per'];
    $skills1=$row4['skills'];

  }
}

if($result1->num_rows>0)
{
  while($row5=$result1->fetch_assoc())
  {
    $rsult=$row5['result'];
  }
}
if($a->num_rows>0)
{
  while($row6=$a->fetch_assoc())
  {
    $aptres=$row6['aptres'];
  }
}

if($c->num_rows>0)
{
  while($row7=$c->fetch_assoc())
  {
    $coderes=$row7['coderes'];
  }
}
if($e->num_rows>0)
{
  while($row8=$e->fetch_assoc())
  {
    $engres=$row8['engres'];
  }
}
if($g->num_rows>0)
{
  while($row9=$g->fetch_assoc())
  {
    $gkres=$row9['gkres'];
  }
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
        <a class="navbar-brand js-scroll-trigger" href="index2.php" style="color:white">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cv.php" style="color:white">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html" style="color:white">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br><br>
    

<div style="color:white;">

  <center>
    <strong><h2>Resume</h2></strong></center>
  
    <p>Name:<?php echo $nam3; ?></p>
<p >Personal</p>
<ul>
  <li>Email:<?php echo $email;?></li>
  <li>Contact:<?php echo $contact;?></li>
  <li>Country:<?php echo $nationality;?></li>
</ul>
<p >Educational Details</p>
<ul>
  <li>School:<?php echo $school;?></li>
  <li>Inter:<?php echo $inter;?></li>
  <li>Institute:<?php echo $institute;?></li>
  <li>Stream:<?php echo $degree;?></li>
  </ul>
  <p>Skills</p>
  <ul><li><?php echo $skills1;?></li></ul>
<p>Test Result</p>
<ul>
  <li>Aptitude:<?php echo $aptres;?></li>
  <li>Coding:<?php echo $coderes;?></li>
  <li>English:<?php echo $engres;?></li>
  <li>General Knowledge:<?php echo $gkres;?></li>
</ul>
  </div>
</body>
</html>

