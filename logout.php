<?php
	session_start();
	$serverName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'final';
    $conn = mysqli_connect($serverName,$userName,$password,$database);
	
		echo "<script>window.open('login.php','_self');</script>";
		
	session_destroy();
	?>