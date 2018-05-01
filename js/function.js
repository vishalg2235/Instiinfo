$(document).ready(function() {

	/* MAIN MENU */
	$('#main-menu > li:has(ul.sub-menu)').addClass('parent');
	$('ul.sub-menu > li:has(ul.sub-menu) > a').addClass('parent');

	
	$('#menu-toggle').click(function() {
		$('#main-menu').slideToggle(300);
		return false;
	});

	$('.ques').click(function(){
		$(this).next().toggle(200);
		
	});
	
	$(window).resize(function() {
		if ($(window).width() > 800) {
			$('#main-menu').removeAttr('style');
		}	
	});

		if ($(window).width() < 600) {
			$('#sub-toggle').click(function() {
				$('#sub-show').slideToggle(300);
				return false;
			});
		};
		
	/*sidebar*/
	
		$(function () {

			var links = $('.sidebar-links > div');
			links.on('click', function () {
				links.removeClass('selected');
				$(this).addClass('selected');

			});
		});

});