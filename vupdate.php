<?php 
 
$rcno='4521854';
$vno='425';
$vchassis='01326';
$vengine='521364';
$name='vivek longian';
$fname='seva singh';
$address='hffddghj vghjlkoo';
$email='monikalongian1712@gmail.com';
$vcompany='tata';
$vtype='2';
$vdate='12-5-2020';





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

$sql="UPDATE vehicle SET vno='$vno',vchassis='$vchassis',vengine='$vengine',name='$name',fname='$fname',address='$address',email='$email',vcompany='$vcompany',vtype='$vtype',vdate='$vdate' WHERE rcno='$rcno'";
if($conn->query($sql)===TRUE)
{
	echo"data Updated";
	header('Refresh: 5; URL=userdata.php'); 
}

//}
?>