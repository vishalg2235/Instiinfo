<!DOCTYPE html>
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
		<div class="poster">
			<img src="../../pics/edlab.jpg">
		</div>
		<?php include('../../news.php')?>
			<div class="container">
				<h2 style="padding-bottom:0px;">Physics Sem <span class="arrow">&#9654;</span></h2>
				<h3>Engineering Drawing <span class="arrow">&#9654;</span></h3>
				<ul>
					<li><div> <a href="#" title="click here to expand" id="click1">Notes</a>
						<div class="hidden1" style="display:none">
						<ul>
							<li><a>ED handwritten notes</a><a href="notes\1.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
							<li><a href="video.php">ED video lectures</a></li>
							
						</ul>		
						</div>							
					</div></li>
					<li><div><a href="#" title="click here to expand" id="click2" >Sample Problems</a>
						<div class="hidden2" style="display:none">
							<ul>
								<li><a>ED lab questions</a><a href="ques\1.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								
							</ul>	
						</div>
						</div>
					</li>
					<li><div><a href="#" title="click here to expand" id="click3" >Books</a>
						<div class="hidden3" style="display:none">
							<ul>
								<li><a href="books/book.pdf" download>ED by Shah Rana</a></li>
								<li>ND Bhatt(Available at Tech Market)</li>
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