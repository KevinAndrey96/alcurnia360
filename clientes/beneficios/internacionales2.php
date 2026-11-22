<?php
session_start();
if(!isset($_SESSION['LogueadoCliente']))
{
	?>
	<script type="text/javascript">
		window.location="../index.php";
	</script>
	<?php
}
include_once "../../admin/controlador/PDO.php";
?>
<!DOCTYPE html>
<html lang="es" class="no-js" itemscope itemtype="https://schema.org/WebPage">

<head>

	<meta charset="UTF-8" />
	<link rel="alternate" hreflang="es-ES" href="https://mundohoteles.com.co/tours-y-paquetes-internacionales/"/>
	<title>Tours y Paquetes internacionales &#8211; Mundo Hoteles</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Mundo Hoteles &raquo; Feed" href="https://mundohoteles.com.co/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Mundo Hoteles &raquo; RSS de los comentarios" href="https://mundohoteles.com.co/comments/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mundohoteles.com.co\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.2"}};
		!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://mundohoteles.com.co/wp-includes/css/dist/block-library/style.min.css?ver=5.2.2' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css'  href='https://mundohoteles.com.co/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.4' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://mundohoteles.com.co/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.1.0' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='style-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/style.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-base-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/css/base.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-layout-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/css/layout.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-shortcodes-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/css/shortcodes.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-animations-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/assets/animations/animations.min.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-jquery-ui-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/assets/ui/jquery.ui.all.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-jplayer-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/assets/jplayer/css/jplayer.blue.monday.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-responsive-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/css/responsive.css?ver=21.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='mfn-skin-blue-css'  href='https://mundohoteles.com.co/wp-content/themes/betheme/css/skins/blue/style.css?ver=21.0.8' type='text/css' media='all' />
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js?ver=6.0'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.1.0'></script>
	<link rel='https://api.w.org/' href='https://mundohoteles.com.co/wp-json/' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mundohoteles.com.co/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mundohoteles.com.co/wp-includes/wlwmanifest.xml" /> 
	<meta name="generator" content="WordPress 5.2.2" />
	<link rel="canonical" href="https://mundohoteles.com.co/tours-y-paquetes-internacionales/" />
	<link rel='shortlink' href='https://mundohoteles.com.co/?p=352' />
	<link rel="alternate" type="application/json+oembed" href="https://mundohoteles.com.co/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmundohoteles.com.co%2Ftours-y-paquetes-internacionales%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://mundohoteles.com.co/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmundohoteles.com.co%2Ftours-y-paquetes-internacionales%2F&#038;format=xml" />
	<!-- style | background -->
	<style id="mfn-dnmc-bg-css">
		body:not(.template-slider) #Header_wrapper{background-image:url(https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png);background-repeat:no-repeat;background-position:center top;background-size:contain}
		#Top_bar,#Header_creative{background-image:url(https://mundohoteles.com.co/webprueba/wp-content/uploads/2018/02/ecobeef-subheader-gradient-1.png);background-repeat:repeat;background-position:center}
	</style>
	<!-- style | dynamic -->
	<style id="mfn-dnmc-style-css">
		@media only screen and (min-width: 1073px){body:not(.header-simple) #Top_bar #menu{display:block!important}.tr-menu #Top_bar #menu{background:none!important}#Top_bar .menu > li > ul.mfn-megamenu{width:984px}#Top_bar .menu > li > ul.mfn-megamenu > li{float:left}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-1{width:100%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-2{width:50%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-3{width:33.33%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-4{width:25%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-5{width:20%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-6{width:16.66%}#Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto;border-width:0 1px 0 0}#Top_bar .menu > li > ul.mfn-megamenu > li:last-child > ul{border:0}#Top_bar .menu > li > ul.mfn-megamenu > li > ul li{width:auto}#Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400;background:none}#Top_bar .menu > li > ul.mfn-megamenu a .menu-arrow{display:none}.menuo-right #Top_bar .menu > li > ul.mfn-megamenu{left:auto;right:0}.menuo-right #Top_bar .menu > li > ul.mfn-megamenu-bg{box-sizing:border-box}#Top_bar .menu > li > ul.mfn-megamenu-bg{padding:20px 166px 20px 20px;background-repeat:no-repeat;background-position:right bottom}.rtl #Top_bar .menu > li > ul.mfn-megamenu-bg{padding-left:166px;padding-right:20px;background-position:left bottom}#Top_bar .menu > li > ul.mfn-megamenu-bg > li{background:none}#Top_bar .menu > li > ul.mfn-megamenu-bg > li a{border:none}#Top_bar .menu > li > ul.mfn-megamenu-bg > li > ul{background:none!important;-webkit-box-shadow:0 0 0 0;-moz-box-shadow:0 0 0 0;box-shadow:0 0 0 0}.mm-vertical #Top_bar .container{position:relative;}.mm-vertical #Top_bar .top_bar_left{position:static;}.mm-vertical #Top_bar .menu > li ul{box-shadow:0 0 0 0 transparent!important;background-image:none;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu{width:98%!important;margin:0 1%;padding:20px 0;}.mm-vertical.header-plain #Top_bar .menu > li > ul.mfn-megamenu{width:100%!important;margin:0;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li{display:table-cell;float:none!important;width:10%;padding:0 15px;border-right:1px solid rgba(0, 0, 0, 0.05);}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:last-child{border-right-width:0}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li.hide-border{border-right-width:0}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li a{border-bottom-width:0;padding:9px 15px;line-height:120%;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{font-weight:700;}.rtl .mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:first-child{border-right-width:0}.rtl .mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:last-child{border-right-width:1px}.header-plain:not(.menuo-right) #Header .top_bar_left{width:auto!important}.header-stack.header-center #Top_bar #menu{display:inline-block!important}.header-simple #Top_bar #menu{display:none;height:auto;width:300px;bottom:auto;top:100%;right:1px;position:absolute;margin:0}.header-simple #Header a.responsive-menu-toggle{display:block;right:10px}.header-simple #Top_bar #menu > ul{width:100%;float:left}.header-simple #Top_bar #menu ul li{width:100%;padding-bottom:0;border-right:0;position:relative}.header-simple #Top_bar #menu ul li a{padding:0 20px;margin:0;display:block;height:auto;line-height:normal;border:none}.header-simple #Top_bar #menu ul li a:after{display:none}.header-simple #Top_bar #menu ul li a span{border:none;line-height:44px;display:inline;padding:0}.header-simple #Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:0;top:0;width:44px;height:44px;line-height:44px;font-size:30px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}.header-simple #Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}.header-simple #Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}.header-simple #Top_bar #menu ul li.hover a{border-bottom:0}.header-simple #Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}.header-simple #Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin:0!important;width:auto!important;background-image:none}.header-simple #Top_bar #menu ul li ul li{width:100%!important;display:block;padding:0;}.header-simple #Top_bar #menu ul li ul li a{padding:0 20px 0 30px}.header-simple #Top_bar #menu ul li ul li a .menu-arrow{display:none}.header-simple #Top_bar #menu ul li ul li a span{padding:0}.header-simple #Top_bar #menu ul li ul li a span:after{display:none!important}.header-simple #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}.header-simple #Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}.header-simple #Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}.header-simple #Top_bar #menu ul li ul li ul li a{padding:0 20px 0 40px}.rtl.header-simple #Top_bar #menu{left:1px;right:auto}.rtl.header-simple #Top_bar a.responsive-menu-toggle{left:10px;right:auto}.rtl.header-simple #Top_bar #menu ul li.submenu .menu-toggle{left:0;right:auto}.rtl.header-simple #Top_bar #menu ul li ul{left:auto!important;right:0!important}.rtl.header-simple #Top_bar #menu ul li ul li a{padding:0 30px 0 20px}.rtl.header-simple #Top_bar #menu ul li ul li ul li a{padding:0 40px 0 20px}.menu-highlight #Top_bar .menu > li{margin:0 2px}.menu-highlight:not(.header-creative) #Top_bar .menu > li > a{margin:20px 0;padding:0;-webkit-border-radius:5px;border-radius:5px}.menu-highlight #Top_bar .menu > li > a:after{display:none}.menu-highlight #Top_bar .menu > li > a span:not(.description){line-height:50px}.menu-highlight #Top_bar .menu > li > a span.description{display:none}.menu-highlight.header-stack #Top_bar .menu > li > a{margin:10px 0!important}.menu-highlight.header-stack #Top_bar .menu > li > a span:not(.description){line-height:40px}.menu-highlight.header-transparent #Top_bar .menu > li > a{margin:5px 0}.menu-highlight.header-simple #Top_bar #menu ul li,.menu-highlight.header-creative #Top_bar #menu ul li{margin:0}.menu-highlight.header-simple #Top_bar #menu ul li > a,.menu-highlight.header-creative #Top_bar #menu ul li > a{-webkit-border-radius:0;border-radius:0}.menu-highlight:not(.header-fixed):not(.header-simple) #Top_bar.is-sticky .menu > li > a{margin:10px 0!important;padding:5px 0!important}.menu-highlight:not(.header-fixed):not(.header-simple) #Top_bar.is-sticky .menu > li > a span{line-height:30px!important}.header-modern.menu-highlight.menuo-right .menu_wrapper{margin-right:20px}.menu-line-below #Top_bar .menu > li > a:after{top:auto;bottom:-4px}.menu-line-below #Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:-4px}.menu-line-below-80 #Top_bar:not(.is-sticky) .menu > li > a:after{height:4px;left:10%;top:50%;margin-top:20px;width:80%}.menu-line-below-80-1 #Top_bar:not(.is-sticky) .menu > li > a:after{height:1px;left:10%;top:50%;margin-top:20px;width:80%}.menu-link-color #Top_bar .menu > li > a:after{display:none!important}.menu-arrow-top #Top_bar .menu > li > a:after{background:none repeat scroll 0 0 rgba(0,0,0,0)!important;border-color:#ccc transparent transparent;border-style:solid;border-width:7px 7px 0;display:block;height:0;left:50%;margin-left:-7px;top:0!important;width:0}.menu-arrow-top #Top_bar.is-sticky .menu > li > a:after{top:0!important}.menu-arrow-bottom #Top_bar .menu > li > a:after{background:none!important;border-color:transparent transparent #ccc;border-style:solid;border-width:0 7px 7px;display:block;height:0;left:50%;margin-left:-7px;top:auto;bottom:0;width:0}.menu-arrow-bottom #Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:0}.menuo-no-borders #Top_bar .menu > li > a span{border-width:0!important}.menuo-no-borders #Header_creative #Top_bar .menu > li > a span{border-bottom-width:0}.menuo-no-borders.header-plain #Top_bar a#header_cart,.menuo-no-borders.header-plain #Top_bar a#search_button,.menuo-no-borders.header-plain #Top_bar .wpml-languages,.menuo-no-borders.header-plain #Top_bar a.action_button{border-width:0}.menuo-right #Top_bar .menu_wrapper{float:right}.menuo-right.header-stack:not(.header-center) #Top_bar .menu_wrapper{margin-right:150px}body.header-creative{padding-left:50px}body.header-creative.header-open{padding-left:250px}body.error404,body.under-construction,body.template-blank{padding-left:0!important}.header-creative.footer-fixed #Footer,.header-creative.footer-sliding #Footer,.header-creative.footer-stick #Footer.is-sticky{box-sizing:border-box;padding-left:50px;}.header-open.footer-fixed #Footer,.header-open.footer-sliding #Footer,.header-creative.footer-stick #Footer.is-sticky{padding-left:250px;}.header-rtl.header-creative.footer-fixed #Footer,.header-rtl.header-creative.footer-sliding #Footer,.header-rtl.header-creative.footer-stick #Footer.is-sticky{padding-left:0;padding-right:50px;}.header-rtl.header-open.footer-fixed #Footer,.header-rtl.header-open.footer-sliding #Footer,.header-rtl.header-creative.footer-stick #Footer.is-sticky{padding-right:250px;}#Header_creative{background-color:#fff;position:fixed;width:250px;height:100%;left:-200px;top:0;z-index:9002;-webkit-box-shadow:2px 0 4px 2px rgba(0,0,0,.15);box-shadow:2px 0 4px 2px rgba(0,0,0,.15)}#Header_creative .container{width:100%}#Header_creative .creative-wrapper{opacity:0;margin-right:50px}#Header_creative a.creative-menu-toggle{display:block;width:34px;height:34px;line-height:34px;font-size:22px;text-align:center;position:absolute;top:10px;right:8px;border-radius:3px}.admin-bar #Header_creative a.creative-menu-toggle{top:42px}#Header_creative #Top_bar{position:static;width:100%}#Header_creative #Top_bar .top_bar_left{width:100%!important;float:none}#Header_creative #Top_bar .top_bar_right{width:100%!important;float:none;height:auto;margin-bottom:35px;text-align:center;padding:0 20px;top:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#Header_creative #Top_bar .top_bar_right:before{display:none}#Header_creative #Top_bar .top_bar_right_wrapper{top:0}#Header_creative #Top_bar .logo{float:none;text-align:center;margin:15px 0}#Header_creative #Top_bar #menu{background-color:transparent}#Header_creative #Top_bar .menu_wrapper{float:none;margin:0 0 30px}#Header_creative #Top_bar .menu > li{width:100%;float:none;position:relative}#Header_creative #Top_bar .menu > li > a{padding:0;text-align:center}#Header_creative #Top_bar .menu > li > a:after{display:none}#Header_creative #Top_bar .menu > li > a span{border-right:0;border-bottom-width:1px;line-height:38px}#Header_creative #Top_bar .menu li ul{left:100%;right:auto;top:0;box-shadow:2px 2px 2px 0 rgba(0,0,0,0.03);-webkit-box-shadow:2px 2px 2px 0 rgba(0,0,0,0.03)}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu{margin:0;width:700px!important;}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu > li > ul{left:0}#Header_creative #Top_bar .menu li ul li a{padding-top:9px;padding-bottom:8px}#Header_creative #Top_bar .menu li ul li ul{top:0}#Header_creative #Top_bar .menu > li > a span.description{display:block;font-size:13px;line-height:28px!important;clear:both}#Header_creative #Top_bar .search_wrapper{left:100%;top:auto;bottom:0}#Header_creative #Top_bar a#header_cart{display:inline-block;float:none;top:3px}#Header_creative #Top_bar a#search_button{display:inline-block;float:none;top:3px}#Header_creative #Top_bar .wpml-languages{display:inline-block;float:none;top:0}#Header_creative #Top_bar .wpml-languages.enabled:hover a.active{padding-bottom:11px}#Header_creative #Top_bar .action_button{display:inline-block;float:none;top:16px;margin:0}#Header_creative #Top_bar .banner_wrapper{display:block;text-align:center}#Header_creative #Top_bar .banner_wrapper img{max-width:100%;height:auto;display:inline-block}#Header_creative #Action_bar{display:none;position:absolute;bottom:0;top:auto;clear:both;padding:0 20px;box-sizing:border-box}#Header_creative #Action_bar .social{float:none;text-align:center;padding:5px 0 15px}#Header_creative #Action_bar .social li{margin-bottom:2px}#Header_creative .social li a{color:rgba(0,0,0,.5)}#Header_creative .social li a:hover{color:#000}#Header_creative .creative-social{position:absolute;bottom:10px;right:0;width:50px}#Header_creative .creative-social li{display:block;float:none;width:100%;text-align:center;margin-bottom:5px}.header-creative .fixed-nav.fixed-nav-prev{margin-left:50px}.header-creative.header-open .fixed-nav.fixed-nav-prev{margin-left:250px}.menuo-last #Header_creative #Top_bar .menu li.last ul{top:auto;bottom:0}.header-open #Header_creative{left:0}.header-open #Header_creative .creative-wrapper{opacity:1;margin:0!important;}.header-open #Header_creative .creative-menu-toggle,.header-open #Header_creative .creative-social{display:none}.header-open #Header_creative #Action_bar{display:block}body.header-rtl.header-creative{padding-left:0;padding-right:50px}.header-rtl #Header_creative{left:auto;right:-200px}.header-rtl #Header_creative .creative-wrapper{margin-left:50px;margin-right:0}.header-rtl #Header_creative a.creative-menu-toggle{left:8px;right:auto}.header-rtl #Header_creative .creative-social{left:0;right:auto}.header-rtl #Footer #back_to_top.sticky{right:125px}.header-rtl #popup_contact{right:70px}.header-rtl #Header_creative #Top_bar .menu li ul{left:auto;right:100%}.header-rtl #Header_creative #Top_bar .search_wrapper{left:auto;right:100%;}.header-rtl .fixed-nav.fixed-nav-prev{margin-left:0!important}.header-rtl .fixed-nav.fixed-nav-next{margin-right:50px}body.header-rtl.header-creative.header-open{padding-left:0;padding-right:250px!important}.header-rtl.header-open #Header_creative{left:auto;right:0}.header-rtl.header-open #Footer #back_to_top.sticky{right:325px}.header-rtl.header-open #popup_contact{right:270px}.header-rtl.header-open .fixed-nav.fixed-nav-next{margin-right:250px}#Header_creative.active{left:-1px;}.header-rtl #Header_creative.active{left:auto;right:-1px;}#Header_creative.active .creative-wrapper{opacity:1;margin:0}.header-creative .vc_row[data-vc-full-width]{padding-left:50px}.header-creative.header-open .vc_row[data-vc-full-width]{padding-left:250px}.header-open .vc_parallax .vc_parallax-inner { left:auto; width: calc(100% - 250px); }.header-open.header-rtl .vc_parallax .vc_parallax-inner { left:0; right:auto; }#Header_creative.scroll{height:100%;overflow-y:auto}#Header_creative.scroll:not(.dropdown) .menu li ul{display:none!important}#Header_creative.scroll #Action_bar{position:static}#Header_creative.dropdown{outline:none}#Header_creative.dropdown #Top_bar .menu_wrapper{float:left}#Header_creative.dropdown #Top_bar #menu ul li{position:relative;float:left}#Header_creative.dropdown #Top_bar #menu ul li a:after{display:none}#Header_creative.dropdown #Top_bar #menu ul li a span{line-height:38px;padding:0}#Header_creative.dropdown #Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:0;top:0;width:38px;height:38px;line-height:38px;font-size:26px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}#Header_creative.dropdown #Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}#Header_creative.dropdown #Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}#Header_creative.dropdown #Top_bar #menu ul li.hover a{border-bottom:0}#Header_creative.dropdown #Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}#Header_creative.dropdown #Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin-left:0!important;width:auto!important;background-image:none}#Header_creative.dropdown #Top_bar #menu ul li ul li{width:100%!important}#Header_creative.dropdown #Top_bar #menu ul li ul li a{padding:0 10px;text-align:center}#Header_creative.dropdown #Top_bar #menu ul li ul li a .menu-arrow{display:none}#Header_creative.dropdown #Top_bar #menu ul li ul li a span{padding:0}#Header_creative.dropdown #Top_bar #menu ul li ul li a span:after{display:none!important}#Header_creative.dropdown #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}#Header_creative.dropdown #Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}#Header_creative.dropdown #Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}#Header_creative{transition: left .5s ease-in-out, right .5s ease-in-out;}#Header_creative .creative-wrapper{transition: opacity .5s ease-in-out, margin 0s ease-in-out .5s;}#Header_creative.active .creative-wrapper{transition: opacity .5s ease-in-out, margin 0s ease-in-out;}}@media only screen and (min-width: 1073px){#Top_bar.is-sticky{position:fixed!important;width:100%;left:0;top:-60px;height:60px;z-index:701;background:#fff;opacity:.97;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.1)}.layout-boxed.header-boxed #Top_bar.is-sticky{max-width:1073px;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}#Top_bar.is-sticky .top_bar_left,#Top_bar.is-sticky .top_bar_right,#Top_bar.is-sticky .top_bar_right:before{background:none}#Top_bar.is-sticky .top_bar_right{top:-4px;height:auto;}#Top_bar.is-sticky .top_bar_right_wrapper{top:15px}.header-plain #Top_bar.is-sticky .top_bar_right_wrapper{top:0}#Top_bar.is-sticky .logo{width:auto;margin:0 30px 0 20px;padding:0}#Top_bar.is-sticky #logo,#Top_bar.is-sticky .custom-logo-link{padding:5px 0!important;height:50px!important;line-height:50px!important}.logo-no-sticky-padding #Top_bar.is-sticky #logo{height:60px!important;line-height:60px!important}#Top_bar.is-sticky #logo img.logo-main{display:none}#Top_bar.is-sticky #logo img.logo-sticky{display:inline;max-height:35px;}#Top_bar.is-sticky .menu_wrapper{clear:none}#Top_bar.is-sticky .menu_wrapper .menu > li > a{padding:15px 0}#Top_bar.is-sticky .menu > li > a,#Top_bar.is-sticky .menu > li > a span{line-height:30px}#Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:-4px}#Top_bar.is-sticky .menu > li > a span.description{display:none}#Top_bar.is-sticky .secondary_menu_wrapper,#Top_bar.is-sticky .banner_wrapper{display:none}.header-overlay #Top_bar.is-sticky{display:none}.sticky-dark #Top_bar.is-sticky,.sticky-dark #Top_bar.is-sticky #menu{background:rgba(0,0,0,.8)}.sticky-dark #Top_bar.is-sticky .menu > li > a{color:#fff}.sticky-dark #Top_bar.is-sticky .top_bar_right a:not(.action_button){color:rgba(255,255,255,.8)}.sticky-dark #Top_bar.is-sticky .wpml-languages a.active,.sticky-dark #Top_bar.is-sticky .wpml-languages ul.wpml-lang-dropdown{background:rgba(0,0,0,0.1);border-color:rgba(0,0,0,0.1)}.sticky-white #Top_bar.is-sticky,.sticky-white #Top_bar.is-sticky #menu{background:rgba(255,255,255,.8)}.sticky-white #Top_bar.is-sticky .menu > li > a{color:#222}.sticky-white #Top_bar.is-sticky .top_bar_right a:not(.action_button){color:rgba(0,0,0,.8)}.sticky-white #Top_bar.is-sticky .wpml-languages a.active,.sticky-white #Top_bar.is-sticky .wpml-languages ul.wpml-lang-dropdown{background:rgba(255,255,255,0.1);border-color:rgba(0,0,0,0.1)}}@media only screen and (min-width: 768px) and (max-width: 1073px){.header_placeholder{height:0!important}}@media only screen and (max-width: 1072px){#Top_bar #menu{display:none;height:auto;width:300px;bottom:auto;top:100%;right:1px;position:absolute;margin:0}#Top_bar a.responsive-menu-toggle{display:block}#Top_bar #menu > ul{width:100%;float:left}#Top_bar #menu ul li{width:100%;padding-bottom:0;border-right:0;position:relative}#Top_bar #menu ul li a{padding:0 25px;margin:0;display:block;height:auto;line-height:normal;border:none}#Top_bar #menu ul li a:after{display:none}#Top_bar #menu ul li a span{border:none;line-height:44px;display:inline;padding:0}#Top_bar #menu ul li a span.description{margin:0 0 0 5px}#Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:15px;top:0;width:44px;height:44px;line-height:44px;font-size:30px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}#Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}#Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}#Top_bar #menu ul li.hover a{border-bottom:0}#Top_bar #menu ul li a span:after{display:none!important}#Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}#Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin-left:0!important;width:auto!important;background-image:none!important;box-shadow:0 0 0 0 transparent!important;-webkit-box-shadow:0 0 0 0 transparent!important}#Top_bar #menu ul li ul li{width:100%!important}#Top_bar #menu ul li ul li a{padding:0 20px 0 35px}#Top_bar #menu ul li ul li a .menu-arrow{display:none}#Top_bar #menu ul li ul li a span{padding:0}#Top_bar #menu ul li ul li a span:after{display:none!important}#Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}#Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}#Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}#Top_bar #menu ul li ul li ul li a{padding:0 20px 0 45px}.rtl #Top_bar #menu{left:1px;right:auto}.rtl #Top_bar a.responsive-menu-toggle{left:20px;right:auto}.rtl #Top_bar #menu ul li.submenu .menu-toggle{left:15px;right:auto;border-left:none;border-right:1px solid #eee}.rtl #Top_bar #menu ul li ul{left:auto!important;right:0!important}.rtl #Top_bar #menu ul li ul li a{padding:0 30px 0 20px}.rtl #Top_bar #menu ul li ul li ul li a{padding:0 40px 0 20px}.header-stack .menu_wrapper a.responsive-menu-toggle{position:static!important;margin:11px 0!important}.header-stack .menu_wrapper #menu{left:0;right:auto}.rtl.header-stack #Top_bar #menu{left:auto;right:0}.admin-bar #Header_creative{top:32px}.header-creative.layout-boxed{padding-top:85px}.header-creative.layout-full-width #Wrapper{padding-top:60px}#Header_creative{position:fixed;width:100%;left:0!important;top:0;z-index:1001}#Header_creative .creative-wrapper{display:block!important;opacity:1!important}#Header_creative .creative-menu-toggle,#Header_creative .creative-social{display:none!important;opacity:1!important}#Header_creative #Top_bar{position:static;width:100%}#Header_creative #Top_bar #logo,#Header_creative #Top_bar .custom-logo-link{height:50px;line-height:50px;padding:5px 0}#Header_creative #Top_bar #logo img.logo-sticky{max-height:40px!important}#Header_creative #logo img.logo-main{display:none}#Header_creative #logo img.logo-sticky{display:inline-block}.logo-no-sticky-padding #Header_creative #Top_bar #logo{height:60px;line-height:60px;padding:0}.logo-no-sticky-padding #Header_creative #Top_bar #logo img.logo-sticky{max-height:60px!important}#Header_creative #Action_bar{display:none}#Header_creative #Top_bar .top_bar_right{height:60px;top:0}#Header_creative #Top_bar .top_bar_right:before{display:none}#Header_creative #Top_bar .top_bar_right_wrapper{top:0;padding-top:9px}#Header_creative.scroll{overflow:visible!important}}html{background-color: #ffffff;}#Wrapper,#Content{background-color: #ffffff;}body, button, span.date_label, .timeline_items li h3 span, input[type="submit"], input[type="reset"], input[type="button"],input[type="text"], input[type="password"], input[type="tel"], input[type="email"], textarea, select, .offer_li .title h3 {font-family: "Tahoma", Arial, Tahoma, sans-serif;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-family: "Tahoma", Arial, Tahoma, sans-serif;}#Subheader .title {font-family: "Tahoma", Arial, Tahoma, sans-serif;}h1, h2, h3, h4, .text-logo #logo {font-family: "Tahoma", Arial, Tahoma, sans-serif;}h5, h6 {font-family: "Tahoma", Arial, Tahoma, sans-serif;}blockquote {font-family: "Tahoma", Arial, Tahoma, sans-serif;}.chart_box .chart .num, .counter .desc_wrapper .number-wrapper, .how_it_works .image .number,.pricing-box .plan-header .price, .quick_fact .number-wrapper, .woocommerce .product div.entry-summary .price {font-family: "Tahoma", Arial, Tahoma, sans-serif;}body {font-size: 14px;line-height: 25px;font-weight: 400;letter-spacing: 0px;}.big {font-size: 16px;line-height: 26px;font-weight: 500;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a{font-size: 15px;font-weight: 500;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 22.5px;}#Subheader .title {font-size: 64px;line-height: 70px;font-weight: 500;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 64px;line-height: 70px;font-weight: 500;letter-spacing: 0px;}h2 {font-size: 38px;line-height: 50px;font-weight: 500;letter-spacing: 0px;}h3 {font-size: 28px;line-height: 38px;font-weight: 500;letter-spacing: 0px;}h4 {font-size: 22px;line-height: 32px;font-weight: 500;letter-spacing: 0px;}h5 {font-size: 15px;line-height: 20px;font-weight: 700;letter-spacing: 0px;}h6 {font-size: 14px;line-height: 25px;font-weight: 500;letter-spacing: 0px;}#Intro .intro-title {font-size: 70px;line-height: 70px;font-weight: 400;letter-spacing: 0px;}@media only screen and (min-width: 768px) and (max-width: 959px){body {font-size: 13px;line-height: 21px;letter-spacing: 0px;}.big {font-size: 14px;line-height: 22px;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-size: 13px;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 19.5px;letter-spacing: 0px;}#Subheader .title {font-size: 54px;line-height: 60px;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 54px;line-height: 60px;letter-spacing: 0px;}h2 {font-size: 32px;line-height: 43px;letter-spacing: 0px;}h3 {font-size: 24px;line-height: 32px;letter-spacing: 0px;}h4 {font-size: 19px;line-height: 27px;letter-spacing: 0px;}h5 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h6 {font-size: 13px;line-height: 21px;letter-spacing: 0px;}#Intro .intro-title {font-size: 60px;line-height: 60px;letter-spacing: 0px;}blockquote { font-size: 15px;}.chart_box .chart .num { font-size: 45px; line-height: 45px; }.counter .desc_wrapper .number-wrapper { font-size: 45px; line-height: 45px;}.counter .desc_wrapper .title { font-size: 14px; line-height: 18px;}.faq .question .title { font-size: 14px; }.fancy_heading .title { font-size: 38px; line-height: 38px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 32px; line-height: 32px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 32px; line-height: 32px; }.pricing-box .plan-header h2 { font-size: 27px; line-height: 27px; }.pricing-box .plan-header .price > span { font-size: 40px; line-height: 40px; }.pricing-box .plan-header .price sup.currency { font-size: 18px; line-height: 18px; }.pricing-box .plan-header .price sup.period { font-size: 14px; line-height: 14px;}.quick_fact .number { font-size: 80px; line-height: 80px;}.trailer_box .desc h2 { font-size: 27px; line-height: 27px; }.widget > h3 { font-size: 17px; line-height: 20px; }}@media only screen and (min-width: 480px) and (max-width: 767px){body {font-size: 13px;line-height: 19px;letter-spacing: 0px;}.big {font-size: 13px;line-height: 20px;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-size: 13px;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 19.5px;letter-spacing: 0px;}#Subheader .title {font-size: 48px;line-height: 53px;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 48px;line-height: 53px;letter-spacing: 0px;}h2 {font-size: 29px;line-height: 38px;letter-spacing: 0px;}h3 {font-size: 21px;line-height: 29px;letter-spacing: 0px;}h4 {font-size: 17px;line-height: 24px;letter-spacing: 0px;}h5 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h6 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}#Intro .intro-title {font-size: 53px;line-height: 53px;letter-spacing: 0px;}blockquote { font-size: 14px;}.chart_box .chart .num { font-size: 40px; line-height: 40px; }.counter .desc_wrapper .number-wrapper { font-size: 40px; line-height: 40px;}.counter .desc_wrapper .title { font-size: 13px; line-height: 16px;}.faq .question .title { font-size: 13px; }.fancy_heading .title { font-size: 34px; line-height: 34px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 28px; line-height: 28px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 28px; line-height: 28px; }.pricing-box .plan-header h2 { font-size: 24px; line-height: 24px; }.pricing-box .plan-header .price > span { font-size: 34px; line-height: 34px; }.pricing-box .plan-header .price sup.currency { font-size: 16px; line-height: 16px; }.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}.quick_fact .number { font-size: 70px; line-height: 70px;}.trailer_box .desc h2 { font-size: 24px; line-height: 24px; }.widget > h3 { font-size: 16px; line-height: 19px; }}@media only screen and (max-width: 479px){body {font-size: 13px;line-height: 19px;letter-spacing: 0px;}.big {font-size: 13px;line-height: 19px;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-size: 13px;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 19.5px;letter-spacing: 0px;}#Subheader .title {font-size: 38px;line-height: 42px;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 38px;line-height: 42px;letter-spacing: 0px;}h2 {font-size: 23px;line-height: 30px;letter-spacing: 0px;}h3 {font-size: 17px;line-height: 23px;letter-spacing: 0px;}h4 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h5 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h6 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}#Intro .intro-title {font-size: 42px;line-height: 42px;letter-spacing: 0px;}blockquote { font-size: 13px;}.chart_box .chart .num { font-size: 35px; line-height: 35px; }.counter .desc_wrapper .number-wrapper { font-size: 35px; line-height: 35px;}.counter .desc_wrapper .title { font-size: 13px; line-height: 26px;}.faq .question .title { font-size: 13px; }.fancy_heading .title { font-size: 30px; line-height: 30px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 26px; line-height: 26px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 26px; line-height: 26px; }.pricing-box .plan-header h2 { font-size: 21px; line-height: 21px; }.pricing-box .plan-header .price > span { font-size: 32px; line-height: 32px; }.pricing-box .plan-header .price sup.currency { font-size: 14px; line-height: 14px; }.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}.quick_fact .number { font-size: 60px; line-height: 60px;}.trailer_box .desc h2 { font-size: 21px; line-height: 21px; }.widget > h3 { font-size: 15px; line-height: 18px; }}.with_aside .sidebar.columns {width: 23%;}.with_aside .sections_group {width: 77%;}.aside_both .sidebar.columns {width: 18%;}.aside_both .sidebar.sidebar-1{margin-left: -82%;}.aside_both .sections_group {width: 64%;margin-left: 18%;}@media only screen and (min-width:1240px){#Wrapper, .with_aside .content_wrapper {max-width: 1080px;}.section_wrapper, .container {max-width: 1060px;}.layout-boxed.header-boxed #Top_bar.is-sticky{max-width: 1080px;}}@media only screen and (max-width: 767px){.section_wrapper,.container,.four.columns .widget-area { max-width: 480px !important; }}#Top_bar #logo,.header-fixed #Top_bar #logo,.header-plain #Top_bar #logo,.header-transparent #Top_bar #logo {height: 112px;line-height: 112px;padding: 0px 0;}.logo-overflow #Top_bar:not(.is-sticky) .logo {height: 112px;}#Top_bar .menu > li > a {padding: 26px 0;}.menu-highlight:not(.header-creative) #Top_bar .menu > li > a {margin: 31px 0;}.header-plain:not(.menu-highlight) #Top_bar .menu > li > a span:not(.description) {line-height: 112px;}.header-fixed #Top_bar .menu > li > a {padding: 41px 0;}#Top_bar .top_bar_right,.header-plain #Top_bar .top_bar_right {height: 112px;}#Top_bar .top_bar_right_wrapper {top: 36px;}.header-plain #Top_bar a#header_cart,.header-plain #Top_bar a#search_button,.header-plain #Top_bar .wpml-languages,.header-plain #Top_bar a.action_button {line-height: 112px;}.logo-overflow #Top_bar.is-sticky #logo{padding:0!important;}@media only screen and (max-width: 767px){#Top_bar a.responsive-menu-toggle {top: 66px;}}.twentytwenty-before-label::before { content: "Before";}.twentytwenty-after-label::before { content: "After";}#Side_slide{right:-250px;width:250px;}#Side_slide.left{left:-250px;}.blog-teaser li .desc-wrapper .desc{background-position-y:-1px;}
	</style>
	<!-- style | custom css | theme options -->
	<style id="mfn-dnmc-theme-css">
		.title{
			color:#0f638b; 
			font-family: Verdana;
		}

	</style>
	<!-- style | custom css | page options -->
	<style id="mfn-dnmc-page-css">
		@media (max-width: 767px) {
			body:not(.template-slider):not(.header-simple) #Header {
				min-height: 100px; !important;
				background-position: center 202px;
			}
		}

		body:not(.template-slider) #Header {
			min-height: 100px; !important;
		}
	</style>
	<meta name="generator" content="Powered by Slider Revolution 6.1.0 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
	<link rel="icon" href="https://mundohoteles.com.co/wp-content/uploads/2019/08/cropped-logo1-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://mundohoteles.com.co/wp-content/uploads/2019/08/cropped-logo1-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="https://mundohoteles.com.co/wp-content/uploads/2019/08/cropped-logo1-180x180.png" />
	<meta name="msapplication-TileImage" content="https://mundohoteles.com.co/wp-content/uploads/2019/08/cropped-logo1-270x270.png" />
	<script type="text/javascript">function setREVStartSize(a){try{var b,c=document.getElementById(a.c).parentNode.offsetWidth;if(c=0===c||isNaN(c)?window.innerWidth:c,a.tabw=void 0===a.tabw?0:parseInt(a.tabw),a.thumbw=void 0===a.thumbw?0:parseInt(a.thumbw),a.tabh=void 0===a.tabh?0:parseInt(a.tabh),a.thumbh=void 0===a.thumbh?0:parseInt(a.thumbh),a.tabhide=void 0===a.tabhide?0:parseInt(a.tabhide),a.thumbhide=void 0===a.thumbhide?0:parseInt(a.thumbhide),a.mh=void 0===a.mh||""==a.mh?0:a.mh,"fullscreen"===a.layout||"fullscreen"===a.l)b=Math.max(a.mh,window.innerHeight);else{for(var d in a.gw=Array.isArray(a.gw)?a.gw:[a.gw],a.rl)(void 0===a.gw[d]||0===a.gw[d])&&(a.gw[d]=a.gw[d-1]);for(var d in a.gh=void 0===a.el||""===a.el||Array.isArray(a.el)&&0==a.el.length?a.gh:a.el,a.gh=Array.isArray(a.gh)?a.gh:[a.gh],a.rl)(void 0===a.gh[d]||0===a.gh[d])&&(a.gh[d]=a.gh[d-1]);var e,f=Array(a.rl.length),g=0;for(var d in a.tabw=a.tabhide>=c?0:a.tabw,a.thumbw=a.thumbhide>=c?0:a.thumbw,a.tabh=a.tabhide>=c?0:a.tabh,a.thumbh=a.thumbhide>=c?0:a.thumbh,a.rl)f[d]=a.rl[d]<window.innerWidth?0:a.rl[d];for(var d in e=f[0],f)e>f[d]&&0<f[d]&&(e=f[d],g=d);var h=c>a.gw[g]+a.tabw+a.thumbw?1:(c-(a.tabw+a.thumbw))/a.gw[g];b=a.gh[g]*h+(a.tabh+a.thumbh)}void 0===window.rs_init_css&&(window.rs_init_css=document.head.appendChild(document.createElement("style"))),document.getElementById(a.c).height=b,window.rs_init_css.innerHTML+="#"+a.c+"_wrapper { height: "+b+"px }"}catch(a){console.log("Failure at Presize of Slider:"+a)}};</script>

