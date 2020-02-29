<?php
if (isset($_POST['submit']))
{
$rcno=$_POST['rcno'];
$pid=$_POST['pid'];
$pdate=$_POST['pdate'];
$pcity=$_POST['pcity'];


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

$sql="INSERT INTO pollution(rcno, pid, pdate, pcity)VALUES('$rcno','$pid','$pdate','$pcity')";
if($conn->query($sql)===TRUE)
{
	echo"data inserted";
	header('Refresh:5;URL=pollution.php');

 }
}
?>