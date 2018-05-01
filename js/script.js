jQuery(document).ready(function(){

	var navOffset = jQuery(".header").offset().top;
	var footerOffset = $('.footer-distributed').offset().top;
	var h = $(window).height();
	var ww = $(window).width();
	var h1 = $('.sidebar-links').height();
	var h2 = $('.sub-links').height();
			
		var height = function(){
			if(ww >= 450){
				if ($('.container-wrap').height() > 455){
				$('.sidebar-left-collapse').height($('.container-wrap').height()+5.81);
				}else{
				$('.sidebar-left-collapse').height(455);		
				}
			}else{
				$('.sidebar-left-collapse').height(500);
			};
			setTimeout(height, 10);
			};
			height();
			
	$(window).resize(function() {
		ww = $(window).width();		
	});
	
	jQuery(".wrap").height(jQuery(".header").outerHeight());	
	jQuery(".header").wrapInner('<div class="inner"></div>')
	
	
	

	jQuery(window).scroll(function(){
		var scrollPos = jQuery(window).scrollTop(); 
	
		if( scrollPos >= navOffset){			
			jQuery(".header").addClass("fixed");
			$('.sidebar-links').addClass('fix');
		} 
		else {
			jQuery(".header").removeClass("fixed");
			$('.sidebar-links').removeClass('fix');

		}
	});
	
		$(window).resize(function() {
			if(ww >= 450){
				if ($('.container-wrap').height() > 455){
				$('.sidebar-left-collapse').attr('style','');
				$('.sidebar-left-collapse').height($('.container-wrap').height()+5.81);
				}else{
				$('.sidebar-left-collapse').attr('style','');
				$('.sidebar-left-collapse').height(455);		
				}
			}else{
				$('.sidebar-left-collapse').attr('style','');
				$('.sidebar-left-collapse').height(h2);
			};
	});
	
	$( '#a' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#a1').show(200);
	});

	$( '#b' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#b1').show(200);
	});

	$( '#c' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#c1').show(200);
	});

	$( '#d' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#d1').show(200);
	});

	$( '#e' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#e1').show(200);
	});
	
	$( '#f' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#f1').show(200);
	});
	
	$( '#g' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#g1').show(200);
	});
	$( '#h' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#h1').show(200);
	});

	$( '#i' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#i1').show(200);
	});
	$( '#j' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#j1').show(200);
	});
	$( '#h' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#h1').show(200);
	});

	$( '#i' ).click(function() {
		var id = $(this).attr("id");
		$(this).removeClass('content-wrap');
		$('.click').removeClass('selected');
		$(this).addClass('selected');
		$('.content-wrap').hide();
		$('#i1').show(200);
	});




});