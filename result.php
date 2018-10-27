
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
        <a class="navbar-brand js-scroll-trigger" href="index2.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="result.php">Result</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cv.php">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br><br>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Thank you          <?php echo $_SESSION['username']; ?></strong>
            </h1>
            <hr>
          </div>
          
        </div>
      </div>
    </header>
  </body>
  </html>
<?php
session_start();
$con=new mysqli('localhost','root','root','registration');
if($con->connect_error)
{
  echo "not connected";
} 
else
{
  $nam3=$_SESSION['username'];
  

$op="SELECT email,password from users where username='$nam3';";
$s="SELECT na,f,m,c,d from xy where name='$nam3'";
$skil="SELECT apt,code,eng,gk from skills where name='$nam3'";
$edu="SELECT school,inter,institute,degree,per,skills from edu where name='$nam3'";
$apt="SELECT aptres from aptresult where name='$nam3'";
$code="SELECT coderes from coderesult where name='$nam3'";
$eng="SELECT engres from engresult where name='$nam3'";
$gk="SELECT gkres from gkresult where name='$nam3'";


$op1 = $con->query($op);
$s1=$con->query($s);
$skil1=$con->query($skil);
$edu1=$con->query($edu);
$apt1=$con->query($apt);
$code1=$con->query($code);
$eng1=$con->query($eng);
$gk1=$con->query($gk);

if ($op1->num_rows > 0) {
    while($row1 = $op1->fetch_assoc()) {
        $email=$row1['email'];
        $password=$row1['password'];
    }
}
else
{
  echo "0 results found";
}

if($s1->num_rows>0)
{
  while($row2=$s1->fetch_assoc())
  {
    print_r($ro);

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
    $skills=$row4['skills'];

  }
}

if($apt1->num_rows>0)
{
  while($row5=$apt1->fetch_assoc())
  {
    $aptres=$row5['aptres'];
  }
}


if($code1->num_rows>0)
{
  while($row6=$code1->fetch_assoc())
  {
    $coderes=$row6['coderes'];
  }
}


if($eng1->num_rows>0)
{
  while($row7=$eng1->fetch_assoc())
  {
    $engres=$row7['engres'];
  }
}

if($gk1->num_rows>0)
{
  while($row8=$gk1->fetch_assoc())
  {
    $gkres=$row8['gkres'];
  }
}


echo $nam3 , $email, $fathername,$mothername,$skills,$aptres;





$query="INSERT into alldata(name,password,mothername,nationality,contact,dob,fathername,school,inter,institute,degree,percentage,email,aptres,coderes,engres,gkres,skills,apt,code,eng,gk) values('$nam3','$password','$mothername','$nationality','$contact','$dob','$fathername','$school','$inter','$institute','$degree','$per','$email','$aptres','$coderes','$engres','$gkres','$skills','$apt','$code','$eng','$gk')" ;
$xu=mysqli_query($con,$query);
if($xu===true)
{
  echo "<script>alert('inserted')</script>";
}
}
mysql_close($con);
?>

