$(function() {
	$(window).bind('load', function() {	
		$(function(slideshow){
			$("#fadein > div:gt(0)").hide();
			setInterval(function(){
				$('#fadein > div:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#fadein');}, 
			5000);
		});
	});
});

