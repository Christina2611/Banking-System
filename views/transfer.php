<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/transfer.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
      // echo "Connection Succesful";

// $sql = "SELECT name, email, balance FROM banking_system";
// error_reporting(0);
$sender = mysqli_query($con,"SELECT *  FROM customer");
$receiver = mysqli_query($con,"SELECT *  FROM customer");
  ?>
  
<style>
/* h1 {
  font-size: 50px !important;
  margin-bottom: 20px;  
  color: grey;  
  font-family :'product sans' !important;
  text-align: center;
} */

textarea {
  color: blacl !important;
  border :3px solid grey !important;
  background-color:grey !important;
  font-weight: bold !important;
}
textarea:focus {
  outline-style: none !important;
  outline: none !important;
}
*:focus {
    outline: none !important;
}
input {
    border :0px !important;
    border-bottom: 2px solid black !important;
    color :black !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    border: none;
    /* border-bottom: 2px solid black;       */
  }
  label {
    color : grey !important;
    font-size: 19px;
  }  
  div.form-group label {
    color: grey !important;
    font-weight: bold;
  }
  div.rating label{
    font-size: 40px !important;
  }
.input-group {
  position: relative;
  display: inline-block;
  width: 100%;
}
.form-box {
  padding: 40px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
}
</style>
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
  
  
<body>
  
  <center>
  <form action="" method="GET" class = "form">

  <div class="container mb-4">
  <h1> <i class="far fa-comment-alt"></i>Transfer Money</h1>

  <div class="col-6 mt-4">
            <div class="form-group"> 
              <label for="sender">SENDER:</label>        
              <select class="sender" name="sender" style="border: 0px; border-bottom: 
              2px solid grey; background-color: whitesmoke !important;
              font-weight: bold !important;color :black !important;
              width:100%" required> 
                <option  selected disabled>SELECT SENDER:</option>
                <?php
                        while($data = mysqli_fetch_array($sender)) {
                            echo "<option value='" . $data['customer_name'] . "'>" . $data['customer_name'] . "</option>";
                        }
                ?> 
              </select> 
            </div>                
          </div>      

          <div class="col-6 mt-4">
            <div class="form-group"> 
              <label for="receiver">RECEIVER:</label>        
              <select class="receiver" name="receiver" style="border: 0px; border-bottom: 
              2px solid grey; background-color: whitesmoke !important;
              font-weight: bold !important;color :black !important;
              width:100%" required> 
                <option  selected disabled>SELECT RECEIVER:</option>
                <?php
                        while($data = mysqli_fetch_array($receiver)) {
                            echo "<option value='" . $data['customer_name'] . "'>" . $data['customer_name'] . "</option>";
                        }
                ?> 
              </select> 
            </div>                
          </div>  

          
      
          <div class="col-6 ">              
            <!-- <div class="input-group"> -->
                <label for="amount">AMOUNT</label>
                <input type="text" name="amount" id="amount" required >
              </div>              
          </div>     
        
          <input style="width:250px" type="submit" id= submit name="submit" value=" Transfer">
  </form>
  </center>
  

        <!-- Optional JavaScript
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


        
  
  <?php
	
  if(isset($_GET['submit']))
  {
  $sender=$_GET['sender'];
  $receiver=$_GET['receiver'];
  $amount=$_GET['amount'];


  if($sender!="" && $receiver!="" && $amount!="")
  {
    //update transaction changes in database
    $query1= "UPDATE customer  SET balance = balance + '$amount' WHERE customer_name = '$receiver' ";
    $data1= mysqli_query($con, $query1);
    $query2= "UPDATE customer SET balance = balance  - '$amount' WHERE customer_name = '$sender' ";
    $data2= mysqli_query($con, $query2);
    
    //insert into transaction_history
        $query1 = "INSERT INTO transfer (sender,receiver,amount) VALUES('$sender','$receiver','$amount')";
                                $res2 = mysqli_query($con,$query1);
    
                                      if($res2){
                              $user1 = "SELECT * FROM customer WHERE  customer_name='$sender' ";
                                        $res=mysqli_query($con,$user1);
                                        $row_count=mysqli_num_rows($res);
                        }
    
        

      if ($data1 && $data2)
      {
      $message="Successful transfer";
                                    echo "<script type='text/javascript'>alert('$message');
                                    </script>";
    }
    else
    {
      $message="Error While Commiting Transaction ";
      echo "<script type='text/javascript'>alert('$message');
                                    </script>";
    }

  }

  else
  {
    $message="All Fields are Mandatory";
    echo "<script type='text/javascript'>alert('$message');
                </script>";
  }
}


?>
</div>	


  




</body>
</html>