+<!DOCTYPE html>
<html lang="en">
	<head>
		<TITLE>Engineering Drawing(ED) LAB instiinfo IITKGP</TITLE>
		<meta charset="UTF-8">
		<meta name="description" content="all the books notes question papers video lectures on engineering drawing(ED) for first year iitkgp at instiinfo.">
		<meta name="keywords" content="iitkgp instiinfo physics semester, iitkgp instiinfo notes, iitkgp instiinfo engineering drawing, iitkgp instiinfo ed,iitkgp instiinfo video, iitkgp instiinfo lecture, first year iitkgp">
		<link rel="icon" type="image/png" href="../../pics/iifavicon.png">
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
				$("#click3").click(function(){
				$(".hidden3").toggle();
				});
			});
		</script>
	</head>
	<body>
	<?php include('../../header.php')?>
	<div class="jumbotron">
		
			<div class="container" style=" width:100%; height:auto;">
				<center><h2>Video Lectures On Engineering Drawing</h2></center><br>
				<h3>cycloid-</h3><br>
				
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/1NImS3E2XAA" frameborder="0" allowfullscreen></iframe></center><br><br>

				<h3>Projection of lines inclined to both planes-</h3><br>
				
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/XWy9FMPVE4s" frameborder="0" allowfullscreen></iframe></center><br><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/f50DndEFSxg" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>Projection of planes-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/7f_W0FftuJ0" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>Projection of plane problems-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/HnjWHta89g0" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>Projection of solids-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/OSISqnclmWA" frameborder="0" allowfullscreen></iframe></center><br><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/SQntJksNGIs" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>section of solids (basic)-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/MQOF-mGDM0U" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>section of solids pyramid-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/85gk8XDDghk" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>section of solids cone-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/o4Hv_riMCqs" frameborder="0" allowfullscreen></iframe></center><br><br>
				<h3>isoometric view-</h3><br>
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/p7Tz17Af-zE" frameborder="0" allowfullscreen></iframe></center><br><br>
				

			</div>
		</div>
		
		<?php include('../../newsm.php')?>
		<?php include('../../footer.php')?>
	</body>
</html>	