<?php
	session_start();
	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'final';
    $conn = mysqli_connect($serverName,$userName,$password,$database);
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self');</script>";
	}
		
	
	?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Add Vehicle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="add_vehicle.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br></br>
<div class="container">
  <h1>Add New Vehicle</h1>
  <form class="form" action="submit.php" method="post" enctype="multipart/form-data"/>
	<div class="form-group">
      <label class="form-title">Registration Number</label>
      <input type="varchar" class="form-control" placeholder="Enter Registration Number" name="vehicle_reg_num">
    </div>
	<div class="form-group">
      <label class="form-title">Vehicle Model</label>
      <input type="varchar" class="form-control" placeholder="Enter Vehicle Model" name="vehicle_model">
    </div>
    <div class="form-group">
      <label class="form-title">City</label>
      <input type="varchar" class="form-control" placeholder="Enter City" name="vehicle_city">
    </div>
    <div class="form-group">
      <label class="form-title">Country</label>
      <input type="varchar" class="form-control" placeholder="Enter Country" name="vehicle_country">
    </div>
	<div class="form-group">
      <label class="form-title">Clearance</label>
      <input type="varchar" class="form-control" placeholder="Is this vehicle clear? YES or NO" name="vehicle_clearance">
    </div>
    
    <input type="submit" name="insert-btn" class="btn btn-primary"/>

    

    <a class = "btn btn-primary" href= "view_vehicle.php">View Vehicle</a>
    <a class = "btn btn-primary" href= "index.php">Back</a>

  </form>
  
</div>

</body>
</html>
