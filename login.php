<?php 
if (isset($_POST['submit'])) {


$email= $_POST['email'];
$pass=$_POST['pass'];

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

$sql="SELECT pass FROM registration WHERE email='$email'";
$res = $conn->query($sql);
  if ($res->num_rows >0){
            while ($row = $res->fetch_assoc()) { 
            	
            	if ($pass == $row['pass']) {
            		echo "password match";
            		header('Refresh: 2; URL=dashboard.php');
            	} else
            	{
            		echo "wrong password";
            		header('Refresh: 2; URL=login.html');
            	}
}
}
}
?>