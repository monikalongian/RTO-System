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
 //echo "connect successfully";

//count vehicle
 $sql= ("SELECT rcno FROM vehicle");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $countv=mysqli_num_rows($res);
   }
//  echo $countv;
  //count pollution
 $sql= ("SELECT rcno FROM pollution");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $countp=mysqli_num_rows($res);
   }
 // echo $countp;

//count insurance
 $sql= ("SELECT rcno FROM insurance");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $counti=mysqli_num_rows($res);
   }
  //echo $counti;






?>