/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
    // The slider being synced must be initialized first


    $('#slider').flexslider({
        animation: "fade",
        controlNav: false,
        animationLoop: false,
        slideshow: false
    });

    $sliderdata = $('#slider').data('flexslider');
    $('#carousel .slides .slide').eq(0).addClass("active");
    $('#carousel .slides .slide').click(function(){
        var $this = $(this);
        $slides = $('#carousel .slides .slide');
        $slides.removeClass("active");
        $this.addClass("active");
        $sliderdata.flexAnimate($this.index());
    });
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.colorbox-video').colorbox({
		iframe: true,
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});


	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

    $('#masthead >.wrapper >.column-1 >.hamburger').click(function(){
        if($('#masthead >.wrapper  >.column-1 >.hamburger').hasClass("toggled-on")){
            $('#masthead >.wrapper >.column-2').removeClass("toggled-on");
            $('#masthead >.wrapper  >.column-1 >.hamburger').removeClass("toggled-on");
        } else {
            $('#masthead >.wrapper >.column-2').addClass("toggled-on");
            $('#masthead >.wrapper  >.column-1 >.hamburger').addClass("toggled-on");
        }
    });

});// END #####################################    END