<!DOCTYPE html>
<html lang="en">
	<head>
		<TITLE>PDSLAB</TITLE>
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
				$("#click").click(function(){
				$(".hidden").toggle();
				});
				$("#click2").click(function(){
				$(".inner").toggle();
				});
			});
		</script>
	</head>
	<body>
	<?php include('../../header.php')?>
	<div class="jumbotron">
		<div class="poster">
			<img src="../../pics/pdslab.jpg">
		</div>
	<?php include('../../news.php')?>
			<div class="container">
				<h2>Physics Sem <span class="arrow">&#9654;</span></h2>
				<h3>PDS-LAB <span class="arrow">&#9654;</span></h3>
				<ul>
					<li><div> <a href="http://cse.iitkgp.ac.in/~pds/notes/" target="_blank" id="click">Notes</a>
						<div class="hidden" style="display:none">
						</div>							
						</div></li>
					<li><div> <a href="http://cse.iitkgp.ac.in/~abhij/course/lab/PDS/tutorial/" target="_blank" id="click">Sample Problems</a>
						<div class="hidden" style="display:none">
						</div>							
						</div></li>
					<li><div> <a href="#" id="click">Question Papers</a><a href="question.zip" title="Download all the question papers of PDS lab." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a><br>
						<div class="hidden" style="display:none">
						</div>							
						</div></li>
				</ul>
			</div>
		</div>
		
		<?php include('../../newsm.php')?>
		<?php include('../../footer.php')?>
	</body>
</html>	