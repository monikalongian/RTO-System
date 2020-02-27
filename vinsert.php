<?php

if (isset($_POST['submit']))
{
$rcno=$_POST['rcno'];
$vno=$_POST['vno'];
$vchassis=$_POST['vchassis'];
$vengine=$_POST['vengine'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$email=$_POST['email'];
$vcompany=$_POST['vcompany'];
$vtype=$_POST['vtype'];
$vdate=$_POST['vdate'];


$servername="localhost";
$username="root";
$password="";
$dbname="rtosystem";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die('connection failed:'.$conn->connect_error);
}
 echo "connect successfully";

$sql="INSERT INTO vehicle(rcno,vno,vchassis,vengine,name,fname,address,email,vcompany,vtype,vdate)VALUES('$rcno','$vno','$vchassis','$vengine','$name','$fname','$address','$email','$vcompany','$vtype','$vdate')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh:2;URL=vehicle.php');

 }
}
?>
