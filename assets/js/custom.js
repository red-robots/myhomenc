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

    (function() {
        $slides = $('#carousel .slides .slide');
        $slides.eq(0).addClass("active");
        slider_flag = false;
        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            before: function () {
                if (!slider_flag) {
                    $active_slide = $('#slider').find('ul.slides > li.flex-active-slide');
                    var max_slides = $('#slider').find('ul.slides > li').not('.clone').length;
                    var index = $('#slider').find('ul.slides > li').not('.clone').index($active_slide);
                    if (max_slides > 1) {
                        $slides.removeClass("active");
                        index = (index + 1) === max_slides ? 0 : index + 1;
                        $slides.eq(index).addClass("active");
                    }
                }
            },
            slideshowSpeed: 4000
        });
        $sliderdata = $('#slider').data('flexslider');
        $slides.click(function () {
            var $this = $(this);
            $slides = $('#carousel .slides .slide');
            $slides.removeClass("active");
            $this.addClass("active");
            slider_flag = true;
            $sliderdata.flexAnimate($this.index());
            $sliderdata.pause();
        });
    })();
	
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

    (function() {
        $leaders = $('.template-leadership >.row-2 >.wrapper .leader');
        $leaders.find('.open').click(function () {
            if (window.innerWidth < 600) {
                $(this).parents('.leader').eq(0).find('.info').eq(0).addClass('toggled-on');
            }
        });
        $leaders.find('.close').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (window.innerWidth < 600) {
                $(this).parents('.info').eq(0).removeClass('toggled-on');
            }
        });
    })();

});// END #####################################    END