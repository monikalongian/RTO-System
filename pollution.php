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
      <a class="nav-item nav-link" href="insurance.php">Insurance </a>
      <a class="nav-item nav-link active" href="#">Pollution<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="fine.php">Traffic Fine</a>
    </div>
  </div>
</nav>
<button type="button" class="btn btn-info">Add Pollution</button>

<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RC Number</th>
      <th scope="col">Pollution Id</th>
      <th scope="col"> Date</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1180</td>
      <td>1111</td>
      <td>5/5/2020</td>
      <td>delhi</td>

      <td><button type="button" class="btn btn-secondary">update</button></td>
      <td><button type="button" class="btn btn-secondary">delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1181</td>
      <td>1112</td>
      <td>7/2/2013</td>
      <td>kolkata</td>

      <td><button type="button" class="btn btn-secondary">update</button></td>
      <td><button type="button" class="btn btn-secondary">delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1182</td>
      <td>1113</td>
      <td>8/6/2019</td>
      <td>ludhiana</td>

      <td><button type="button" class="btn btn-secondary">update</button></td>
      <td><button type="button" class="btn btn-secondary">delete</button></td>
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