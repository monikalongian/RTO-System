<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="dashboard.php">Home </a>
      <a class="nav-item nav-link active" href="vehicle.php">Vehicle </a>
      <a class="nav-item nav-link" href="insurance.php">Insurance </a>
      <a class="nav-item nav-link" href="pollution.php">Pollution </a>
      <a class="nav-item nav-link" href="#">Traffic Fine <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<h3 align="center"><u>UPDATE INSURANCE DETAILS</u></h3>

 <?php 
$rcno = $_GET['rcno'];

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


 $sql= ("SELECT * FROM insurance WHERE rcno='$rcno'");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
  while ($row = $res->fetch_assoc()) {   
     $rcno = $row['rcno'];
     $ino  = $row['ino'];
     $icompany= $row['icompany'];
     $icity= $row['icity'];
     $idate= $row['idate'];
     }
}
 ?>

<form action="iupdate.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">RC Number</label>
      <input type="text" class="form-control" value="<?php echo $rcno  ?>" name="rcno" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Insurance Number</label>
      <input type="text" class="form-control" value="<?php echo $ino ?>" name="ino">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Insurance Company</label>
      <input type="text" class="form-control" value="<?php echo $icompany  ?>" name="icompany">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Insurance City</label>
      <input type="text" class="form-control" value="<?php echo $icity ?>" name="icity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Insurance Date</label>
      <input type="date" class="form-control" value="<?php echo $idate ?>" name="idate">
    </div>
    
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>