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
      <a class="nav-item nav-link active" href="#">Vehicle <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="insurance.php">Insurance</a>
      <a class="nav-item nav-link" href="pollution.php">Pollution</a>
      <a class="nav-item nav-link" href="fine.php">Traffic Fine</a>
    </div>
  </div>
</nav>

<button type="button" class="btn btn-info" onclick="window.location.href = 'insertv.html';">Add Vehicle</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RC No</th>
      <th scope="col">Vehicle No</th>
      <th scope="col">Company</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Year</th>
      <th scope="col">Owner Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
      <th scope="col">Full Info</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>564546</td>
      <td>PB08 B2342</td>
      <td>Bajaj</td>
      <td>Car</td>
      <td>2018</td>
      <td>Harpal Singh</td>
      <td>harpal@gmail.com</td>
      <td><button type="button" class="btn btn-secondary">Update</button></td>
      <td><button type="button" class="btn btn-secondary">Delete</button></td>
      <td>Click</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>896733</td>
      <td>PB35 F7654</td>
      <td>Hero</td>
      <td>Bike</td>
      <td>2019</td>
      <td>Aman Singh</td>
      <td>aman@gmail.com</td>
      <td><button type="button" class="btn btn-secondary">Update</button></td>
      <td><button type="button" class="btn btn-secondary">Delete</button></td>
      <td>Click</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>546467</td>
      <td>PB35 D6567</td>
      <td>Skoda</td>
      <td>Car</td>
      <td>2017</td>
      <td>Amrit</td>
      <td>amrit@gmail.com</td>
      <td><button type="button" class="btn btn-secondary">Update</button></td>
      <td><button type="button" class="btn btn-secondary">Delete</button></td>
      <td>Click</td>
    </tr>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>