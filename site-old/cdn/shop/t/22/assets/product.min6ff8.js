var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.arrayIteratorImpl=function(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}};$jscomp.arrayIterator=function(a){return{next:$jscomp.arrayIteratorImpl(a)}};$jscomp.makeIterator=function(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):$jscomp.arrayIterator(a)};$jscomp.arrayFromIterator=function(a){for(var b,c=[];!(b=a.next()).done;)c.push(b.value);return c};
$jscomp.arrayFromIterable=function(a){return a instanceof Array?a:$jscomp.arrayFromIterator($jscomp.makeIterator(a))};$jscomp.findInternal=function(a,b,c){a instanceof String&&(a=String(a));for(var d=a.length,e=0;e<d;e++){var f=a[e];if(b.call(c,f,e,a))return{i:e,v:f}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)};$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global&&null!=global?global:a};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(a,b,c,d){if(b){c=$jscomp.global;a=a.split(".");for(d=0;d<a.length-1;d++){var e=a[d];e in c||(c[e]={});c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:b})}};$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,c){return $jscomp.findInternal(this,a,c).v}},"es6","es3");
if($(".product-single").hasClass("vertical")||$(".product-single").hasClass("horizontal")||$(".product-single").hasClass("slider_grid")){var productImages=[];$(".product-photos-list-item").on("click",function(){var a=$(this).find(".product-single__thumbnail").data("zoom");$(".lightbox-link").attr("href",a);$(".product-photos-list-item").removeClass("active");$(this).addClass("active")});0<$(".product-photos-list-item a.product-single__thumbnail").length&&($(".product-photos-list-item a.product-single__thumbnail").each(function(){productImages.push({id:$(this).data("position"),
src:$(this).data("zoom")})}),$(".lightbox-link").magnificPopup({type:"image",gallery:{enabled:!0,navigateByImgClick:!0},items:productImages}),$(".product-single__thumbnail img").on("click",function(){var a=$(this).parent().data("position");$(this).parent().data("zoom");for(var b,c=0;c<productImages.length;c++)productImages[c].id===a&&(b=productImages.slice(c,productImages.length),productImages.splice(c,productImages.length-c),productImages.unshift.apply(productImages,$jscomp.arrayFromIterable(b)));
$(".lightbox-link").magnificPopup({type:"image",gallery:{enabled:!0},items:productImages});$("#ProductPhotoImg").attr("data-zoom-image",$("#ProductPhotoImg").attr("src"));$(".zoomImg").attr("src",$(this).attr("zoom-src"))}))}var window_scroll_bottom=0;
if($(".product-single").hasClass("without_slider")){var fixed_height;fixed_height=$(".fixed_menu").height()?$(".fixed_menu").height():0;var windowHeight=$(window).height()-fixed_height,product_left_scroll_bottom=0,top_part=fixed_height,fp_scroll_bottom=0;$(".without_slider .product-right").removeClass("glued");$(window).on("scroll resize",function(){767<$(window).outerWidth()?(window_scroll_bottom=$(this).scrollTop()+$(this).height(),$(this).scrollTop()>$(".header").height()&&!$(".product-right .fixed_part").hasClass("glued")?
($(".product-right .fixed_part").addClass("scroll"),$(".product-right .fixed_part").css({top:top_part,width:$(".without_slider .product-right").width()})):$(".product-right .fixed_part").removeClass("scroll"),product_left_scroll_bottom=$(".without_slider .product-left").offset().top+$(".without_slider .product-left").height(),fp_scroll_bottom=$(".product-right .fixed_part").offset().top+$(".product-right .fixed_part").height(),product_left_scroll_bottom<fp_scroll_bottom?($(".product-right .fixed_part").removeClass("scroll"),
$(".without_slider .product-right").addClass("glued")):$(".without_slider .product-right").removeClass("glued")):($(".product-right .fixed_part").removeClass("scroll"),$(".product-right .fixed_part").css({top:"auto",width:"100%"}))})}
if($(".product-single").hasClass("slider_grid"))$(".product-photos-list-item:not(.grid-item)").on("click",function(){var a=$(this).data("image-id"),b=$(".product_layout_slider").find('.product-image-item[data-image-id="'+a+'"]').data("position");setTimeout(function(){$(".product_layout_slider").trigger("to.owl.carousel",[b,300])},100)});