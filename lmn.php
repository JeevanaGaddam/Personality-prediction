<?php
session_start();
$con=mysqli_connect('localhost','root','root','registration');
if($con===false)
{
  echo "not connected";
} 
else
{
  $nam3=$_SESSION['username'];
  $x="SELECT f,m,na,c,d from xyz where n='$nam3'";
  $r1=mysqli_query($con,$x);
  if(!$r1)
  {
    echo 'not retrieved';
  }
  while($row=mysqli_fetch_array($r1))
  {
    $fathername=$row['f'];
    $mothername=$row['m'];
    $nationsality=$row['na'];
    $contact=$row['c'];
    $dob=$row['dob'];
  }
$y="SELECT email,password from users where username='$nam3'";
$r2=mysqli_query($con,$y);
while($q=mysqli_fetch_array($r2))
{
  $email=$q['email'];
  $pwd=$q['password'];

}
$z="SELECT apt,code,eng,gk from skills where name='$nam3'";
$r3=mysqli_query($con,$r3);
while($c=mysqli_fetch_array($r3))
{
$apt=$c['apt'];
$code=$c['code'];
$eng=$c['eng'];
$gk=$c['c'];
}

$r="SELECT school,inter,institute,degree,per,skills from edu where name='$nam3'";
$r4=mysqli_query($con,$r);
while($t=mysqli_fetch_array($r4))
{
  $school=$t['school'];
  $inter=$t['inter'];
  $institute=$t['institute'];
  $degree=$t['degree'];
  $per=$t['per'];
  $skills=$t['skills'];
}

$te="SELECT result from results where name='$nam3'";
$r5=mysqli_query($con,$te);
while($h=mysqli_fetch_array($r5))
{
  $resu=$h['result'];
}

$op="INSERT into final (name,fathername,mothername,nationality,contact,dob,password,email,school,inter,institute,degree,percentage,aptitude,coding,skills,english,gk,testresult) values('$nam3','$fathername','$mothername','nationality','$contact','$dob','$pwd','$email','$school','$inter','$institute','$degree','$per','$apt','$code','$skills','$eng','$gk','$resu')";
$mk=mysqli_query($con,$op);
}
mysql_close($con);
?>
