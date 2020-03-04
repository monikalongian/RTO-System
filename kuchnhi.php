<?php 

$rcno = "4512";

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



 $sql= ("SELECT * FROM insurance WHERE rcno='$rcno' ");
      $res = $conn->query($sql);

  if ($res->num_rows >0)
  {
  while ($row = $res->fetch_assoc()) 
  {   
     $rcno = $row['rcno'];
     $ino  = $row['ino'];
     $icompany= $row['icompany'];
     $icity = $row['icity'];
     $idate=$row['idate'];

}
}



 $sql= ("SELECT * FROM vehicle WHERE rcno='$rcno'");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
  while ($row = $res->fetch_assoc()) {   
     $rcno = $row['rcno'];
     $vno = $row['vno'];
     $vchassis = $row['vchassis'];
     $vengine= $row['vengine'];
     $name = $row['name'];
     $fname  = $row['fname'];
     $address= $row['address'];
     $email = $row['email'];
     $vcompany = $row['vcompany'];
     $vtype = $row['vtype'];
     $vdate = $row['vdate'];
     
     
     
}
}
	echo $pid;
	echo "<br>";
	echo $pdate;
	echo "<br>";
	echo $icompany;
	echo "<br>";
	echo $vtype;




?>