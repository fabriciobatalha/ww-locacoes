/* Close Responsible Menu */

$(".nav-link").on("click", function(){
   $('.navbar-collapse').collapse('hide');
});

if (window.matchMedia("(max-width: 991px)").matches)
{
  	/* Anchor Link */
	
	$('.navbar-nav a[href^="#"]').on('click', function(e){
		e.preventDefault();
		var id = $(this).attr('href'),
		targetOffset = $(id).offset().top;

		$('html, body').animate({ 
			scrollTop: targetOffset - 451
		}, 500);
	});
} 
	else 
	{
		/* Anchor Link */

		$('.navbar-nav a[href^="#"]').on('click', function(e){
			e.preventDefault();
			var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;

			$('html, body').animate({ 
				scrollTop: targetOffset - 99
			}, 500);
		});
	}