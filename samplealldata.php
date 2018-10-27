<?php
include_once 'errors.php';
session_start();
$con=mysqli_connect('localhost','root','root','registration');
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

echo $nam3."<br>";
	echo $email."<br>";
	echo $password."<br>";
	echo $nationality;
	echo "<br>";
	echo $fathername."<br>";
	echo $mothername."<br>";
	echo $contact."<br>";
	echo $dob."<br>";
	echo $apt."<br>";
	echo $code."<br>";
	echo $eng."<br>";
	echo $gk;
	echo "<br>".$school;
echo "<br>".$inter;
echo "<br>".$institute;
echo "<br>".$degree;
echo "<br>".$per;
echo "<br>".$skills1;
echo "<br>".$engres;
echo "<br>".$gkres;
echo "<br>".$aptres;
echo "<br>".$coderes;

$i="INSERT into alldata(name,password,email,fathername,mothername,nationality,contact,dob,school,inter,institute,degree,percentage,apt,code,eng,gk,aptres,coderes,engres,gkres,skills)   values('$nam3','$password','$email','$fathername','$mothername','$nationality','$contact','$dob',$school','$inter','$institute','$degree','$per','$apt','$code','$eng','$gk','$aptres','$coderes','$engres','$gkres','$skills') ";
$insquery=mysqli_query($con,$i);
if($insquery===true)
{
	echo "inserted";
}
else
{
	echo mysql_error();
}

}
mysql_close($con);
?>
