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
  <title>View Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="view_vehicle.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br></br>
<div class="container">
	<div class="head">
	<a class = "btn btn-primary" href= "index.php">Back</a>
	<h1>View Vehicles</h1>

	</div>

  <?php
   $conn = mysqli_connect('localhost','root','','final');
   if(isset($_GET['del'])){
		$del_id = $_GET['del'];
		$delete = "DELETE FROM vehicles WHERE vehicle_reg_num='$del_id'";
		$run_delete = mysqli_query($conn,$delete);
			if($run_delete === true){
				echo '<script>alert("Record has been Deleted!")</script>'; 
			}else{
			echo "Failed, Try Again";
			}
		}
  ?>
  
  
  <table class="table table-light">
    <thead>
      <tr>
        <th>Registration Number</th>
        <th>Model</th>
        <th>City</th>
		<th>Country</th>
		<th>Clearance</th>
		<th>Delete</th>
		<th>Update</th>
      </tr>
    </thead>
    <tbody>
	<?php
	
	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'final';
    $conn = mysqli_connect($serverName,$userName,$password,$database);
	$select = "SELECT * FROM vehicles";
	
	$run = mysqli_query($conn,$select);
	while($row_vehicle = mysqli_fetch_array($run)){
		$vehicle_reg_num = $row_vehicle['vehicle_reg_num'];
		$vehicle_model = $row_vehicle['vehicle_model'];
		$vehicle_city = $row_vehicle['vehicle_city'];
		$vehicle_country = $row_vehicle['vehicle_country'];
		$vehicle_clearance = $row_vehicle['vehicle_clearance'];
		
	?>
      <tr>
        <td><?php echo $vehicle_reg_num;?></td>
		<td><?php echo $vehicle_model;?></td>
		<td><?php echo $vehicle_city;?></td>
		<td><?php echo $vehicle_country;?></td>
		<td><?php echo $vehicle_clearance;?></td>
		<td><a class="btn btn-danger" href="view_vehicle.php?del=<?php echo $vehicle_reg_num;?>"><Delete>
		</a></td>
		<td><a class="btn btn-success" href="update_vehicle.php?del=<?php echo $vehicle_reg_num;?>"><Edit>
		</a></td>
      </tr>
      </tr>
	<?php }?>
    </tbody>
  </table>
</div>

</body>
</html>
