<?php

{
$rcno='4521854';
$ino='425';
$icompany='tata';
$icity='mumbai';
$idate='15-5-2020';




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

$sql="INSERT INTO insurance (rcno,ino,icompany,icity,idate)VALUES('$rcno','$ino','$icompany','$icity','$idate')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh:5;URL=dashboard.php');

 }
}
?>