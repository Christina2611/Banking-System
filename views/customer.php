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


<nav class="navbar navbar-light bg-light navbar-expand-lg ">
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
  
  

        <!-- Optional JavaScript
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

  
<body>
<main>
  <center>
  <h1>Customer Details</h1>
  
  <div class="table-responsive table-sm">
  <table class="table table-bordered table-hover" style="width:60% ; background-color: white;">
  <thead>
	<tr>
  <td>Sr No.</td>
  <td>Name</td>
  <td>Email Id</td>
  <td>Balance</td> 
  </tr>
  </thead>
<?php
  $server="localhost";
  $username="root";
  $password="";
  $db_name="banking_system";


  $con=mysqli_connect($server,$username,$password,$db_name);

  if(!$con)
      {
          die("Connection failed due to".mysqli_connect_error());
      }
  // 
  
  

  
    $result = mysqli_query($con,"SELECT * FROM `customer`");
    $sr_no = 0;
	
	while($details = mysqli_fetch_array($result)) {
    $sr_no+=1;
	?>
  <tbody>
  <tr>
  <td><?php echo $sr_no;?></td>
  <td><?php echo $details["customer_name"]; ?></td>
  <td><?php echo $details["email_id"]; ?></td>
  <td><?php echo $details["balance"]; ?></td>
	</tr>
  </tbody>
	<?php
	
	}
  ?>
</center>
</table>
</div>
</body>
</html>