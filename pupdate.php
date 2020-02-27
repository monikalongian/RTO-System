<?php 
 
$rcno='4521854';
$pid='11111';
$pdate='22-06-2020';
$pcity='blore';







$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "rtosystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	die("connection failed: ".$conn->connect_error);
}
 echo "connect successfully";

$sql="UPDATE pollution SET pid='$pid',pdate='$pdate',pcity='$pcity' WHERE rcno='$rcno'";
if($conn->query($sql)===TRUE)
{
	echo"data Updated";
	header('Refresh: 5; URL=userdata.php'); 
}

//}
?>