<?php 
	session_start();

	include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);
	//----------------------------------

		
				        
?>

<!DOCTYPE html>
<!---------------------------------------- Script to Prevente Ressubmisionn while click refresh -------------------------------------->	
	<script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script> 

	<title>My Account</title>

	<style type="text/css">
		body{
			font-family: cursive;
			font-size: 20px;
			height: 145vh;
		}
/* -------------------------------------- User-Info Div -------------------------------------- */
		#user-info{
			width: 100%;
			height: auto;
		}
		#user-info #main-info{
			width: 90%;
			height: 250px;
			margin: 20px 3%;
			background: #fff;
			padding:  2%;
			border-radius: 20px;
			box-shadow: 1px 1px 10px 1px #d4d4d4;
		}
/* -------------------------------------- Main-Info Div -------------------------------------- */
		#main-info img{
			float: left;
			width: 200px;
			height: 200px;
			border-radius: 100%;
			border: 2px solid #303030;
		}
		#main-info label{
			position: absolute;	
			line-height: 1.8;
			margin: 130px 40px;
			font-weight: bold;
			font-size: 20px;
			letter-spacing: 2px;
		}
		#main-info label span{font-weight: normal;}
/* -------------------------------------- Options Div -------------------------------------- */
		#options{
			width: 400px;
			height: 200px;
			margin-left: 3%;
			padding:  2%;
			border-radius: 10px;
			box-shadow: 1px 1px 10px 1px #d4d4d4;
		}
		#options a{ color: #303030; }
		#settings{
			position: relative;
			width: 58em;
			height: auto;
			margin: -13% 32%;
			padding:  2%;
			border-radius: 10px;
			box-shadow: 1px 1px 10px 1px #d4d4d4;
		}
		#settings #details1, #details2{
			margin: 10px 25%;
			width: 80%;
		}

		#settings label{ letter-spacing: 2px; } 
		#details2 input { background: #98fabb; }
		#settings input{ 
			font-size: 20px; 
			font-family: cursive;
			margin-top: 10px;
			width: auto;
			padding-left: 10px;
			margin-top: 20px;
		}
		#username, #password, #email, #mobile,
		#fullname, #age, #plate, #address
		{
			border: 1px solid #303030;
			border-radius: 5px;
			background: #fff;
		}
		#details2 #save{
			font-size: 20px;
			margin-top: -1%;
			margin-left: 7%; 
			border: 1px solid #303030;
			border-radius: 5px;
			width: 280px;
			padding: 2px 0;
			background: #cfd1d0;
		}
		#details1 #edit{
			margin-top: 2%;
			font-size: 20px;
			margin-left: 7%;
			border-radius: 5px;
			padding: 4px 120px;
			background: #cfd1d0;
			border: 1px solid #303030;
		}
		#details1 #edit:hover, #details2 #save:hover{ background:  #303030; color: #fff; }
		</style>
</head>

<body>
	<?php include 'header.php'; ?>
	<section id="user-info">
		<div id="main-info" >
			<img src="styles/car.png">
			<label > Name: <span><?php echo $user_data['user_name']; ?></span><br>Contact: <span><?php echo $user_data['mobile']; ?></span> </label>
		</div>

		<div id="options">
			<h1>My Account</h1>
			<a href="#acc-setting">Account Settings</a><br>
			<a href="#acc-info">My Info</a>
		</div>

		<form method="POST">
			<div id="settings" >
				<div id="details1">
					<h1 id="acc-setting">Account Settings</h1>
					<label>Username </label><input type="text" readonly id="username" name="user_name" value="<?php echo $user_data['user_name']; ?>"><br>
					<label>Password </label><input type="password" readonly id="password" name="password" value="<?php echo $user_data['password']; ?>" style="margin-left: 6px;"><br>
					<label>Email </label><input type="text" readonly id="email" name="email" value="<?php echo $user_data['email']; ?>" style="margin-left: 43px;"><br>
					<label>Contact </label><input type="number" readonly id="mobile" name="mobile" value="<?php echo $user_data['mobile']; ?>" style="margin-left: 20px;"><br>
					<br><br>
					<h1 id="acc-info">Account Information</h1>
					<label>Full Name </label><input type="text" readonly id="fullname" name="fullname" value="<?php echo $user_data['fullname']; ?>"><br>
					<label>Plate Number </label><input type="text" readonly id="plate" name="plate" value="<?php echo $user_data['plate']; ?>" style="margin-left: 15px; width: 255px;"><br>
					<label>Address </label><input type="text" readonly id="address" name="address" value="<?php echo $user_data['address']; ?>" style="margin-left: 14px;"><br><br>
					<buttom id="edit" onclick="edit()">Edit</buttom>
				</div>	

				<?php
				

				if(isset($_POST['submit']))
				{
					//something was posted
					$fullname = $_POST['fullname'];
					$email = $_POST['email'];
					$mobile = $_POST['mobile'];
					$address = $_POST['address'];
					$plate = $_POST['plate'];
					$user_name = $_POST['user_name'];
					$password = $_POST['password'];

					$sql = "select * from users where user_name='$user_name'";
					$result = mysqli_query($con,$sql);
					
					if($result && mysqli_num_rows($result) > 0)
					{
						
						//save to database
						$query = "update users set fullname='$fullname', email='$email', mobile='$mobile', plate='$plate', address='$address', user_name='$user_name', password='$password'  where user_name='$user_name'";

						mysqli_query($con,$query);
						?>
						<script> 
						var msg = "Save Successfuly!\nPlease Refresh to see the Changes"; 
						alert(msg);
						</script>";
						<?php
		    		}		
				}

				?>

				<div id="details2" style="display: none;">
					<h1 id="acc-setting">Account Settings</h1>
					<label>Username </label><input type="text" id="username" name="username" value="<?php echo $user_data['user_name']; ?>"><br>
					<label>Password </label><input type="password" id="password" name="password" value="<?php echo $user_data['password']; ?>" style="margin-left: 6px;"><br>
					<label>Email </label><input type="text" id="email" name="email" value="<?php echo $user_data['email']; ?>" style="margin-left: 43px;"><br>
					<label>Contact </label><input type="number" id="mobile" name="mobile" value="<?php echo $user_data['mobile']; ?>" style="margin-left: 20px;"><br>
					<br><br>
					<h1 id="acc-info">Account Information</h1>
					<label>Full Name </label><input type="text" id="fullname" name="fullname" value="<?php echo $user_data['fullname']; ?>"><br>
					<label>Plate Number </label><input type="text" id="plate" name="plate" value="<?php echo $user_data['plate']; ?>" style="margin-left: 15px; width: 255px;"><br>
					<label>Address </label><input type="text" id="address" name="address" value="<?php echo $user_data['address']; ?>" style="margin-left: 14px;"><br><br>
					<input type="submit" name="submit" id="save" value="save" onclick="save()">
				</div>	
			</div>

		</form>
	</section>
</body>
</html>


<script type="text/javascript">
	function edit(){
		document.getElementById('details1').style.display = "none";
		document.getElementById('details2').style.display = "";
	}	
</script>
