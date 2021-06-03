<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="update_vehicle.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br></br>
<div class="container">
  <h1>Edit Vehicle Record</h1>
  
  <?php
		$serverName = 'localhost';
		$userName = 'root';
		$password = '';
		$database = 'final';
		$conn = mysqli_connect($serverName,$userName,$password,$database);
	
		if(isset($_GET['update'])){
			$update_id = $_GET['update'];
			
		 $select = "SELECT * FROM vehicles WHERE vehicle_reg_num = '$update_id'";
		 $run = mysqli_query($conn,$select);
		 $row_vehicle = mysqli_fetch_array($run);
		 $vehicle_reg_num = $row_vehicle['vehicle_reg_num'];
		 $vehicle_model = $row_vehicle['vehicle_model'];
		 $vehicle_city = $row_vehicle['vehicle_city'];
		 $vehicle_country = $row_vehicle['vehicle_country'];
		 $vehicle_clearance = $row_vehicle['vehicle_clearance'];
	}
	?>
  
  <form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <label>Car Number:</label>
      <input type="varchar" class="form-control" placeholder="Enter Registration Number" name="vehicle_reg_num">
    </div>
	<div class="form-group">
      <label>Vehicle Model</label>
      <input type="varchar" class="form-control" placeholder="Enter Vehicle Model" name="vehicle_model">
    </div>
    <div class="form-group">
      <label>City</label>
      <input type="varchar" class="form-control" placeholder="Enter City" name="vehicle_city">
    </div>
    <div class="form-group">
      <label>Country</label>
      <input type="varchar" class="form-control" placeholder="Enter Country" name="vehicle_country">
    </div>
	<div class="form-group">
      <label>Clearance</label>
      <input type="varchar" class="form-control" placeholder="Enter Clearance" name="vehicle_clearance">
    </div>
    
	<input type="submit" name="insert-btn" class="btn btn-primary"/>
	<a class = "btn btn-primary" href= "view_vehicle.php">Back</a>


  </form>
  
  <?php
	
		$serverName = 'localhost';
		$userName = 'root';
		$password = '';
		$database = 'final';
		$conn = mysqli_connect($serverName,$userName,$password,$database);
	  
	   if(isset($_POST['update'])){
		  
	   $up_vehicle_model = $row_vehicle['vehicle_model'];
	   $up_vehicle_city = $row_vehicle['vehicle_city'];
	   $up_vehicle_country = $row_vehicle['vehicle_country'];
	   $up_vehicle_clearance = $row_vehicle['vehicle_clearance'];
	   
	   $update = "UPDATE vehicles SET vehicle_model='$up_vehicle_model', vehicle_city='$up_vehicle_city',
	   vehicle_country='$up_vehicle_country',vehicle_clearance='$up_vehicle_clearance' WHERE vehicle_reg_num ='$update_id' ";
	   
	   $run_update = mysqli_query($conn,$update);   
	   if($run_update == true){
		   header("Location: view_vehicle.php");
	   }else{
		   echo "Try Again";
	   }
	   }
  ?>
  
  
</div>

</body>
</html>
