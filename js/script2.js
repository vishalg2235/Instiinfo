$(document).ready(function() {

	animationHover('.header_resize', 'flip');
	
	function animateHover(element, animation){
		element = $(element);
		element.hover(
			function() {
				element.addClass('animated' + animation);
			},
			function() {
				window.setTimeout( function(){
					element.removeClass('animated' + animation);
				}, 5000);
			});		
	};
	
});