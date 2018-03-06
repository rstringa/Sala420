//LOADER
jQuery(document).ready(function($) {
    //you can now use $ as your jQuery object.
    var body = $('body');
	var $alto_menu_mobile = 100;
	var $alto_menu_desktop = 90;
	// Para que no haga un efecto de parpadeo mientras carga
	if (document.getElementById("slider")) {
    	$('#slider').removeClass('mascara');
	}
	$('html, body').stop().animate({
                'scrollTop': 0
            }, 1000, 'swing');
    /***************************************************/
    /* LOADER */
    /****************************************************/
    $(window).on("load", function() {
        "use strict";
      //  if ($(".loader").lenght) {
            $(".loader").fadeOut(800)
      //  };
    });
    /***************************************************/
    /* MUESTRA DE MENU SEGUN VIEWPORT */
    /****************************************************/
    if (($(window).width() <= 991)) {
        menu_mobile();
    } else {
        menu_desktop();
    }
    $(window).resize(function() {

        if (($(window).width() <= 991)) {
            menu_mobile();
        } else {
            menu_desktop();
        }

    })
    /***************************************************/
    /* MENU DESKTOP SCROLL */
    /****************************************************/
	
	function menu_desktop() {
      
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('.menu_desktop a[href^="#"]').on('click', function(e) {
            e.preventDefault();

            $(document).off("scroll");

            // Añadir la clase active
            $('.menu_desktop a').each(function() {
                $(this).removeClass('active');
            })
            $(this).addClass('active');
            //      

            var target = this.hash,
                menu = target;
            $target = $(target);


            //

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - ($alto_menu_desktop - 2 )
            }, 1000, 'swing', function() {
                // window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });

        function onScroll(event) {
         var scrollPos = $(document).scrollTop();
            $('.menu_desktop a').each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if ( (refElement.position().top <= (scrollPos + $alto_menu_desktop)) && ( (refElement.position().top + refElement.outerHeight(true)) > scrollPos) ) {
                    $('.menu_desktop a').removeClass("active");
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            });
        }

        /* Solo el logo va hacia arriba de todo */
       $('.js-logo-desktop').on('click', function() {

            $('html, body').stop().animate({
                'scrollTop': 0
            }, 1000, 'swing');

        });
		/* Si es el link a contacto */
		$('.js_ir_contacto').on('click', function(e) {
		e.preventDefault();
		
		$target = $("#contacto");
		
		$('html, body').stop().animate({
                'scrollTop': $target.offset().top- ($alto_menu_desktop - 2 )
            }, 1000, 'swing', function(){
				
				$('#contact-form #area').attr('value','taller').focus();	
				
				});
		
	}); 

    }
    /* FIN MENU SCROLL DESKTOP */



    /***************************************************/
    /* MENU Y TABS SCROLL MOBILE */
    /****************************************************/
    function menu_mobile() {

         $('.hamburguer ').on('click', function(e){
			 e.preventDefault();
			 } );
			 
		 $(document).on("scroll", onScroll);
        $('.js-menu-mobile-item a').on('click', function(e) {


            e.preventDefault();
		  // SideNav.hideSideNav();

            $(document).off("scroll");

            $('.js-menu-mobile-item a').each(function() {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash,
            //    menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - $alto_menu_mobile
            }, 1000, 'swing', function() {
              //  window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });

        /* Cuando hace Scroll */
        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
			
            //var PosicionSeccion = $('#sala').offset().top;

            $('.js-menu-mobile-item a').each(function() {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
				
                var AreaCambioArriba = $(window).height() / 2;

                if ((refElement.position().top <= scrollPos + $alto_menu_mobile + AreaCambioArriba) && (refElement.position().top + refElement.height() > scrollPos)) {

                    $('.js-menu-mobile-item a').removeClass("active");
                    currLink.addClass("active");
                } else if (refElement.position().top <= scrollPos) {
                    currLink.removeClass("active");
                }

            });

            // Si se entro en la seccion LA SALA que le saque la clase activa a las pestañas superiores
            var PosicionSeccionSala = $('#sala').offset().top;

            var AreaCambioFinal = $(window).height() / 3;
            if (PosicionSeccionSala <= $(window).scrollTop() + AreaCambioFinal) {

                $('.mobile_tabs a').removeClass("active");

            }
        }

        /* Solo el logo va hacia arriba de todo */
        $('.js-logo-mobile').on('click', function(e) {
			e.preventDefault();
            $('html, body').stop().animate({
                'scrollTop': 0
            }, 1000, 'swing');

        });
		
		/* Si es el link a contacto */
		$('.js_ir_contacto').on('click', function(e) {
		e.preventDefault();
		$target = $("#contacto");
		
		$('html, body').stop().animate({
                'scrollTop': $target.offset().top- ($alto_menu_mobile - 2 )
            }, 1000, 'swing', function(){
				
				$('#contact-form #area').attr('value','taller').focus();	
				
				});
	}); 

    }
    /* FIN MENU SCROLL MOBILE */

 /***************************************************/
    /*ILIGHTBOX */
    /****************************************************/

$('.ilightbox').iLightBox({ 

          skin:'metro-black',
          path:'horizontal',
          
        controls: {
        arrows: true,
        slideshow: true,
        toolbar: true,
        fullscreen: true,
        thumbnail: true,
        keyboard: true,
        mousewheel: true,
        swipe: true
                    }

      

        /* options */ });

// Ilightbox activado con rel
    (function(){
      var groupsArr = [];
      $('[rel^="ilightbox["]').each(function () {
        var group = this.getAttribute("rel");
        $.inArray(group, groupsArr) === -1 && groupsArr.push(group);
      });
      $.each(groupsArr, function (i, groupName) {
        $('[rel="' + groupName + '"]').iLightBox({ 

          skin:'metro-black',
          path:'horizontal',
          
        controls: {
        arrows: true,
        slideshow: true,
        toolbar: true,
        fullscreen: true,
        thumbnail: true,
        keyboard: true,
        mousewheel: true,
        swipe: true
      }

      

        /* options */ });
      });
    })();

// Slider de imagenes destacadas

 var si = $('#gallery-1').royalSlider({
    addActiveClass: true,
    arrowsNav: true,
    controlNavigation: 'bullets',
		autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true,
			delay: 3000
    	},
	
	autoHeight:true,
    autoScaleSlider: true, 
	autoScaleSliderWidth: 1010,     
    autoScaleSliderHeight: 520,
	
	imageScaleMode:'fill',
	imageAlignCenter:false,
/*	imgWidth: 1010,
    imgHeight: 520,*/
	
    loop: true,
    fadeinLoadedSlide: false,
    globalCaption: false,
    keyboardNavEnabled: true,
    globalCaptionInside: false,

    visibleNearby: {
      enabled: true,
      centerArea: 0.70,
      center: true,
      breakpoint: 1024,
      breakpointCenterArea: 0.9,
      navigateByCenterClick: false
    }
  }).data('royalSlider');


/***************************************************/
/*Carousel de Sponsors */
/****************************************************/
 
	  var carouselSponsors = new Swiper ('.carousel_sponsors', {
      // pagination: '.swiper-galerias .swiper-pagination',
	    nextButton: '.carousel_sponsors .swiper-button-next',
        prevButton: '.carousel_sponsors .swiper-button-prev',
       // paginationClickable: true,
	    centeredSlides: true,
	   // slidesPerView: 5,
		autoplay:3000,
	//	direction: 'vertical',
    	loop: true,
		autoplayDisableOnInteraction:false,
	    slidesPerView: "auto",
	    grabCursor: true,
       // freeMode: true,
		simulateTouch: true
       // slidesPerColumn: 2,
        //spaceBetween: 1

    })
	
	$(".swiper-container").hover(function(){
 this.swiper.stopAutoplay();
}, function(){
 this.swiper.startAutoplay();
});

/***************************************************/
/*Cargar mapa en Ventana Modal */
/****************************************************/
$('#modal-como-llegar').on('show.bs.modal', function() {
 
 $('.map_box').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.9218771259857!2d-57.959182684762105!3d-34.908409980381705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e6264f494117%3A0x425261d4cd76e735!2sSala+420+-+La+Grande!5e0!3m2!1ses-419!2sar!4v1497794232496" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>')
  
 
})

/***************************************************/
/* Cargar Mas Talleres */
/****************************************************/
  $(window).on("load", function(e) {

	//if (($(window).width() <= 991)) {	
  		
		  
	if ($(".js-taller").length > 4) { //Si son mas de 8 talleres - 4 filas 
			  
		$('#js-loadMore').css('display','block'); 		  
 		 $(".js-taller").css('display','none');		  
		  $(".js-taller").slice(0, 4).show();//Muestra los primeros 8 - 4 filas
			$("#js-loadMore").on('click', function (e) {
				e.preventDefault();
				$(".js-taller:hidden").slice(0, 4).slideDown();//Muestra los siguientes 8 - 4 filas
				if ($(".js-taller:hidden").length == 0) {
					$("#js-loadMore").fadeOut('slow');
				}
				
        $('html,body').animate({
            scrollTop: $(this).offset().top - ($alto_menu_mobile + 60 )
        }, 1500);
    });
  
		  } // if js-taller
		  
	//  } // if Windows 991
	  
  }); // if Window load

}); /* Document Ready */

