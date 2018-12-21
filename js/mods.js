$(document).ready(function() {
	$('.load-content img').fadeTo( "slow", 0.7, function(){
		$('.load-overlay').delay(1500).fadeOut(500, function(){
			$('.container').fadeTo( "slow", 1 );	
		});
	});	
});