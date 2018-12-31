$(document).ready(function() {
	$('.load-content img').delay(1000).fadeTo( "slow", 0.7);
	$(window).load(function () {
	
		$('.load-overlay').delay(1500).fadeOut(500, function(){
			$('.container').fadeTo( "slow", 1 );	
		});
	
	});
});