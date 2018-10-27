
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

  <body id="page-top" background="header.jpg" >

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
            <?php

            session_start();
$con=new mysqli('localhost','root','root','registration');
$nam3=$_SESSION['username'];

$skil="SELECT apt,code,eng,gk from skills where name='$nam3'";
$apt="SELECT aptres from aptresult where name='$nam3'";
$code="SELECT coderes from coderesult where name='$nam3'";
$eng="SELECT engres from engresult where name='$nam3'";
$gk="SELECT gkres from gkresult where name='$nam3'";

$skil1=$con->query($skil);
$a=$con->query($apt);
$c=$con->query($code);
$e=$con->query($eng);
$g=$con->query($gk);

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

?>
<center>
<div style="color:white;">
  <h2>Result</h2>
<p>Aptitude: <?php echo $aptres;?></p>
<p>Coding:  <?php echo $coderes;?></p>
<p>English:<?php echo $engres;?></p>
<p>General Knowledge:<?php echo $gkres;?></p>
<?php 
 
if($apt=='Low')
{
  if($aptres<=4)
  {
    echo "Your Aptitude skills need to improve";
  }
  if($aptres>4 && $aptres<=7)
  {
    echo "You have good Aptitude skills";
  }
  if($aptres>=8)
  {
    echo "You have Excellent Aptitude skills";
  }
  echo "<br>";
}
if($apt=='Medium')
{
  if($aptres<=4)
  {
    echo "You have poor Aptitude skills";
  }
  if($aptres>4 && $aptres<=7)
  {
    echo "You have good Aptitude skills ";
  }
  if($aptres>=8)
  {
    echo "You have Excellent Aptitude skills";
  }
  echo "<br>";
}
if($apt=='High')
{
if($aptres<=4)
{
  echo "You have very poor Aptitude skills";
}
if($aptres>4 && $aptres<=7)
{
  echo "You have average Aptitude skills";
}
if($aptres>7)
{
  echo "You have good Aptitude skills";
}
echo "<br>";
}
if($code=='Low')
{
  if($coderes<=4)
  {
echo "You need to improve your coding skills";
  }
  if($coderes>4 && $coderes<=7)
  {
echo "You have good coding skills";
  }
  if($coderes>7)
  {
echo "You have Excellent coding skills";
  }
echo "<br>";
}

if($code=='Medium')
{
  if($coderes<=4)
  {
echo "You have poor coding skills";
  }
  if($coderes>4 && $coderes<=7)
  {
echo "You have good coding skills";
  }
  if($coderes>7)
  {
    echo "You have Excellent coding skills";
  }
  echo "<br>";
  }
  if($code=='High')
{
  if($coderes<=4)
  {
echo "You have very poor coding skills";
  }
  if($coderes>4 && $coderes<=7)
  {
echo "You have average coding skills";
  }
  if($coderes>7)
  {
    echo "You have good coding skills";
  }
  echo "<br>";
}
if($eng=='Low')
{
  if($engres<=4)
  {
echo "Your English skills need to improve";
  }
  if($engres>4 && $engres<=7)
  {
echo "You have good English skills";
  }
  if($engres>7)
  {
echo "You have Excellent English skills";
  }
  echo "<br>";
}
if($eng=='Medium')
{
  if($engres<=4)
  {
echo "Your English skills are poor";
  }
  if($engres>4 && $engres<=7)
  {
echo "You have good English skills";
  }
  if($engres>7)
  {
echo "You have Excellent English skills";
  }
  echo "<br>";
}

if($eng=='High')
{
  if($engres<=4)
  {
echo "Your English skills are very poor";
  }
  if($engres>4 && $engres<=7)
  {
echo "Your English skills are poor";
  }
  if($engres>7)
  {
echo "You have good English skills";
  }
  echo "<br>";
}
if($gk=='Low')
{
  if($gkres<=4)
  {
echo "Your general Knowledge skills need to improve";
  }
  if($gkres>4 && $gkres<=7)
  {
echo "You have good General Knowledge skills";
  }
  if($gkres>7)
  {
echo " You have Excellent General Knowledge skills";
  }
  echo "<br>";
}
if($gk=='Medium')
{
  if($gkres<=4)
  {
echo "Your General Knowledge skills are poor";
  }
  if($gkres>4 && $gkres<=7)
  {
echo "You have good General Knowledge skills";
  }
  if($gkres>7)
  {
echo "You have Excellent General Knowledge skills";
  }
  echo "<br>";
}
if($gk=='High')
{
  if($gkres<=4)
  {
echo "Your General Knowledge skills are very poor";
  }
  if($gkres>4 && $gkres<=7)
  {
echo "Your General Knowledge skills are poor";
  }
  if($gkres>7)
  {
echo "You have good General Knowledge skills";
  }
  echo "<br>";
}

 ?>

  </div>        
        </center>  
  </body>
  </html>
