if("undefined"==typeof MachoThemes)var MachoThemes={};if(MachoThemes.initAdsenseLoader=function(a){var b=a(".newspaper-x-adsense");b.length&&b.adsenseLoader({onLoad:function(a){a.addClass("adsense--loaded")}})},"undefined"==typeof MachoThemes)var MachoThemes={};if(MachoThemes.initBlazyLoad=function(a){setTimeout(function(){new Blazy({selector:".blazy",offset:250})},500)},"undefined"==typeof MachoThemes)var MachoThemes={};if(MachoThemes.initGoToTop=function(a){var b=300,c=700,d=a("#back-to-top");jQuery(window).scroll(function(){jQuery(this).scrollTop()>b?d.addClass("back-to-top-is-visible"):d.removeClass("back-to-top-is-visible")}),d.on("click",function(a){a.preventDefault(),jQuery("body,html").animate({scrollTop:0},c)})},"undefined"==typeof MachoThemes)var MachoThemes={};if(MachoThemes.initNewsTicker=function(a){a(".newspaper-x-news-carousel").owlCarousel({items:1,autoplay:!0,dots:!1,autoplayTimeout:5e3,loop:!0})},"undefined"==typeof MachoThemes)var MachoThemes={};if(MachoThemes.initOwlCarousel=function(a){"undefined"!=typeof a.fn.owlCarousel&&a(".owlCarousel").each(function(b){var c="#owlCarousel-"+a(this).data("slider-id"),d=a(this).data("slider-items"),e=a(this).data("slider-speed"),f=a(this).data("slider-auto-play");a(this).data("slider-single-item");f=!(0==f||"false"==f),a(".newspaper-x-owl-next").on("click",function(b){b.preventDefault(),a(c).trigger("next.owl.carousel")}),a(".newspaper-x-owl-prev").on("click",function(b){b.preventDefault(),a(c).trigger("prev.owl.carousel")}),a(c).owlCarousel({items:d,loop:!1,margin:20,autoplay:f,dots:!1,autoplayTimeout:10*e,responsive:{0:{items:1},768:{items:d}}})})},"undefined"==typeof MachoThemes)var MachoThemes={};MachoThemes.init=function(a){function b(a){var b=Object.getOwnPropertyNames(a);return b.filter(function(b){return a[b]&&a[b].constructor&&a[b].call&&a[b].apply})}var c=b(MachoThemes);c.pop(),a.each(c,function(){var b=this;"function"==typeof MachoThemes[b]&&MachoThemes[b](a)})};