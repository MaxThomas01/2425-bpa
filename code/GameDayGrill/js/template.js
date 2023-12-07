//[Master Javascript]

//Project:	Morsel Restaurant - Onepage Html Responsive Template
//Version:	1.1
//Last change:	20/06/2017
//Primary use:   Morsel Restaurant - Onepage Html Responsive Template 



jQuery(function ($) {
    "use strict";
 	$(window).load(function () {
        // Animate loader off screen
        $(".loader").fadeOut("slow");
    });
	
	
// slider 
	$('.flexslider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: false,
	});

 /*==========  Tab  ==========*/
    jQuery("ul.food-court").tabs("> .food-dishes");
	
// Datepicker

	$(".date").datepicker();	

// prettyPhoto

	$("a[rel^='alternate']").prettyPhoto();	

});