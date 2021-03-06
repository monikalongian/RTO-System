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
      <a class="nav-item nav-link" href="vehicle.php">Vehicle </a>
      <a class="nav-item nav-link active" href="#">Insurance <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="pollution.php">Pollution</a>
      <a class="nav-item nav-link" href="fine.php">Traffic Fine</a>
    </div>
  </div>
</nav>
<button type="button" class="btn btn-info" onclick="window.location.href = 'inserti.html';">Add Insurance</button>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RC Number</th>
      <th scope="col">Insurance Number</th>
      <th scope="col">Insurance Company</th>
      <th scope="col">Insurance City</th>
      <th scope="col">Insurance Date</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
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


 $sql= ("Select * FROM insurance");
      $res = $conn->query($sql);

  if ($res->num_rows >0){
    $num=1;
            while ($row = $res->fetch_assoc()) {    
  

 ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $num;$num++;?></th>
      <td><?php echo $row['rcno']; ?></td>
      <td><?php echo $row['ino']; ?></td>
      <td><?php echo $row['icompany']; ?></td>
      <td><?php echo $row['icity']; ?></td>
      <td><?php echo $row['idate']; ?></td>
      
      <td><button type="button" class="btn btn-secondary"onclick="window.location.href = 'insuranceupdate.php?rcno=<?php echo $row['rcno']; ?>';">update</button></td>
      <td><button type="button" class="btn btn-secondary"onclick="window.location.href = 'idelete.php?rcno=<?php echo $row['rcno']; ?>';">delete</button></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>