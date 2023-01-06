<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$plate = $_POST['plate'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		$user_limit = "select * from users where user_name = '$user_name' limit 1";
		$user_limit_result = mysqli_query($con,$user_limit);
		    
		if(!empty($fullname) && !empty($email) && !empty($mobile) && !empty($address) && !empty($plate) && !empty($user_name) && !empty($password))
		{
			
		    if ($user_limit_result && mysqli_num_rows($user_limit_result) > 0 ) {
		      echo "<script> alert('User name Already used please use another user name');</script>";
		    }
		    else{
				//save to database
				$user_id = random_num(20);
				$query = "insert into users (user_id,fullname,email,mobile,address,plate,user_name,password) values ('$user_id','$fullname','$email','$mobile','$address','$plate','$user_name','$password')";

				mysqli_query($con,$query);
				header("Location: tutorial.php");
				die;
			}

		}else{
			echo "<script> alert('Please fill all the blanks, Try Again')</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>Signup</title>
</head>
<body >

	<div id="bg-sign" style="z-index: -1;">
		<h1>Welcome to PMS!</h1>
		<p style="opacity: 20%; color: #fff;">Parking Monitoring System</p>
	</div>

	<div id="signup-box" style="float: left; margin: -15px 0; width: 35%; height: 0vh; ">	
		<h2>Create your Account</h2>
		<form method="post" style="margin-left: 16%;">
			<br><br>
			<div id="first-div">
				<label>Fullname<br></label><input id="fullname" type="text" name="fullname" value="<?php  echo isset($_POST["fullname"])?$_POST["fullname"]:''; ?>"><br><br>
				<label>Email</label><br><input id="email" type="email" name="email" value="<?php  echo isset($_POST["email"])?$_POST["email"]:''; ?>"><br><br>
				<label>Mobile NO.</label><br><input id="mobile" type="text" name="mobile" value="<?php  echo isset($_POST["mobile"])?$_POST["mobile"]:''; ?>"><br><br>
				<label>Address</label><br><input id="address" type="text" name="address" value="<?php  echo isset($_POST["address"])?$_POST["address"]:''; ?>"><br><br>
				<label>Plate</label><br><input id="plate" type="text" name="plate" value="<?php  echo isset($_POST["plate"])?$_POST["plate"]:''; ?>"><br><br>
				<a href="login.php">Click to Login</a><br><br>
				<input id="next" type="button" value="Next" onclick="nextBTN()"><br><br>
			</div>




			<div id="second-div" style="display : none;">
				<label>Username</label><br><input id="user_name" type="text" name="user_name" value="<?php  echo isset($_POST["user_name"])?$_POST["user_name"]:''; ?>"><br><br>
				<label>Password</label><br><input id="password" type="password" name="password" value="<?php  echo isset($_POST["password"])?$_POST["password"]:''; ?>"><br><br>
				<a href="login.php">Click to Login</a><br><br>
				<input id="signup" type="submit" value="Sign Up"><br><br>
				<input id="back" type="button" value="Back" onclick="backBTN()"><br><br>
			</div>
		</form>
	</div>
</body>
</html>
	
<script type="text/javascript">
	function nextBTN() {
		document.getElementById('first-div').style.display = "none";
		document.getElementById('second-div').style.display = "";
	}
	function backBTN() {
		document.getElementById('first-div').style.display = "";
		document.getElementById('second-div').style.display = "none";
	}
</script>