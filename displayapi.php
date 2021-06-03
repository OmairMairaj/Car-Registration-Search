<?php

	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'final';
    $conn = mysqli_connect($serverName,$userName,$password,$database);
	$vehicle_reg_num = $_POST['vehicle_reg_num'];
	
	$select = "SELECT * FROM vehicles WHERE vehicle_reg_num ='$vehicle_reg_num' ";
	
	$run = mysqli_query($conn,$select);
	$row_vehicle = mysqli_fetch_all($run,MYSQLI_ASSOC);
	if(count($row_vehicle) == 1){
		echo JSON_encode($row_vehicle[0]);
	}else{
		echo JSON_encode("");
	}
?>
	