<?php
		$lots = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
?>

<!DOCTYPE html>
<html>
<head>
	<script> 
		if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    	}
	</script>
	<title>Parking Map</title>
</head>
<body>

<!-- Mini Map Section -->
<center>
	<h1 id="parking-map" style="padding-top: 5%;">Parking Map</h1>
			<div id="location" style="position: absolute; margin: 1% 45%;">	
				<div style="content: ''; display: flex; 
					align-items: center; justify-content: center; width: 50px; height: 50px; background: #303030; transform: rotate(45deg); border-top-right-radius: 100%; border-top-left-radius: 100%; border-bottom-left-radius: 100%; margin: -8% 45%;">
					<span style="content: ''; display: block; width: 20px; height: 20px; background: #fff; border-radius: 100%;"></span>
				</div><br>
				Location: Lot# <span id="lot-num">__</span>
			</div>			
						
		<section id="mini-map" style=" width: 66%; height: 60vh; position: relative; margin-left: -63%; margin-top: -6%; ">
				
				<div class="map" style="background: #fff;   border-radius: 10px;">
					<input type="button" name="lot1" id="lot1" value="<?php echo $lots[0]; ?>" onclick="lot1()">
					<input type="button" name="lot2" id="lot2" value="<?php echo $lots[1]; ?>" onclick="lot2()">
					<input type="button" name="lot1" id="lot3" value="<?php echo $lots[2]; ?>" onclick="lot3()">
					<input type="button" name="lot2" id="lot4" value="<?php echo $lots[3]; ?>" onclick="lot4()">
					<input type="button" name="lot5" id="lot5" value="<?php echo $lots[4]; ?>" onclick="lot5()">
					<input type="button" name="lot6" id="lot6" value="<?php echo $lots[5]; ?>" onclick="lot6()">
					<input type="button" name="lot7" id="lot7" value="<?php echo $lots[6]; ?>" onclick="lot7()">
					<input type="button" name="lot8" id="lot8" value="<?php echo $lots[7]; ?>" onclick="lot8()">
					<input type="button" name="lot9" id="lot9" value="<?php echo $lots[8]; ?>" onclick="lot9()">
					<input type="button" name="lot10" id="lot10" value="<?php echo $lots[9]; ?>" onclick="lot10()">
					<input type="button" name="lot11" id="lot11" value="<?php echo $lots[10]; ?>" onclick="lot11()">
					<input type="button" name="lot12" id="lot12" value="<?php echo $lots[11]; ?>" onclick="lot12()">
					<input type="button" name="lot13" id="lot13" value="<?php echo $lots[12]; ?>" onclick="lot13()">
					<input type="button" name="lot14" id="lot14" value="<?php echo $lots[13]; ?>" onclick="lot14()">
					<input type="button" name="lot15" id="lot15" value="<?php echo $lots[14]; ?>" onclick="lot15()">
					<input type="button" name="lot16" id="lot16" value="<?php echo $lots[15]; ?>" onclick="lot16()">
					<input type="button" name="lot17" id="lot17" value="<?php echo $lots[16]; ?>" onclick="lot17()">
					<input type="button" name="lot18" id="lot18" value="<?php echo $lots[17]; ?>" onclick="lot18()">
					<input type="button" name="lot19" id="lot19" value="<?php echo $lots[18]; ?>" onclick="lot19()">
					<input type="button" name="lot20" id="lot20" value="<?php echo $lots[19]; ?>" onclick="lot20()">
					
					<span class="le" style="color: #909090; margin-left: 45%;">left side</span>
					<span class="ri" style="color: #909090; margin-left: 45%;">right side</span>		
					<span class="en">Entry</span>
					<span class="ex">Exit</span>
			</div>

		</section>
	</center>

<div id="SpaceLot1"><?php include 'spaceLot/lot1.php' ?></div>
<div id="SpaceLot2"><?php include 'spaceLot/lot2.php' ?></div>
<div id="SpaceLot3"><?php include 'spaceLot/lot3.php' ?></div>
<div id="SpaceLot4"><?php include 'spaceLot/lot4.php' ?></div>
<div id="SpaceLot5"><?php include 'spaceLot/lot5.php' ?></div>
<div id="SpaceLot6"><?php include 'spaceLot/lot6.php' ?></div>
<div id="SpaceLot7"><?php include 'spaceLot/lot7.php' ?></div>
<div id="SpaceLot8"><?php include 'spaceLot/lot8.php' ?></div>
<div id="SpaceLot9"><?php include 'spaceLot/lot9.php' ?></div>
<div id="SpaceLot10"><?php include 'spaceLot/lot10.php' ?></div>
<div id="SpaceLot11"><?php include 'spaceLot/lot11.php' ?></div>
<div id="SpaceLot12"><?php include 'spaceLot/lot12.php' ?></div>
<div id="SpaceLot13"><?php include 'spaceLot/lot13.php' ?></div>
<div id="SpaceLot14"><?php include 'spaceLot/lot14.php' ?></div>
<div id="SpaceLot15"><?php include 'spaceLot/lot15.php' ?></div>
<div id="SpaceLot16"><?php include 'spaceLot/lot16.php' ?></div>
<div id="SpaceLot17"><?php include 'spaceLot/lot17.php' ?></div>
<div id="SpaceLot18"><?php include 'spaceLot/lot18.php' ?></div>
<div id="SpaceLot19"><?php include 'spaceLot/lot19.php' ?></div>
<div id="SpaceLot20"><?php include 'spaceLot/lot20.php' ?></div>

<script type="text/javascript">

	document.getElementById(lot1).onclick = function(){			
		document.getElementById('SpaceLot1').style.display = "";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot2).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot3).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot4).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot5).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot6).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot7).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot8).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot9).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "";
		document.getElementById('SpaceLot10').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot10).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot10').style.display = "";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot11).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot12).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot13).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot14).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot15).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot16).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot17).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot18).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot19).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "";
		document.getElementById('SpaceLot20').style.display = "none";
	}
	document.getElementById(lot20).onclick = function(){
		document.getElementById('SpaceLot1').style.display = "none";
		document.getElementById('SpaceLot2').style.display = "none";
		document.getElementById('SpaceLot3').style.display = "none";
		document.getElementById('SpaceLot4').style.display = "none";
		document.getElementById('SpaceLot5').style.display = "none";
		document.getElementById('SpaceLot6').style.display = "none";
		document.getElementById('SpaceLot7').style.display = "none";
		document.getElementById('SpaceLot8').style.display = "none";
		document.getElementById('SpaceLot9').style.display = "none";
		document.getElementById('SpaceLot11').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot12').style.display = "none";
		document.getElementById('SpaceLot13').style.display = "none";
		document.getElementById('SpaceLot14').style.display = "none";
		document.getElementById('SpaceLot15').style.display = "none";
		document.getElementById('SpaceLot16').style.display = "none";
		document.getElementById('SpaceLot17').style.display = "none";
		document.getElementById('SpaceLot18').style.display = "none";
		document.getElementById('SpaceLot19').style.display = "none";
		document.getElementById('SpaceLot20').style.display = "";
	}

</script>
</body>
</html>