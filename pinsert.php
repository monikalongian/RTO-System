<?php

{
$rcno='4521854';
$pid='425';
$pdate='10-5-2020';
$pcity='delhi';




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

$sql="INSERT INTO pollution(rcno,pid,pdate,pcity)VALUES('$rcno','$pid','$pdate','$pcity')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh:5;URL=dashboard.php');

 }
}
?>