var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(a,c,b){a instanceof String&&(a=String(a));for(var d=a.length,e=0;e<d;e++){var f=a[e];if(c.call(b,f,e,a))return{i:e,v:f}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(a,c,b){a!=Array.prototype&&a!=Object.prototype&&(a[c]=b.value)};$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global&&null!=global?global:a};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(a,c,b,d){if(c){b=$jscomp.global;a=a.split(".");for(d=0;d<a.length-1;d++){var e=a[d];e in b||(b[e]={});b=b[e]}a=a[a.length-1];d=b[a];c=c(d);c!=d&&null!=c&&$jscomp.defineProperty(b,a,{configurable:!0,writable:!0,value:c})}};$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,b){return $jscomp.findInternal(this,a,b).v}},"es6","es3");
$(document).ready(function(){update_currencies();var a=$(".currencies-dropdown").add(".currencies-list").find("span.selected").filter(":first");$(".currency-selected").html(a.text())});
function update_currencies(){var a=$("body").attr("data-currency");Currency.moneyFormats[a].money_with_currency_format=$("body").attr("data-money-currency");Currency.moneyFormats[a].money_format=$("body").attr("data-money");var c=$.cookie("currency");jQuery("span.money span.money").each(function(){jQuery(this).parents("span.money").removeClass("money")});jQuery("span.money").each(function(){""==jQuery(this).attr("data-currency-"+a)&&jQuery(this).attr("data-currency-"+a,jQuery(this).html())});var b=
jQuery("#currencies span");null==c||c===a?(b.removeClass("selected"),jQuery("#currencies span[data-currency="+a+"]").addClass("selected"),Currency.currentCurrency=a):(Currency.convertAll(a,c),b.removeClass("selected"),jQuery("#currencies span[data-currency="+c+"]").addClass("selected"));b.on("click",function(){b.removeClass("selected");jQuery(this).addClass("selected");var a=jQuery(this).attr("data-currency");Currency.convertAll(Currency.currentCurrency,a)});$("body").on("ajaxCart.afterCartLoad",
function(b){Currency.convertAll(a,jQuery("#currencies span.selected").attr("data-currency"));jQuery(".selected-currency").text(Currency.currentCurrency)});jQuery(".selected-currency").text(Currency.currentCurrency)};
