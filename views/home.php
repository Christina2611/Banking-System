<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/home.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
<header>
<nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
<i class="fa fa-bank" style="font-size:24px"></i>
  <a  href="#" class="navbar-brand">Online Banking</a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li clas="navbar-item">
        <a href="home.php" class="nav-link">Home</a>
        </li>
        <li clas="navbar-item">
          <a href="customer.php" class="nav-link">Customers</a>
          </li>
        <li clas="navbar-item">
          <a href="transfer.php" class="nav-link">Tranfer Money</a>
      </li>  
      <li clas="navbar-item">
          <a href="history.php" class="nav-link">Transfer History</a>
      </li>
    </ul>
  </div>
</nav>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="fancy-cards">
  <div class="fancy-card">
    <div class="top">
      <div class="caption">
        <h3 class="title">Send Money</h3>
        <a href="transfer.php" class="button">Transfer </a>
      </div>
    </div>
    <div class="middle"></div>
    <div class="bottom"></div>
  </div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="fancy-cards">
  <div class="fancy-card2">
    <div class="top">
      <div class="caption">
        <h3 class="title">Customers</h3>
        <a href="customer.php" class="button">View </a>
      </div>
    </div>
    <div class="middle"></div>
    <div class="bottom"></div>
  </div>
</div>
</div>
</div>
</header>       <!-- Optional JavaScript
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
  
</body>
  

</html>
