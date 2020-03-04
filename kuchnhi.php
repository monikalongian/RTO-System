<?php 


$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "rtosystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("connection failed: ".$conn->connect_error);
}
// echo "connect successfully";


 $sql= ("SELECT * FROM pollution WHERE rcno='$rcno'");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
  while ($row = $res->fetch_assoc()) {   
     $rcno = $row['rcno'];
     $pid  = $row['pid'];
     $pdate= $row['pdate'];
     $pcity = $row['pcity'];
     
  
}
}

?>