function doOnReady(){$("body").delegate("#submit","click",function(e){getFormValues(this),e.preventDefault()}),browserDetect(),addClassIOS(),initCarousel(".js-carousel",3,1,!1,!0),initCarousalNavFor(".js-novfortxt-slider",1,".js-navforimg-slider",6,!1),headerFixed(),scrollform(),parallaxeffect(".js-parallax"),targetScroll(),tabsInit(),acordianInit(),initTimer(".js-timer"),ChangeToSvg(),getCopyYear(),checkviewport(".js-viewport"),initEqualHeight(),bindPopupEve(),dataTrim(),mobileSlider(),initToggleClass(".js-formSlideBtn","is--active",".form-main","is-mbForm"),initformshow("is-showform"),initMenuActive(".js-menu"),$("body").on("click",".js-menubtn:not(.is--active)",function(){sideMenuOpen()}).on("click",".js-menubtn.is--active",function(){sideMenuClose()}).on("click",".js-menuclose",function(){sideMenuClose()}).on("click touchstart",".js-defaultOverlay",function(){sideMenuClose()}).on("click",".js-dropdownbtn:not(.is--active)",function(){dropdownclose(),dropdownopen($(this))}).on("click",".js-dropdownbtn.is--active",function(){dropdownclose()}).on("click",function(e){var t=$(".dropdown-box");t.is(e.target)||0!==t.has(e.target).length||dropdownclose()}).on("paste",".js-byphone",function(e){e.originalEvent.clipboardData.getData("Text").match(/[^\d]/)&&e.preventDefault()}).on("keypress",".js-byphone",function(e){if(e.which<48||e.which>58)return!1}).on("drop",".js-byphone",function(e){e.preventDefault()}).on("click",".js-formClose",function(){$(this).parent().removeClass("is--active"),$(this).siblings().removeClass("is--active")}),$(document).on("focus",".js-input-check",function(e){$(this).parent().addClass("is--focus")}).on("blur",".js-input-check",function(e){$(this).parent().removeClass("is--focus")})}
function doOnLoad(){}
function doOnResize(){winWidth=$(window).width(),winHeight=$(window).height(),initLazyLoad("[data-src]"),initRatioHeight(".js-ratio169","16","9"),initRatioHeight(".js-ratio43","4","3"),initEqualHeight(),targetScroll(),initMenuActive(".js-menu"),ChangeToSvg()}
function doOnScroll(){headerFixed(),scrollform(),parallaxeffect(".js-parallax"),checkviewport(".js-viewport"),initLazyLoad("[data-src]"),initRatioHeight(".js-ratio169.jsratioScroll","16","9"),initRatioHeight(".js-ratio43.jsratioScroll","4","3"),initMenuActive(".js-menu")}
function browserDetect(){var e,t,o;navigator.sayswho=(t=navigator.userAgent,o=t.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i)||[],/trident/i.test(o[1])?"IE "+((e=/\brv[ :]+(\d+)/g.exec(t)||[])[1]||""):"Chrome"===o[1]&&null!=(e=t.match(/\b(OPR|Edge)\/(\d+)/))?e.slice(1).join("").replace("OPR","Opera"):(o=o[2]?[o[1],o[2]]:[navigator.appName,navigator.appVersion,"-?"],null!=(e=t.match(/version\/(\d+)/i))&&o.splice(1,1,e[1]),o.join(" "))),$("body").addClass(navigator.sayswho)}
function addClassIOS(){navigator.appVersion.indexOf("iPhone")>=0||navigator.appVersion.indexOf("iPad")>=0?$("body").addClass("browserIos"):$("body").removeClass("browserIos")}
function ChangeToSvg(){jQuery("img.js-tosvg").each(function(){var e=jQuery(this),t=e.attr("id"),o=e.attr("class"),i=e.attr("src");jQuery.get(i,function(i){var n=jQuery(i).find("svg");void 0!==t&&(n=n.attr("id",t)),void 0!==o&&(n=n.attr("class",o+" replaced-svg")),!(n=n.removeAttr("xmlns:a")).attr("viewBox")&&n.attr("height")&&n.attr("width")&&n.attr("viewBox","0 0 "+n.attr("height")+" "+n.attr("width")),e.replaceWith(n)},"xml")})}
function sideMenuOpen(){$(".js-menubtn").addClass("is--active"),$(".navigation").not(".is--open").addClass("is--open"),$("body").addClass("is--menu")}
function sideMenuClose(){$(".js-menubtn").removeClass("is--active"),$(".navigation.is--open").removeClass("is--open"),$("body").removeClass("is--menu")}
function tabsInit(){$(".js-tab-link").click(function(e){e.preventDefault();var t=$(this),o=t.attr("data-tab-id"),i=t.attr("data-tab-name");$('[data-tab-name="'+i+'"]').removeClass("is-active"),$('[data-tab-id="'+o+'"]').addClass("is-active"),$(".tab-"+o).addClass("is-active")})}
function acordianInit(){$("body").on("click",".js-accor-link:not(.is-active)",function(e){e.preventDefault();var t=$(this),o=t.attr("data-accor-id"),i=t.attr("data-accor-name");$('[data-accor-name="'+i+'"]').removeClass("is-active"),$('[data-accor-name="'+i+'"]').parents(".accor-row").removeClass("open-acordian"),t.addClass("is-active"),t.parents(".accor-row").addClass("open-acordian"),t.parents(".accor-row").next(".accor-"+o).addClass("is-active")}).on("click",".js-accor-link.is-active",function(e){e.preventDefault();var t=$(this),o=t.attr("data-accor-id");t.removeClass("is-active"),t.parents(".accor-row").removeClass("open-acordian"),t.parents(".accor-row").next(".accor-"+o).removeClass("is-active")})}
function checkFieldval(e){$(e).each(function(e,t){inputValue=$(t).val().length,inputValue>0?$(t).parent().addClass("is--used"):$(t).parent().removeClass("is--used")}),$(e).keyup(function(e,t){var o=$(e.currentTarget);inputValue=$(o).val().length,inputValue>0?$(o).parent().addClass("is--used"):$(o).parent().removeClass("is--used")})}
function initCarousel(e,t,o,i,n){$(e).not(".slick-initialized").each(function(e,a){var s=$(a),r=s.data("item-desktop"),l=s.data("item-ipad-pro"),c=s.data("item-tablet"),d=s.data("item-mobile"),u=s.parents(".carousel-sec").find(".js-sliderArrows"),p=s.parents(".carousel-sec").find(".js-sliderDots"),f='<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="'+s.parents(".carousel-sec").find(".js-sliderArrows").data("arrow-left")+'"></i></button>',v='<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="'+s.parents(".carousel-sec").find(".js-sliderArrows").data("arrow-right")+'"></i></button>';s.slick({infinite:!0,slidesToShow:t,slidesToScroll:o,appendArrows:u,appendDots:p,prevArrow:f,nextArrow:v,centerMode:i,centerPadding:"60px",dots:n,autoplay:!0,autoplaySpeed:1e3,responsive:[{breakpoint:1600,settings:{slidesToShow:r}},{breakpoint:992,settings:{slidesToShow:l}},{breakpoint:768,settings:{slidesToShow:c}},{breakpoint:375,settings:{slidesToShow:d}}]})})}
function initCarousalNavFor(e,t,o,i,n){var a=$(e).not(".slick-initialized"),s=$(o).not(".slick-initialized");a.on("init",function(e,t,o){}),a.each(function(e,i){var n=$(i),a=n.parents(".carousel-navfor").find(".js-sliderArrows"),s='<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="'+a.data("arrow-left")+'"></i></button>',r='<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="'+a.data("arrow-right")+'"></i></button>';n.slick({slidesToShow:t,slidesToScroll:1,appendArrows:a,prevArrow:s,nextArrow:r,dots:!0,fade:!0,asNavFor:o,responsive:[{breakpoint:1200,settings:{slidesToShow:1}},{breakpoint:992,settings:{slidesToShow:1}},{breakpoint:768,settings:{slidesToShow:1}},{breakpoint:375,settings:{slidesToShow:1}}]})}),s.each(function(t,o){$(o).slick({slidesToShow:i,slidesToScroll:1,arrows:!1,dots:!1,asNavFor:e,centerMode:n,focusOnSelect:!0,responsive:[{breakpoint:1200,settings:{slidesToShow:5}},{breakpoint:992,settings:{slidesToShow:1}},{breakpoint:768,settings:{slidesToShow:1}},{breakpoint:375,settings:{slidesToShow:1}}]})}),a.on("afterChange",function(e,t,o){var i=t.currentSlide+1,n=t.$slides.length;$(".js-count-text").text("Video "+i+" of "+n)})}
function mobileSlider(){$(window).width()<992&&setTimeout(function(){$(".js-mobile-destroy").each(function(e,t){$(t).slick("unslick")})},500)}
function headerFixed(){$(window).scrollTop()>$(".header").outerHeight()?$(".js-fixed").addClass("sticky-header"):$(".js-fixed").removeClass("sticky-header")}
function scrollform(){var e=$(window).scrollTop(),t=$(".header").outerHeight();e>$(".banner").outerHeight()-t?$(".iti-mobile").addClass("stick-form"):$(".iti-mobile").removeClass("stick-form")}
function parallaxeffect(e){$(e).css("background-position","-"+(1920-$(window).width())/2+"px "+-Math.max(document.body.scrollTop,document.documentElement.scrollTop)/4+"px")}
function targetScroll(){$("[data-scrollbtn]").on("click",function(){var e=$(this).data("scrollbtn"),t=$("[data-scrolltarget="+e+"]"),o=0;(o=winWidth<992?t.attr("data-md-ofsettop"):t.attr("data-ofsettop"))?$("html,body").stop().animate({scrollTop:t.offset().top-o},500,"swing"):$("html,body").stop().animate({scrollTop:t.offset().top},500,"swing")})}
function initMenuActive(e){var t,o,i=$("[data-scrolltarget]"),n=$(e),a=n.outerHeight(),s=$(this).scrollTop(),r=0,l=$(window).width();i.each(function(e,c){var d=$(c);r=l<992?d.attr("data-md-ofsettop"):d.attr("data-ofsettop"),t=r?d.offset().top-(a+parseInt(r)):d.offset().top-a,o=t+d.outerHeight(),s>=t&&s<=o&&(n.find("li").removeClass("is--active"),i.removeClass("is--oTop"),d.addClass("is--oTop"),n.find('[data-scrollbtn="'+d.attr("data-scrolltarget")+'"]').parent("li").addClass("is--active"))})}
function initTimer(e){var t=$(e);t.length&&t.isInViewport()&&(0==ccount&&t.countTo(),ccount=1)}
function activeLink(){var e=window.location.pathname;$('[href="'+e+'"]').parent("li").siblings().removeClass("is--active"),$('[href="'+e+'"]').parent("li").addClass("is--active")}
function validateNumber(e){var t=window.event?e.keyCode:e.which;return 8===e.keyCode||46===e.keyCode||!(t<48||t>57)}
function getFormValues(e){var t="",o=$(e).parents("form"),i=!0;if(o.find(".js-valGet").each(function(e,o){$e=$(o),t=t+"\n"+$e.val(),0==$.trim($e.val()).length?($e.addClass("error-field"),i=!1,$e.focus()):$e.removeClass("error-field")}),isEmail($("#em").val())?o.find(".js-emailvalid").removeClass("error-field"):(o.find(".js-emailvalid").addClass("error-field"),i=!1,$e.focus()),isPhone($("#pn").val())?o.find(".js-numbervalid").removeClass("error-field"):(o.find(".js-numbervalid").addClass("error-field"),i=!1,$e.focus()),$("#pdt").val()>0?o.find(".js-servicevalid").removeClass("error-field"):(o.find(".js-servicevalid").addClass("error-field"),i=!1,$e.focus()),1==i){var n=$("#cn").val(),a=$("#em").val(),s=$("#pn").val(),r=$("#pdt").val(),l=intl.intlTelInput("getSelectedCountryData").name.replace(/ .*/,""),c=intl.intlTelInput("getSelectedCountryData").dialCode;sendEmail(n,a,intl.intlTelInput("getSelectedCountryData").iso2,l,c,s,r)}}
function sendEmail(e,t,o,i,n,a,s){var r={};r.name=e,r.emailAddress=t,r.countryCode=o,r.countryName=i,r.dialCode=n,r.phoneNumber=a,r.fingerPrintId=fingerprint(),r.WhatToRegister="DesiredProduct-"+s,r.referrerUrl=document.referrer,r.userAgent=fingerprint_useragent,r.telizeJson=JsonLocation,r.registrationIp=registrationIp,r.landingUrl=document.URL,$.ajax({async:!0,type:"POST",data:r,url:baseUrl+"/apiV2/account/clientSignup",success:function(t){1==t.IsSuccess&&($(".submit").prop("disabled",!0),localStorage.setItem("cn",e),localStorage.setItem("token",t.Data.token),localStorage.setItem("pid",s),console.log(t),3==$("#pdt").val()?moveToOrderAssign():moveToOrderNow()),$("form").find(".btn").removeClass("pointer-none")},failure:function(e){console.log(e),$("form").find(".btn").removeClass("pointer-none")},error:function(e){console.log(e),$("form").find(".btn").removeClass("pointer-none")}})}
function moveToOrderNow(){window.parent.document.location.href="/order-now/"}
function moveToOrderAssign(){window.parent.document.location.href="/order-academic/"}
function sendVisitor(e,t,o){var i={};i.FingerPrintId=fingerprint(),i.IP=e,i.iso2=t,i.UserAgent=fingerprint_useragent,i.LocationJson=o,i.ReferrerUrl=document.referrer,i.landingUrl=document.URL,$.ajax({async:!0,type:"POST",data:i,url:baseUrl+"/apiV2/account/visitor",success:function(e){1==e.IsSuccess||console.log(e)},failure:function(e){console.log(e)},error:function(e){console.log(e)}})}
function validateNumber(e){var t=window.event?e.keyCode:e.which;return 8===e.keyCode||46===e.keyCode||!(t<48||t>57)}
function isEmail(e){return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(e)}
function isPhone(e){return /[0-9 -()+]+$/i.test(e)}
function thankyounote(e){var t=e.find(".form_message");t&&(t.show().delay(7e3).fadeOut(),$("html,body").animate({scrollTop:t.offset().top-100},"slow"),e.find(".js-valGet").each(function(e,t){$(t).val("")}))}
function createCookie(e,t,o){if(o){var i=new Date;i.setTime(i.getTime()+24*o*60*60*1e3);var n="; expires="+i.toGMTString()}else n="";document.cookie=e+"="+t+n+"; path=/"}
function readCookie(e){for(var t=e+"=",o=document.cookie.split(";"),i=0;i<o.length;i++){for(var n=o[i];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(t))return n.substring(t.length,n.length)}
return null}
function getCookie(e){return document.cookie.length>0&&(begin=document.cookie.indexOf(e+"="),-1!=begin)?(begin+=e.length+1,end=document.cookie.indexOf(";",begin),-1==end&&(end=document.cookie.length),unescape(document.cookie.substring(begin,end))):null}
function checkviewport(e){$(e).each(function(e,t){var o=$(t);o.isInViewport()?o.addClass("isOnScreen"):o.removeClass("isOnScreen")})}
function getCopyYear(){var e=(new Date).getFullYear();$(".copyrightyear").text(e)}
function initLazyLoad(e){$(e).each(function(e,t){var o=$(t);if(o.isInViewport()){var i=o.data("src");o.attr("src",i),o.removeAttr("data-src")}})}
function initRatioHeight(e,t,o){$(e).length>0&&setTimeout(function(){$(e).each(function(e,i){var n=$(i);if(n.isInViewport()){var a=n.width(),s=(n.height(),a/t*o);n.css("height",s),n.parent(".js-ratioHtP").css("height",s),n.removeClass("jsratioScroll")}})},100)}
function openPopup(e){var t=e;popCls=t.substring(1,t.length),$("body").addClass(popCls),$("html").addClass("popup-is-active"),$(e).show(),$(e).closest(".c-popup").show(),setTimeout(function(){$(e).addClass("active"),$(e).closest(".c-popup").addClass("popup--open")},10)}
function closePopup(){$("body").removeClass(popCls),$(".c-popup .active").length&&($(".c-popup .active").removeClass("active"),$(".c-popup").removeClass("popup--open"),setTimeout(function(){$(".c-popup .popup").hide(),$(".c-popup").hide(),$("html").removeClass("popup-is-active")},310))}
function closeSelfPopup(e){var t=$(e.currentTarget);$("body").removeClass(popCls),t.parent(".popup").removeClass("active"),setTimeout(function(){t.parent(".popup").hide(),0==$(".popup").hasClass("active")&&($(".c-popup").removeClass("popup--open"),$(".c-popup").hide(),$("html").removeClass("popup-is-active"))},310)}
function bindPopupEve(){$(".js-popup-link").click(function(e){if(e.preventDefault(),$(this).data("popup"))var t=$(this).data("popup");else t=$(this).attr("href");openPopup(t),ChangeToSvg()}),$(".js-close-popup").click(function(e){e.preventDefault(),closePopup()}),$(".js-close-selfpopup").click(function(e){e.preventDefault(),closeSelfPopup(e)})}
function dataTrim(){var e="...";$("[data-trim]").each(function(){var t=$(this).html(),o=parseInt($(this).attr("data-trim"));$(this).html(function(t,o){return(t=$.trim(t)).length>o?(t=t.substring(0,o-e.length)).substring(0,t.lastIndexOf(" "))+e:t}(t,o)),$(this).addClass("is--trimmed")})}
function dropdownopen(e){$("body").addClass("is--dropdown"),$(e).addClass("is--active"),$(e).parent(".dropdown-box").addClass("show-dd")}
function dropdownclose(){$("body").removeClass("is--dropdown"),$(".js-dropdownbtn").removeClass("is--active"),$(".js-dropdownbtn").parent(".dropdown-box").removeClass("show-dd")}
function initEqualHeight(){$(".js-eqRow").each(function(){var e=0;$(".js-eqColumn",this).each(function(){$(this).html();$(this).height("auto"),$(this).height()>e&&(e=$(this).height())}),$(".js-eqColumn",this).height(e)})}
function initToggleClass(e,t,o,i){$("body").on("click",e,function(){var n=$(this);$("body").toggleClass(i),n.parents(o).toggleClass(t),$("body").find(e).toggleClass(t)})}
function initformshow(e){$("body").on("click",".js-formshow",function(){winWidth<=991?initMBFormOpenTrigger():$("body").addClass(e)}).on("click",".js-defaultOverlay",function(){$("body").removeClass(e)})}
function initMBFormOpenTrigger(){$("body").addClass("is-mbForm"),$(".js-formSlideBtn").parents(".form-main").addClass("is--active"),$("body").find(".js-formSlideBtn").addClass("is--active")}
function removeLocalStorageValue(){localStorage.removeItem("oid"),localStorage.removeItem("pid"),localStorage.removeItem("token"),localStorage.removeItem("cn"),localStorage.removeItem("isRedirected")}
$(function(){removeLocalStorageValue(),doOnReady()}),$(window).on("load",function(){doOnLoad()}),$(window).on("resize orientationchange",function(){doOnResize()}),$(window).on("scroll",function(){doOnScroll()}),$(document).keyup(function(e){e.keyCode}),$.fn.isInViewport=function(){var e=$(this).offset().top,t=e+$(this).outerHeight(),o=$(window).scrollTop(),i=o+$(window).height();return t>o&&e<i};