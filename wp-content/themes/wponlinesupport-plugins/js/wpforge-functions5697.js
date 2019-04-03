/**
 * We use this file to add different elements to the theme via javascript i.e. the Back to Top code, which
 * appears when a user scrolls and when clicked will scroll the page up to the top for the user.
 *
 * @since WP-Forge 5.5.1.7
 */

jQuery(document).ready(function($) {

	// Add button class to certain buttons in the theme
	jQuery('input[type="submit"]').addClass('tiny radius button');
	
	// Adds flex video to embeded video: http://foundation.zurb.com/docs/components/flex-video.html
	jQuery('iframe[src*="vimeo.com"]').wrap('<div class="flex-video widescreen vimeo" />');
	jQuery('iframe[src*="dailymotion.com"]').wrap('<div class="flex-video widescreen" />');
	jQuery('iframe[src*="youtube.com"]').wrap('<div class="flex-video widescreen" />');
	
	// BackToTop Button: Controls the fade in of the BacktoTop Button
	jQuery(window).load(function() {
		jQuery("#topofpage").hide().removeAttr("href");
		if (jQuery(window).scrollTop() != "0")
			jQuery("#backtotop").fadeIn("slow")
		var scrollDiv = jQuery("#backtotop");
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() == "0")
				jQuery(scrollDiv).fadeOut("slow")
			else
				jQuery(scrollDiv).fadeIn("slow")
		});	
	});	
	// BacktoTop
	jQuery('#backtotop').click(function(){
		jQuery('html, body').animate({
		scrollTop: jQuery('body').offset().top
		}, 1000); // Change this value to control the speed of the scroll back to the top of the page.		   
	});
	
// end loading all functions  
   
   // Custom code if user select `Support` from Wrdpress Contact Form then redirect to support forum
	$(document).on('change', '.wpos-cnct-sales-choose-service', function(){
		var choose_service_val 	= $.trim( $(this).val() );
		var redirect_page 		= 'http://wponlinesupport.com/question/';

		if( choose_service_val != '' && choose_service_val == 'Support' ) {
			$(this).val('');
			window.location.href = redirect_page;
		}
	});

	// Support Ticket
	$(document).on('click', '.support_bs .nav-tabs li a', function(){
		return false;
	});

});