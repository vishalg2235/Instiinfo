<!DOCTYPE html>
<html lang="en">
	<head>
		<TITLE>PDS</TITLE>
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
				$("#click3").click(function(){
				$(".hidden3").toggle();
				});
				$("#click4").click(function(){
				$(".hidden4").toggle();
				});
			});
		</script>
	</head>
	<body>
	<?php include('../../header.php')?>
	<div class="jumbotron">
		 <div class="poster">
			<img src="../../pics/pds.jpg">
		</div>
		<?php include('../../news.php')?>
			<div class="container">
				<h2 style="padding-bottom:0px;">Physics Sem <span class="arrow">&#9654;</span></h2>
				<h3> PDS Theory<span class="arrow">&#9654;</span></h3>
				<ul>
					<li><div><a href="#" title="click here to expand" id="click1">Notes</a><a href="notes/all.zip" title="click here to download complete notes" class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a>
						<div class="hidden1" style="display:none">
							<ul>
								<li><a href="#">1.Introduction</a><a href="notes/1.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								
								<li><a href="#">2.Arithmetic Expressions</a><a href="notes/2.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">3.Control Statements</a><a href="notes/3.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">4.Functions</a><a href="notes/4.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>										
								<li><a href="#">5.Array 1</a><a href="notes/5.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">6.Array 2</a><a href="notes/6.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">7.Sorting & Searching</a><a href="notes/7.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">8.Structures</a><a href="notes/8.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">9.Pointers 1</a><a href="notes/9.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">10.Pointers 2</a><a href="notes/10.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">11.Linked list</a><a href="notes/11.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">12.File Handling</a><a href="notes/12.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
							</ul>
						</div>
						</div>
					</li>
					<li><div><a href="#" title="click here to expand" id="click2">Class Test</a><a href="prob/all.zip" title="click here to download all sample prob.s" class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a>
						<div class="hidden2" style="display:none">
					</div>
						</div>
					</li>
					<li><div><a href="#" title="click here to expand" id="click3">Question Papers</a>
						<div class="hidden3" style="display:none">
							<ul>
								<li><a href="#">Mid Sem</a><a href="paper/mid.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
								<li><a href="#">End Sem</a><a href="paper/end.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
							</ul>	
						</div>
						</div>
					</li>
					<li><div><a href="#" title="click here to expand" id="click4">Books</a>
						<div class="hidden4" style="display:none">
							<ul>
								<li><a href="#">ANSI C</a></li>
								<li><a href="#">Let Us C</a></li>
								<li><a href="#">Ritchie Kernighan</a><a href="book/1.zip" title="click here to download." class="downbut" download ><img src="../../pics/button.png" style="width:1em;"></img></a></li>
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