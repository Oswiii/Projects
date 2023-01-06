<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/tutorial.css">
	<title>Tutorial</title>
</head>
<body>
	<script> 
		alert('Registration Success!'); 
	
		function navBlur () {
			var navbar = document.getElementById("navbar");

			this.scrollY > 50 ? navbar.style.filter = "blur(2px)" : navbar.style.filter = "none"; 
			navbar.onmouseover = function(){ navbar.style.filter = "none" };
		}
		window.addEventListener("scroll", navBlur , false);
		
	</script>

	<nav id="navbar">
		<span id="span">Tutorial</span><a href="index.php">log in</a>
	</nav>
	<br><br><br><br><br>
	<section id="tutorial">
		<center>
			<h1>Navigator</h1>
				<img class="nav" src="images/nav.png">
			<div class="details">
				<p>Here you can see all the section of the website and you can go to section that you want by clicking it. On the right it display your full name and log out button if you want to log out.</p>
			</div>
			
			<br><br><br>	
			<h1>Home</h1><br>
			<img class="pic" src="images/home.png">

			<br><br><br><br>	
			<h1>Parking</h1><br>
				<img class="pic" src="images/parkingSec.png"> 		
				<p style="width: 80%; margin: 5% 10%; text-align: center;">First you can see the parking mini map that will guide you, as you can see it has a location icon and below that theres a 'location lot#(number)' this will save as container for lot number that you will park and it will help you to locate wheres your car incase you forgot. Every parking space has number and by looking at the color you can identify whenever some one is parked on the space. Color Green - neans open space, and Color Red - means someone already park on that space.</p>
			<div class="container">
				<img class="pic" src="images/timer.png" style="margin-top: 5%;">
				<img class="pic" src="images/parkout.png" style="margin: 5%;">
			</div>
				<p style="width: 80%; margin: 2% 10%;">After you click the parking open parking space it will pop-up the timer, this timer box has a 'Lot #' to identify what lot number you cliked, theres a timer that will tell you how long you been parked on that parking space, and last is the 'Cost' for you to know how much you must pay for the bills, by cliken 'Park Out' button you can start the timer. If you want to out just click the 'Park Out'. 
				</p>
			<img class="pic" src="images/bills.png" style="margin: 1%;">
				<p style="margin-top: 1%;">After you click 'Park Out' it will display your bills and just click done.</p>	
			<br><br><br><br>	

			<h1>My Account</h1><br>
			<p style="width: 80%">This Section Display your Information, and you can change your infomation by clicking 'Edit', then save the changes by clicking 'Save'. After saving just Refresh the page to see the changes.</p>
			<div class="container">
				<img class="pic" src="images/acc1.png" style="margin-top: 5%;">
				<img class="pic" src="images/acc2.png" style="margin: 5%;">
				<img class="pic" src="images/acc3.png" style="margin-top: 5%;">
				<img class="pic" src="images/acc4.png" style="margin: 5%;">
			</div>
			<h1>Reach & About Us</h1><br>
			<div class="container">
				<img class="pic" src="images/reachus.png">
				<img class="pic" src="images/aboutus.png">
			</div>

			<br><br><br><br>	
			<h1>Meet the Team</h1><br>
				<img class="pic" src="images/team.png">

			<br><br><br><br>	
			<h1>Footer</h1><br>
				<img class="pic" src="images/footer.png" style="width: 80%;">


		</center>
	</section>
	<br><br><br><br>
</body>
</html>