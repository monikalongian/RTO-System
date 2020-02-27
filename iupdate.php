<?php 
 
$rcno='4521854';
$ino='425';
$icompany='tata';
$icity='blore';
$idate='11-05-2020';






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

$sql="UPDATE insurance SET ino='$ino',icompany='$icompany',icity='$icity',idate='$idate' WHERE rcno='$rcno'";
if($conn->query($sql)===TRUE)
{
	echo"data Updated";
	header('Refresh: 5; URL=userdata.php'); 
}

//}
?>