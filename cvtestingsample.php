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
  

$op="SELECT email,password from users where username='$nam3' ;";
$s="SELECT na,f,m,c,d from xy where name='$nam3'";
$skil="SELECT apt,code,eng,gk from skills where name='$nam3'";
$edu="SELECT school,inter,institute,degree,per,skills from edu where name='$nam3'";
$aptres="SELECT aptres from aptresult where name='$nam3'";
$coderes="SELECT coderes from coderesult where name='$nam3'";
$engres="SELECT engres from engresult where name='$nam3'";
$gkres="SELECT gkres from gkresult where name='$nam3'";


$op1 = $con->query($op);
$s1=$con->query($s);
$skil1=$con->query($skil);
$edu1=$con->query($edu);
$aptres1=$con->query($aptres);
$coderes1=$con->query($coderes);
$engres1=$con->query($engres);
$gkres1=$con->query($gkres);

if ($op1->num_rows > 0) {
    while($row1 = $op1->fetch_assoc()) {
        $email=$row1['email'];
        $password=$row1['password'];
    }
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

if($aptres1->num_rows>0)
{
  while($row5=$aptres1->fetch_assoc())
  {
    $apt=$row5['aptres'];
  }
}


if($coderes1->num_rows>0)
{
  while($row5=$coderes1->fetch_assoc())
  {
    $code=$row5['coderes'];
  }
}


if($engres1->num_rows>0)
{
  while($row5=$engres1->fetch_assoc())
  {
    $eng=$row5['engres'];
  }
}

if($gkres1->num_rows>0)
{
  while($row5=$gkres1->fetch_assoc())
  {
    $gk=$row5['gkres'];
  }
}

$query="INSERT into alldata(name,password,mothername,nationality,contact,dob,fathername,school,inter,institute,degree,percentage,email,aptres,coderes,engres,gkres) values('$nam3','$password','$mothername','$nationality','$contact','$dob','$fathername','$school','$inter','$institute','degree','percentage','$email','$aptres','$coderes','$engres','$gkres')" ;
$xu=mysqli_query($con,$query);
}
mysql_close($con);
?>
