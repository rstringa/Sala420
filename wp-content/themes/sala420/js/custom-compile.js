jQuery(document).ready(function(o){function e(){function e(){var e=o(document).scrollTop();o(".menu_desktop a").each(function(){var a=o(this),i=o(a.attr("href"));i.position().top<=e+t&&i.position().top+i.outerHeight(!0)>e?(o(".menu_desktop a").removeClass("active"),a.addClass("active")):a.removeClass("active")})}var t=90;o(document).on("scroll",e),o('.menu_desktop a[href^="#"]').on("click",function(a){a.preventDefault(),o(document).off("scroll"),o(".menu_desktop a").each(function(){o(this).removeClass("active")}),o(this).addClass("active");var i=this.hash;$target=o(i),o("html, body").stop().animate({scrollTop:$target.offset().top-(t-2)},500,"swing",function(){window.location.hash=i,o(document).on("scroll",e)})}),o(".js-logo-desktop").on("click",function(){o("html, body").stop().animate({scrollTop:0},500,"swing")}),o(".js_ir_contacto").on("click",function(e){e.preventDefault();var a=this.hash;$target=o(a),o("#contact-form #area").attr("value","taller").focus(),o("html, body").stop().animate({scrollTop:$target.offset().top-(t-2)},500,"swing")})}function t(){function e(){var e=o(document).scrollTop();o(".js-menu-mobile-item a").each(function(){var a=o(this),i=o(a.attr("href")),n=o(window).height()/2;i.position().top<=e+t+n&&i.position().top+i.height()>e?(o(".js-menu-mobile-item a").removeClass("active"),a.addClass("active")):i.position().top<=e&&a.removeClass("active")});var a=o("#sala").offset().top,i=o(window).height()/3;a<=o(window).scrollTop()+i&&o(".js-menu-mobile-item a").removeClass("active")}var t=100;o(document).on("scroll",e),o(".js-menu-mobile-item a").on("click",function(a){a.preventDefault(),o(document).off("scroll"),o(".js-menu-mobile-item a").each(function(){o(this).removeClass("active")}),o(this).addClass("active");var i=this.hash;$target=o(i),o("html, body").stop().animate({scrollTop:$target.offset().top-t},500,"swing",function(){window.location.hash=i,o(document).on("scroll",e)})}),o(".js-logo-mobile").on("click",function(){o("html, body").stop().animate({scrollTop:0},500,"swing")}),o(".js_ir_contacto").on("click",function(e){e.preventDefault();var a=this.hash;$target=o(a),o("#contact-form #area").attr("value","taller").focus(),o("html, body").stop().animate({scrollTop:$target.offset().top-(t-2)},500,"swing")})}o("body");document.getElementById("slider")&&o("#slider").removeClass("mascara"),o(window).on("load",function(){"use strict";o(".loader").fadeOut(800)}),o(window).width()<=991?t():e(),o(window).resize(function(){o(window).width()<=991?t():e()}),o(".ilightbox").iLightBox({skin:"metro-black",path:"horizontal",controls:{arrows:!0,slideshow:!0,toolbar:!0,fullscreen:!0,thumbnail:!0,keyboard:!0,mousewheel:!0,swipe:!0}}),function(){var e=[];o('[rel^="ilightbox["]').each(function(){var t=this.getAttribute("rel");-1===o.inArray(t,e)&&e.push(t)}),o.each(e,function(e,t){o('[rel="'+t+'"]').iLightBox({skin:"metro-black",path:"horizontal",controls:{arrows:!0,slideshow:!0,toolbar:!0,fullscreen:!0,thumbnail:!0,keyboard:!0,mousewheel:!0,swipe:!0}})})}();o("#gallery-1").royalSlider({addActiveClass:!0,arrowsNav:!0,controlNavigation:"bullets",autoPlay:{enabled:!0,pauseOnHover:!0,delay:3e3},autoHeight:!0,autoScaleSlider:!0,autoScaleSliderWidth:1010,autoScaleSliderHeight:520,imageScaleMode:"fill",imageAlignCenter:!1,loop:!0,fadeinLoadedSlide:!1,globalCaption:!1,keyboardNavEnabled:!0,globalCaptionInside:!1,visibleNearby:{enabled:!0,centerArea:.7,center:!0,breakpoint:1024,breakpointCenterArea:.9,navigateByCenterClick:!1}}).data("royalSlider"),new Swiper(".carousel_sponsors",{nextButton:".carousel_sponsors .swiper-button-next",prevButton:".carousel_sponsors .swiper-button-prev",centeredSlides:!0,autoplay:3e3,loop:!0,autoplayDisableOnInteraction:!1,slidesPerView:"auto",grabCursor:!0,simulateTouch:!0});o(".swiper-container").hover(function(){this.swiper.stopAutoplay()},function(){this.swiper.startAutoplay()}),o("#modal-como-llegar").on("show.bs.modal",function(){o(".map_box").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.9218771259857!2d-57.959182684762105!3d-34.908409980381705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e6264f494117%3A0x425261d4cd76e735!2sSala+420+-+La+Grande!5e0!3m2!1ses-419!2sar!4v1497794232496" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>')})});
//# sourceMappingURL=custom-compile.js.map