</head>

<body class="page-template-default page page-id-352 wp-custom-logo  color-blue style-simple button-default layout-full-width if-zoom if-border-hide no-shadows header-split header-boxed sticky-header sticky-white ab-hide subheader-both-center menu-line-below-80-1 menuo-right menuo-no-borders logo-valign-top logo-overflow footer-hide footer-copy-center no-section-bg-tablet mobile-tb-hide mobile-side-slide mobile-menu mobile-mini-mr-lr tr-header tr-menu be-reg-2108">

	<!-- mfn_hook_top --><!-- mfn_hook_top -->
	
	
	<div id="Wrapper">

		
		
		<div id="Header_wrapper" class="" >

			<header id="Header">


				<!-- .header_placeholder 4sticky  -->
				<div class="header_placeholder"></div>

				<div id="Top_bar" class="loading">

					<div class="container">
						<div class="column one">

							<div class="top_bar_left clearfix">

								<!-- Logo -->
								<div class="logo"><a id="logo" href="https://mundohoteles.com.co" title="Mundo Hoteles" data-height="112" data-padding="0">


									<img class="logo-main scale-with-grid" src="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-retina="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-height="96" alt="Sin título d" data-no-retina />

									<img class="logo-sticky scale-with-grid" src="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-retina="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-height="96" alt="Sin título d" data-no-retina />

									<img class="logo-mobile scale-with-grid" src="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-retina="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-height="96" alt="Sin título d" data-no-retina />

									<img class="logo-mobile-sticky scale-with-grid" src="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-retina="https://mundohoteles.com.co/webprueba/wp-content/uploads/2019/08/Sin-título-d-2.png" data-height="96" alt="Sin título d" data-no-retina />

								</a></div>


								<div class="menu_wrapper">
									<nav id="menu"><ul id="menu-menu-left" class="menu menu-main menu_left"><li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="https://mundohoteles.com.co/"><span>HOME</span></a></li>
										<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://mundohoteles.com.co/somos/"><span>SOMOS MUNDO HOTELES</span></a></li>
									</ul><ul id="menu-menu-right" class="menu menu-main menu_right"><li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://mundohoteles.com.co/clientes/"><span>CLIENTES MUNDO HOTELES</span></a></li>
										<li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://mundohoteles.com.co/contactos/"><span>CONTACTO</span></a></li>
									</ul><ul id="menu-menu-left-1" class="menu menu-mobile"><li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-123"><a href="https://mundohoteles.com.co/"><span>HOME</span></a></li>
										<li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-122"><a href="https://mundohoteles.com.co/somos/"><span>SOMOS MUNDO HOTELES</span></a></li>
									</ul></nav><a class="responsive-menu-toggle " href="#"><i class="icon-menu-fine"></i></a>				</div>

									<div class="secondary_menu_wrapper">
										<!-- #secondary-menu -->
										<nav id="secondary-menu" class="menu-menu-right-container"><ul id="menu-menu-right-1" class="secondary-menu"><li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125"><a href="https://mundohoteles.com.co/clientes/">CLIENTES MUNDO HOTELES</a></li>
											<li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124"><a href="https://mundohoteles.com.co/contactos/">CONTACTO</a></li>
										</ul></nav>				</div>

										<div class="banner_wrapper">
										</div>

										<div class="search_wrapper">
											<!-- #searchform -->


											<form method="get" id="searchform" action="https://mundohoteles.com.co/">


												<i class="icon_search icon-search-fine"></i>
												<a href="#" class="icon_close"><i class="icon-cancel-fine"></i></a>

												<input type="text" class="field" name="s" placeholder="Enter your search" />
												<input type="submit" class="submit" value="" style="display:none" />

											</form>

										</div>

									</div>


								</div>
							</div>
						</div>
					</header>

				</div>


				<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
				<div id="Content">
					<div class="content_wrapper clearfix">

						<div class="sections_group">

							<div class="entry-content" itemprop="mainContentOfPage">

								<!--<div class="section mcb-section mcb-section-53e4688c1  full-screen equal-height-wrap bg-cover"  style="padding-top:50px; padding-bottom:100px; background-color:" >
									<div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-le7ujedwh one  valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-fjavgl4bw one-third column_image"><div class="image_frame image_item scale-with-grid no_border" ><div class="image_wrapper"><a href="https://mundohoteles.com.co/clientes/beneficios/peru-basico.php"  ><div class="mask"></div><img class="scale-with-grid" src="https://mundohoteles.com.co/wp-content/uploads/2019/09/BannerP1.jpg" alt="BannerP1" title="BannerP1" width="720" height="300"/></a>
									<div class="image_links double"><a href="https://mundohoteles.com.co/wp-content/uploads/2019/09/BannerP1.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="https://mundohoteles.com.co/clientes/beneficios/peru-basico.php" class="link" ><i class="icon-link"></i></a></div></div></div>
								</div>-->
								<?php
								$Q="SELECT * from Paquetes where Tipo='Internacional'";
								$cont=0;
								foreach ($db->query($Q) as $Row) {
									$cont++;
									if($cont==1)
									{
										?>
										<div class="section mcb-section mcb-section-53e4688c1  full-screen equal-height-wrap bg-cover"  style="padding-top:50px; padding-bottom:100px; background-color:" >
											<div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-le7ujedwh one  valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-fjavgl4bw one-third column_image"><div class="image_frame image_item scale-with-grid no_border" ><div class="image_wrapper"><a href="https://mundohoteles.com.co/clientes/beneficios/Paquete.php?id=<?=$Row["IdPaquete"]?>"  ><div class="mask"></div><img class="scale-with-grid" src="https://mundohoteles.com.co/clientes/beneficios/Paquetes/Paquete1<?=$Row["IdPaquete"]?>.jpg" alt="BannerP1" title="BannerP1" width="720" height="300"/></a>
											<div class="image_links double"><a href="https://mundohoteles.com.co/clientes/beneficios/Paquete.php?id=<?=$Row["IdPaquete"]?>" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="https://mundohoteles.com.co/clientes/beneficios/Paquete.php?id=<?=$Row['IdPaquete']?>" class="link" ><i class="icon-link"></i></a></div></div></div>
										</div>
										<?php
									}else
									{
										?>
										<div class="column mcb-column mcb-item-7cpygqbcj one-third column_image">
											<div class="image_frame image_item scale-with-grid no_border" ><div class="image_wrapper"><a href="https://mundohoteles.com.co/clientes/beneficios/Paquete.php?id=<?=$Row['IdPaquete']?>"  ><div class="mask"></div><img class="scale-with-grid" src="https://mundohoteles.com.co/clientes/beneficios/Paquetes/Paquete1<?=$Row["IdPaquete"]?>.jpg" alt="Banner1 (9)" title="Banner1 (9)" width="720" height="300"/></a><div class="image_links double"><a href="https://mundohoteles.com.co/clientes/beneficios/Paquetes/Paquete1<?=$Row["IdPaquete"]?>.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="https://mundohoteles.com.co/clientes/beneficios/Paquete.php?id=<?=$Row['IdPaquete']?>" class="link" ><i class="icon-link"></i></a></div></div></div>
										</div>
										<?php
									}
									
								}
								?>

								
								<!---->

							</div></div><div class="section the_content no_content"><div class="section_wrapper"><div class="the_content_wrapper"></div></div></div>
