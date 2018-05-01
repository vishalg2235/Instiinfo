<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Instiinfo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 minimum-scale=1.0">
		
		
		<link href="../css/sidebar.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<link href="../css/animate.css" rel="stylesheet" media="screen,projection" type="text/css" />
		<link href="../css/slider.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="../css/style.css" rel="stylesheet" media="screen,projection" type="text/css" />
		<link href="../css/menu.css" rel="stylesheet" type="text/css">
		<link href="../engine1/style.css" rel="stylesheet" type="text/css" />
		<link href="../css/search.css" type="text/css" rel="stylesheet" />
		<link href="../css/footer.css" rel="stylesheet">
		
		<script type="text/javascript" src="../engine1/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
		<script type="text/javascript" src="../js/jquery.slidertron-1.0.js"></script>

		 <style>
	      #map-canvas {
	        width:700px;
	        height:540px;
			margin:auto;
	      }
	    </style>
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map-canvas');
	        var mapOptions = {
	          center: new google.maps.LatLng(22.315,87.310),
	          zoom: 15,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
	</head>
	<body>
		<?php include('../header.php')?>
		<div class="jumbotron">
			<div class="container-wrap">
				<div class="container">
					<center><h2>KNOW YOUR CAMPUS</h2></center>
					<br>
					
					<center><iframe width="560" height="315" src="https://www.youtube.com/embed/gQ2AYloadeY" frameborder="0" allowfullscreen> </iframe></center>
					<br><br>
					<p>Hey guys!!! wanna know or find out something about campus?<br>
					IIT KGP is a place of  self sufficiency. You dont need to go anywhere else to get anything.<br>
					The first place you should visit is the market in IIT KGP which is known as the <b>Tech Market</b> where you get all the important stuff to begin your life here.<br>
					Some of the things are listed below:<br>
					<li> LAN wire</li>
					<li> Books</li>
					<li> Lab coat</li>
					<li> Drafter and other stuff related to studies</li>
					<li> Eatable stuff like pani puri which you wont get in canteens</li>
					<li> Cycle repair shop and second hand cycles</li>
					<li> Computer shop</li><br>
					Now comes your <b>academics</b>.<br>
					<li> Main building- The place where you will attend most/all of your theory classes.(consists of F116, F142, S301, S302)</li>
					<li> Nalanda complex(NR and NC)- here you will attend most of your tutorial classes</li>
					<li> JC Bose laboratory complex- for electrical lab, english lab and physics lab.</li>
					<li> Vikramshila- here some sections attend their theory classes.</li>
					<li> CIC- here you attend your PDS lab.</li><br>
					For entertainment, you are provided with Netaji auditorium where you get to see movies for free every week and its located attatched to the main building<br>
					Also most of the big events of IIT KGP are organised in Netaji auditorium or Kalidas auditorium(located in Vikramshila).
					</p>
					<br>
				<h4>1: CAMPUS MAP (GOOGLE MAPS) :-</h4>
					<div id="map-canvas"></div>
				<br>
				<h4>1: CAMPUS MAP (MARKED WITH VARIOUS PLACES) :-</h4>
				<div>
					<img src="images/camp.jpg" style="width:90%; hieght:18%; margin-top:1"></img>
				</div>
				</div>
			</div>
		</div>
				

		<?php include('../sidebar.php')?>

		
		<?php include('../footer.php')?>
		
	</body>
</html>
