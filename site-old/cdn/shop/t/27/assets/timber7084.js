(function($2){$2.fn.prepareTransition=function(){return this.each(function(){var el=$2(this);el.one("TransitionEnd webkitTransitionEnd transitionend oTransitionEnd",function(){el.removeClass("is-transitioning")});var cl=["transition-duration","-moz-transition-duration","-webkit-transition-duration","-o-transition-duration"],duration=0;$2.each(cl,function(idx,itm){duration||(duration=parseFloat(el.css(itm)))}),duration!=0&&(el.addClass("is-transitioning"),el[0].offsetWidth)})}})(jQuery),jQuery(function($2){let money_format=$2("body").attr("data-money");ajaxCart.init({formSelector:"#AddToCartForm",cartContainer:"#CartContainer",addToCartSelector:"#AddToCart",cartCountSelector:".cart-count",cartCostSelector:"#CartCost",moneyFormat:money_format}),$2(".buy_product_on_footer")&&ajaxCart.init({formSelector:"#AddToCartFormFooter",cartContainer:"#CartContainer",addToCartSelector:"#AddToCart",cartCountSelector:".cart-count",cartCostSelector:"#CartCost",moneyFormat:money_format})}),jQuery(document.body).on("afterCartLoad.ajaxCart",function(evt,cart){timber.RightDrawer.open()});function replaceUrlParam(e,r,a){var n=new RegExp("("+r+"=).*?(&|$)"),c=e;return c=e.search(n)>=0?e.replace(n,"$1"+a+"$2"):c+(c.indexOf("?")>0?"&":"?")+r+"="+a}typeof Shopify>"u"&&(Shopify={}),Shopify.formatMoney||(Shopify.formatMoney=function(cents,format){var value="",placeholderRegex=/\{\{\s*(\w+)\s*\}\}/,formatString=format||this.money_format;typeof cents=="string"&&(cents=cents.replace(".",""));function defaultOption(opt,def){return typeof opt>"u"?def:opt}function formatWithDelimiters(number,precision,thousands,decimal){if(precision=defaultOption(precision,2),thousands=defaultOption(thousands,","),decimal=defaultOption(decimal,"."),isNaN(number)||number==null)return 0;number=(number/100).toFixed(precision);var parts=number.split("."),dollars=parts[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1"+thousands),cents2=parts[1]?decimal+parts[1]:"";return dollars+cents2}switch(formatString.match(placeholderRegex)[1]){case"amount":value=formatWithDelimiters(cents,2);break;case"amount_no_decimals":value=formatWithDelimiters(cents,0);break;case"amount_with_comma_separator":value=formatWithDelimiters(cents,2,".",",");break;case"amount_no_decimals_with_comma_separator":value=formatWithDelimiters(cents,0,".",",");break}return formatString.replace(placeholderRegex,value)}),window.timber=window.timber||{},timber.cacheSelectors=function(){timber.cache={$html:$("html"),$body:$(document.body),$navigation:$("#AccessibleNav"),$mobileSubNavToggle:$(".mobile-nav__toggle"),$changeView:$(".change-view"),$productImage:$("#ProductPhotoImg"),$thumbImages:$("#ProductThumbs").find("a.product-single__thumbnail"),$recoverPasswordLink:$("#RecoverPassword"),$hideRecoverPasswordLink:$("#HideRecoverPasswordLink"),$recoverPasswordForm:$("#RecoverPasswordForm"),$customerLoginForm:$("#CustomerLoginForm"),$passwordResetSuccess:$("#ResetSuccess")}},timber.init=function(){timber.cacheSelectors(),timber.accessibleNav(),timber.drawersInit(),timber.mobileNavToggle(),timber.productImageSwitch(),timber.responsiveVideos(),timber.loginForms()},timber.accessibleNav=function(){var $nav=timber.cache.$navigation,$allLinks=$nav.find("a"),$topLevel=$nav.children("li").find("a"),$parents=$nav.find(".site-nav--has-dropdown"),$subMenuLinks=$nav.find(".site-nav__dropdown").find("a"),activeClass="nav-hover",focusClass="nav-focus";$parents.on("mouseenter touchstart",function(evt){var $el=$(this);$el.hasClass(activeClass)||evt.preventDefault(),showDropdown($el)}),$parents.on("mouseleave",function(){hideDropdown($(this))}),$subMenuLinks.on("touchstart",function(evt){evt.stopImmediatePropagation()}),$allLinks.focus(function(){handleFocus($(this))}),$allLinks.blur(function(){removeFocus($topLevel)});function handleFocus($el){var $subMenu=$el.next("ul"),hasSubMenu=!!$subMenu.hasClass("sub-nav"),isSubItem=$(".site-nav__dropdown").has($el).length,$newFocus=null;isSubItem?($newFocus=$el.closest(".site-nav--has-dropdown").find("a"),addFocus($newFocus)):(removeFocus($topLevel),addFocus($el))}function showDropdown($el){$el.addClass(activeClass),setTimeout(function(){timber.cache.$body.on("touchstart",function(){hideDropdown($el)})},250)}function hideDropdown($el){$el.removeClass(activeClass),timber.cache.$body.off("touchstart")}function addFocus($el){$el.addClass(focusClass)}function removeFocus($el){$el.removeClass(focusClass)}},timber.drawersInit=function(){timber.LeftDrawer=new timber.Drawers("NavDrawer","left"),$("#CartDrawer")&&(timber.RightDrawer=new timber.Drawers("CartDrawer","right",{onDrawerOpen:ajaxCart.load}))},timber.mobileNavToggle=function(){timber.cache.$mobileSubNavToggle.on("click",function(){$(this).parent().toggleClass("mobile-nav--expanded")})},timber.getHash=function(){return window.location.hash},timber.productImageSwitch=function(){timber.cache.$thumbImages.length&&timber.cache.$thumbImages.on("click",function(evt){evt.preventDefault();var newImage=$(this).attr("href");timber.switchImage(newImage,null,timber.cache.$productImage)})},timber.switchImage=function(src,imgObject,el){var $el=$(el);$el.attr("src",src)},timber.responsiveVideos=function(){var $iframeVideo=$('iframe[src*="youtube.com/embed"], iframe[src*="player.vimeo"]'),$iframeReset=$iframeVideo.add("iframe#admin_bar_iframe");$iframeVideo.each(function(){$(this).wrap('<div class="video-wrapper"></div>')}),$iframeReset.each(function(){this.src=this.src})},timber.loginForms=function(){function showRecoverPasswordForm(){timber.cache.$recoverPasswordForm.show(),timber.cache.$customerLoginForm.hide()}function hideRecoverPasswordForm(){timber.cache.$recoverPasswordForm.hide(),timber.cache.$customerLoginForm.show()}timber.cache.$recoverPasswordLink.on("click",function(evt){evt.preventDefault(),showRecoverPasswordForm()}),timber.cache.$hideRecoverPasswordLink.on("click",function(evt){evt.preventDefault(),hideRecoverPasswordForm()}),timber.getHash()=="#recover"&&showRecoverPasswordForm()},timber.resetPasswordSuccess=function(){timber.cache.$passwordResetSuccess.show()},timber.Drawers=function(){var Drawer=function(id,position,options){var defaults={close:".js-drawer-close",open:".js-drawer-open-"+position,openClass:"js-drawer-open",dirOpenClass:"js-drawer-open-"+position};if(this.$nodes={parent:$("body, html"),page:$("#PageContainer"),moved:$(".is-moved-by-drawer")},this.config=$.extend(defaults,options),this.position=position,this.$drawer=$("#"+id),!this.$drawer.length)return!1;this.drawerIsOpen=!1,this.init()};return Drawer.prototype.init=function(){$(this.config.open).on("click",$.proxy(this.open,this)),this.$drawer.find(this.config.close).on("click",$.proxy(this.close,this))},Drawer.prototype.open=function(evt){var externalCall=!1;if(evt?evt.preventDefault():externalCall=!0,evt&&evt.stopPropagation&&(evt.stopPropagation(),this.$activeSource=$(evt.currentTarget)),this.drawerIsOpen&&!externalCall)return this.close();timber.cache.$body.trigger("beforeDrawerOpen.timber",this),this.$nodes.moved.addClass("is-transitioning"),this.$drawer.prepareTransition(),this.$nodes.parent.addClass(this.config.openClass+" "+this.config.dirOpenClass),this.drawerIsOpen=!0,this.trapFocus(this.$drawer,"drawer_focus"),this.config.onDrawerOpen&&typeof this.config.onDrawerOpen=="function"&&(externalCall||this.config.onDrawerOpen()),this.$activeSource&&this.$activeSource.attr("aria-expanded")&&this.$activeSource.attr("aria-expanded","true"),this.$nodes.page.on("touchmove.drawer",function(){return!1}),this.$nodes.page.on("click.drawer",$.proxy(function(){return this.close(),!1},this)),timber.cache.$body.trigger("afterDrawerOpen.timber",this)},Drawer.prototype.close=function(){this.drawerIsOpen&&(timber.cache.$body.trigger("beforeDrawerClose.timber",this),$(document.activeElement).trigger("blur"),this.$nodes.moved.prepareTransition({disableExisting:!0}),this.$drawer.prepareTransition({disableExisting:!0}),this.$nodes.parent.removeClass(this.config.dirOpenClass+" "+this.config.openClass),this.drawerIsOpen=!1,this.removeTrapFocus(this.$drawer,"drawer_focus"),this.$nodes.page.off(".drawer"),timber.cache.$body.trigger("afterDrawerClose.timber",this))},Drawer.prototype.trapFocus=function($container,eventNamespace){var eventName=eventNamespace?"focusin."+eventNamespace:"focusin";$container.attr("tabindex","-1"),$container.focus(),$(document).on(eventName,function(evt){$container[0]!==evt.target&&$container.has(evt.target).length})},Drawer.prototype.removeTrapFocus=function($container,eventNamespace){var eventName=eventNamespace?"focusin."+eventNamespace:"focusin";$container.removeAttr("tabindex"),$(document).off(eventName)},Drawer}(),$(timber.init);
//# sourceMappingURL=/cdn/shop/t/27/assets/timber.js.map?v=167184377757041492271566896233