<div class="section section-page-footer">
	<div class="section_wrapper clearfix">

		<div class="column one page-pager">
		</div>

	</div>
</div>

</div>


</div>


</div>
</div>

<div class="section mcb-section mcb-section-55bf94e29 [rev_slider usage=" style="padding-top:0px; padding-bottom:0px; background-color:#0f638b" ]"="" alias="ecobeef" modal"=""><div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-5c241ad30 one  valign-top clearfix" style=""><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-f8c3ca5ba one column_placeholder"><div class="placeholder">&nbsp;</div></div><div class="column mcb-column mcb-item-273abe941 one-second column_column column-margin-0px"><div class="column_attr clearfix align_left" style=" background-color:#0f638b;"><h3 style="color: #fff;">https://mundohoteles.com.co/</h3>
	<h3 style="color: #fff;">reservas@mundohoteles.com.co</h3>
	<h3 style="color: #fff;"> 1) 756-8277 / calle 123 # 7-51 Ofi. 1201</h3>
	<h3 style="color: #fff;"> Edificio Kaiwa - Bogotá, D.C </h3></div></div><div class="column mcb-column mcb-item-568b52ac4 one-second column_column column-margin-0px"><div class="column_attr clearfix align_right" style=" background-color:#0f638b;"><a style=" color: #fff; padding-bottom: 3px;" href="https://mundohoteles.com.co/webprueba/">HOME</a>
		<br>
		<a style=" color: #fff; padding-bottom: 3px;" href="https://mundohoteles.com.co/webprueba/somos//">SOMOS</a>
		<br>
		<a style=" color: #fff; padding-bottom: 3px;" href="https://mundohoteles.com.co/webprueba/clientes/">CLIENTES</a>
		<br>
		<a style=" color: #fff; padding-bottom: 3px;" href="https://mundohoteles.com.co/webprueba/contactos/">CONTACTO</a></div></div></div></div></div></div>
		<!-- mfn_hook_content_after --><!-- mfn_hook_content_after -->

	</div>

	<div id="Side_slide" class="right dark" data-width="250"><div class="close-wrapper"><a href="#" class="close"><i class="icon-cancel-fine"></i></a></div><div class="extras"><div class="extras-wrapper"></div></div><div class="lang-wrapper"></div><div class="menu_wrapper"></div><ul class="social"></ul></div><div id="body_overlay"></div>
	<a id="back_to_top" class="button button_js sticky scroll" href=""><i class="icon-up-open-big"></i></a>

	<!-- mfn_hook_bottom --><!-- mfn_hook_bottom -->
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wpcf7 = {"apiSettings":{"root":"https:\/\/mundohoteles.com.co\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.4'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var mfn = {"mobileInit":"1073","parallax":"translate3d","responsive":"1","retinaJS":"0","lightbox":{"disable":false,"disableMobile":false,"title":false},"slider":{"blog":0,"clients":0,"offer":0,"portfolio":0,"shop":0,"slider":0,"testimonials":0},"ajax":"https:\/\/mundohoteles.com.co\/wp-admin\/admin-ajax.php"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/themes/betheme/js/plugins.js?ver=21.0.8'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/themes/betheme/js/menu.js?ver=21.0.8'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/themes/betheme/assets/animations/animations.min.js?ver=21.0.8'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/themes/betheme/assets/jplayer/jplayer.min.js?ver=21.0.8'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/themes/betheme/js/parallax/translate3d.js?ver=21.0.8'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-content/themes/betheme/js/scripts.js?ver=21.0.8'></script>
	<script type='text/javascript' src='https://mundohoteles.com.co/wp-includes/js/wp-embed.min.js?ver=5.2.2'></script>

</body>
</html>
