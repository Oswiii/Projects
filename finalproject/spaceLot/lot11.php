<?php 
	include("./connection.php");
	
	function lot11($con)
	{
		if(isset($_SESSION['user_id']))
		{

			$id = $_SESSION['user_id'];
			$query = "select * from users where user_id = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}
	}

	$user_data = lot11($con);

	
?>
<head><link rel="stylesheet" type="text/css" href="styles/bill.css"></head>
<section id="timer-section" style="display: none;">
		<center>
			<div id="setTimer" style="margin-top: 0;">
			    <button id="exit" onclick="exit()"><span>X</span></button>
			    <h1>Timer</h1>

				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				    <span class="lot">Lot #<input type="number" name="lot" id="lot"  value="0" readonly></span><br>

				    <label>hours | mins | secs </label><br><br>
				    <style>#timer input{ text-align: center; }</time></style>

				    <div id="timer">
				    	<span style="margin-left: 30px;"></span>
				    	<input type="number" readonly name="hours" id="hours" value="00" style="width: 80px; border: none; border-right: 1px solid #303030;">
				    	<input type="number" readonly name="mins" id="mins" value="00" style="width: 80px; border: none; border-right: 1px solid #303030;">
				    	<input type="number" readonly name="seconds" id="seconds" value="00" style="width: 80px; border: none;">	
				    	<br>
				    	<label>cost ₱</label><br>
				    	<input type="number" readonly name="cost" id="cost" value="00.00" style=" padding-left: 20px; width: 100%; border: none;">	
				    	  
				    </div>

			    	<div id="controls"><button id="stop" name="stop" onclick="stop()" style="display: none;">Park Out</button></div>
				</form>				
					<div id="controls"><button id="start" onclick="start()">Park In</button></div>
			</div>
		</center>
	</section>

<script>
//PVMS.PHP JavaSript
var hours = 0;
var mins = 0;
var seconds = 0;
var cost = 0;
		
var timerSection = document.getElementById("timer-section");
	
	function lot11() {

		// body...
		var lot = document.getElementById("lot11").value; 
		document.getElementById("lot").value = lot; 
		timerSection.style.display = ""; 
		  
		//start the timer
		document.getElementById('start').onclick = function(){
		  document.getElementById("start").style.display = "none";
		  document.getElementById("stop").style.display = "";
		  document.getElementById('lot-num').innerHTML = lot;

		  document.getElementById("lot1").disabled = true;
		  document.getElementById("lot2").disabled = true;
		  document.getElementById("lot3").disabled = true;
		  document.getElementById("lot4").disabled = true;
		  document.getElementById("lot5").disabled = true;
		  document.getElementById("lot6").disabled = true;
		  document.getElementById("lot7").disabled = true;
		  document.getElementById("lot8").disabled = true;
		  document.getElementById("lot9").disabled = true;
		  document.getElementById("lot10").disabled = true;
		  document.getElementById("lot11").disabled = false;
		  document.getElementById("lot12").disabled = true;
		  document.getElementById("lot13").disabled = true;
		  document.getElementById("lot14").disabled = true;
		  document.getElementById("lot15").disabled = true;
		  document.getElementById("lot16").disabled = true;
		  document.getElementById("lot17").disabled = true;
		  document.getElementById("lot18").disabled = true;
		  document.getElementById("lot19").disabled = true;
		  document.getElementById("lot20").disabled = true;


		  document.getElementById("lot11").style.background = "#f24f46"; 
		  document.getElementById("timer").style.color = "#000";
		  
		  startTimer();	

		    function startTimer(){

			  time = setTimeout(function(){    
			    seconds++;
			    
			    //seconds
			    if(seconds > 59){
			      seconds = 0;
			      mins++;
			      
			      //cost computation in seconds//
			      cost++;
			      total = (cost*0.333333333).toFixed(2);
			      document.getElementById("cost").value = total; 
			      
			      //minutes
			      if(mins > 59) {
			        mins = 0;
			        hours++;
			      
			 
			        if(hours < 10) {
			          document.getElementById("hours").value = '0'+hours;
			        } 
			        else{
			          document.getElementById("hours").value = hours;
			        }
			          
			      }
			      
			      if(mins < 10){                     
			      	document.getElementById("mins").value = '0'+mins;
			      }
			      else{
			        document.getElementById("mins").value = mins;
			      }
			        
			        
			    }
			      
			    if(seconds < 10){
			      document.getElementById("seconds").value = '0'+seconds;
			    }
			    else{     
			      document.getElementById("seconds").value = seconds;
			    }       
			      startTimer();
			  },1000); /* 1000 <- time duration ( lower number = fast duration ) ( Higher number = slow duration ) */
			}
  
		}
		
		//stop the timer
		document.getElementById('stop').onclick = function(){
		  document.getElementById("timer").style.color = "red";
		  document.getElementById("start").style.display = "";
		  document.getElementById("stop").style.display = "none";
		  
		  clearTimeout(time);
		}		  
		//exit timer
		document.getElementById('exit').onclick = function(){ 	document.getElementById("timer-section").style.display = "none";}

 }

</script>