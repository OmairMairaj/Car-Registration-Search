<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 400px;
    margin: 200px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
body{
    background-attachment: fixed;
    background-image: linear-gradient(#589930,#9eec6e,rgb(146, 216, 119));
}
a{
    width: 200px;
    text-align: center;
    font-size: 20px;
    font family: sans-serif;
}
.buser{
    text-align: center;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text"  name= "email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit" name="login-btn" class="btn btn-primary btn-block" value= "Login" />
        </div>        
    </form>
    <div class="buser">
    <a class = "btn btn-primary" href="front.php">Go to User Side</a>
    </div>

	
	<?php
	 $conn = mysqli_connect('localhost','root','','final');
	 
	 if(isset($_POST['login-btn'])){
		 $email = $_POST['email'];
		 $password = $_POST['password'];
		 
		 $select = "SELECT * FROM admins WHERE admin_email='$email'";
	
		$run = mysqli_query($conn,$select);
		$row_admin = mysqli_fetch_array($run);
		
		$db_email = $row_admin['admin_email'];
		$db_password = $row_admin['admin_password'];
		
	 if($email == $db_email && $password ==$db_password){
		 echo "<script>window.open('index.php','_self');</script>";
		 $_SESSION['email'] = $db_email;
	 }else{
		 "Wrong username or password";
	 }
 }
	 ?>
</div>
</body>
</html>