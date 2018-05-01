<!DOCTYPE html>
<html lang="en">
	<head>
		<TITLE>Physics LAB</TITLE>
		<link rel="icon" type="image/png" href="../../pics/iifavicon.png">
		<meta charset="UTF-8">
		<link rel="stylesheet" media="screen and (max-width:1000px)" href="../../css/style''.css" type="text/css">
		<link rel="stylesheet" media="screen and (min-width:1000px)" href="../../css/new2''.css">
		<script type="text/javascript" src="../../css/jquery.min.js"></script>
		<script type="text/javascript">
			jQuery(window).load(function() {

				$("#nav > li > a").click(function () { // binding onclick
					if ($(this).parent().hasClass('selected')) {
						$("#nav .selected div div").slideUp(100); // hiding popups
						$("#nav .selected").removeClass("selected");
					} else {
						$("#nav .selected div div").slideUp(100); // hiding popups
						$("#nav .selected").removeClass("selected");

						if ($(this).next(".subs").length) {
							$(this).parent().addClass("selected"); // display popup
							$(this).next(".subs").children().slideDown(200);
						}
					}
				}); 

			});
		</script>
		<script>
			$(document).ready(function(){
				$("#click1").click(function(){
				$(".hidden1").toggle();
				});
				$("#click2").click(function(){
				$(".hidden2").toggle();
				});
			});
		</script>
	</head>
	<body>
<?php include('../../header.php')?>
	<div class="jumbotron">
		<div class="poster">
			<img src="../../pics/phylab.jpg">
		</div>
		<?php include('../../news.php')?>
			<div class="container">
				<h2>Physics Sem <span class="arrow">&#9654;</span></h2>
				<h3>Physics-LAB <span class="arrow">&#9654;</span></h3>
					<ul>
						<li>
							<div> <a href="#" title="Click here to expand" id="click1">Experiments</a>
							<div class="hidden1" style="display:none">
								<ul>
									<li><a>Photoelectric Effect</a><a href="exp/Photoelectric.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
									<li><a>Single Slit</a><a href="exp/single slit.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
									<li><a>Newton's Rings</a><a href="exp/newton ring.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>	
									<li><a>Forced oscillation</a><a href="exp/forced osc.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
									<li><a>Waves</a><a href="exp/waves.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
									<li><a>Polarimetry</a><a href="exp/Polarimetry.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>	
									<li><a>Diffraction Grating</a><a href="exp/Diffraction grating.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
									
								</ul>		
							</div>							
							</div>
						</li>
						<li style="display:none">
							<div> <a href="#" title="Click here to expand" id="click2">Lab Exam Papers (Will be uploaded asap.)</a>
							<div class="hidden2" style="display:none">
								<ul>
									<li><a>Mid Sem</a><a href="paper/mid.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
									<li><a>End Sem</a><a href="paper/end.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								</ul>		
							</div>							
							</div>
						</li>
					</ul>
			</div>
		</div>	
		
		<?php include('../../newsm.php')?>
		<?php include('../../footer.php')?>
	</body>
</html>	