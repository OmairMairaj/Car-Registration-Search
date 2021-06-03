<?php
	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'final';
    $conn = mysqli_connect($serverName,$userName,$password,$database);
	
	if($conn -> connect_errno){
		echo "Failed to connect" . $conn -> connect_error;
		exit();
	}
	if(isset($_POST['insert-btn'])){

		echo "<script>window.open('add_vehicle.php','_self');</script>";


	   
	$vehicle_reg_num = $_POST['vehicle_reg_num'];
	$vehicle_model = $_POST['vehicle_model'];
	$vehicle_city = $_POST['vehicle_city'];
	$vehicle_country = $_POST['vehicle_country'];
	$vehicle_clearance = $_POST['vehicle_clearance'];

	$insert = "INSERT INTO vehicles(vehicle_reg_num,vehicle_model,vehicle_city,vehicle_country,vehicle_clearance) 
	VALUES('$vehicle_reg_num','$vehicle_model','$vehicle_city','$vehicle_country','$vehicle_clearance')";

	$run_insert = mysqli_query($conn,$insert);
	if($run_insert == true){
	   echo "Data has been inserted";
	}else{
	   echo "Try Again";
	}
	}
	
  
  ?>