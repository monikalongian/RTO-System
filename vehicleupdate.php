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
<h3 align="center"><u>UPDATE VEHICLE DETAILS</u></h3>

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


 $sql= ("SELECT * FROM vehicle WHERE rcno='$rcno'");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
  while ($row = $res->fetch_assoc()) {   
     $rcno = $row['rcno'];
     $vno  = $row['vno'];
     $vchassis= $row['vchassis'];
     $vengine = $row['vengine'];
     $name = $row['name'];
     $fname = $row['fname'];
     $address = $row['address'];
     $email = $row['email'];
     $vcompany = $row['vcompany'];
     $vtype= $row['vtype'];
     $vdate= $row['vdate'];
  
}
}
 ?>

<form action="vupdate.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">RC Number</label>
      <input type="text" class="form-control" value="<?php echo $rcno  ?>" name="rcno" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehicle Number</label>
      <input type="text" class="form-control" value="<?php echo $vno  ?>" name="vno">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehicle Chassis Number</label>
      <input type="text" class="form-control" value="<?php echo $vchassis  ?>" name="vchassis">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehiche Engine Number</label>
      <input type="text" class="form-control" value="<?php echo $vengine  ?>" name="vengine">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> name</label>
      <input type="text" class="form-control" value="<?php echo $name  ?>" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">fname</label>
      <input type="text" class="form-control" value="<?php echo $fname ?>" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">address</label>
      <input type="text" class="form-control" value="<?php echo $address  ?>" name="address">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">email</label>
      <input type="email" class="form-control" value="<?php echo $email ?>" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehicle Company</label>
      <input type="text" class="form-control" value="<?php echo $vcompany  ?>" name="vcompany">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehicle Type</label>
      <input type="text" class="form-control" value="<?php echo $vtype ?>" name="vtype">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Vehicle Purchase Date</label>
      <input type="date" class="form-control" value="<?php echo $vdate  ?>" name="vdate">
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