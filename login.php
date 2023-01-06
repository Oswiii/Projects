<?php 

session_start();

	include("connection.php");
	include("functions.php");

	#hide warning
	error_reporting(E_ERROR | E_PARSE);

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

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}

				}
				else{
					echo " <script> alert('wrong email or password!')</script>";
				}
			}
		}
	}


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>Login</title>
</head>
<body style="">

	<div id="bg-div" style="z-index: -1;">
		<h1>Welcome Back!</h1>
	</div>

	<div id="login-box" style=" margin-right: 1.5%; width: 30%; height: 100%; background: #fff; ">
		<h2>Log in your Account</h2>		
		<form method="post" style="margin-left: 10%">
			<br><br>
			<label>Username</label><br>
			<input id="user_name" type="text" name="user_name" value="<?php  echo isset($_POST["user_name"]) ? $_POST["user_name"] : ''; ?>" required><br><br>
			<label>Password</label><br>
			<input id="Password" type="password" name="password" value="<?php  echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" required><br><br>

			<a href="signup.php">Create Account</a><br><br>
			<input id="button" type="submit" value="Login"><br><br>
		</form>
	</div>

</body>
</html>