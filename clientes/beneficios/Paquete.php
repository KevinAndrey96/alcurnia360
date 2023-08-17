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
require_once "../../admin/controlador/PDO.php";
$IdPaquete=$_GET["p"];
$Q="SELECT * from Paquetes where IdPaquete='$IdPaquete'";
foreach ($db->query($Q) as $Row) {
	$Nombre=$Row["Nombre"];
	$Descripcion=$Row["Descripcion"];
	$Precio=$Row["Precio"];
	$Moneda=$Row["Moneda"];
	$Fechas=$Row["Fechas"];
	$Vigencia=$Row["Vigencia"];
	$Tipo=$Row["Tipo"];
	$Traslados=$Row["Traslados"];

	$Traslados=$Row["Traslados"];
	$Guia=$Row["Guia"];
	$Desayuno=$Row["Desayuno"];
	$Sturisticos=$Row["SitiosTuristicos"];
	$Hotel=$Row["Hotel"];
	$Alojamiento=$Row["Alojamiento"];
	$Impuestos=$Row["Impuestos"];
	$Equipaje=$Row["Equipaje"];
	$Shopping=$Row["Shopping"];
	$Asistencia=$Row["Asistencia"];
	$Alimentacion=$Row["Alimentacion"];
}
?>
<!DOCTYPE html>
<html lang="es-CO" class="no-js" itemscope itemtype="https://schema.org/WebPage">

<head>

<meta charset="UTF-8" />
<link rel="alternate" hreflang="es-CO" href="https://www.alcurnia360.com.co/planes/"/>
<title>Planes &#8211; Alcurnia 360</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Alcurnia 360 &raquo; Feed" href="https://www.alcurnia360.com.co/feed/" />
<link rel="alternate" type="application/rss+xml" title="Alcurnia 360 &raquo; RSS de los comentarios" href="https://www.alcurnia360.com.co/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.alcurnia360.com.co\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.2"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
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
	<link rel='stylesheet' id='wp-block-library-css'  href='https://www.alcurnia360.com.co/wp-includes/css/dist/block-library/style.min.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://www.alcurnia360.com.co/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://www.alcurnia360.com.co/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.1.3' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='style-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/style.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-base-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/css/base.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-layout-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/css/layout.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-shortcodes-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/css/shortcodes.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-animations-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/assets/animations/animations.min.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-jquery-ui-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/assets/ui/jquery.ui.all.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-jplayer-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/assets/jplayer/css/jplayer.blue.monday.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-responsive-css'  href='https://www.alcurnia360.com.co/wp-content/themes/betheme/css/responsive.css?ver=21.0.8' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-fonts-css'  href='https://fonts.googleapis.com/css?family=Gothic+A1%3A1%2C300%2C400%2C400italic%2C500%2C700%2C700italic%2C800&#038;ver=5.3.2' type='text/css' media='all' />
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js?ver=6.0'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.1.3'></script>
<link rel='https://api.w.org/' href='https://www.alcurnia360.com.co/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.alcurnia360.com.co/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.alcurnia360.com.co/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.3.2" />
<link rel="canonical" href="https://www.alcurnia360.com.co/planes/" />
<link rel='shortlink' href='https://www.alcurnia360.com.co/?p=227' />
<link rel="alternate" type="application/json+oembed" href="https://www.alcurnia360.com.co/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.alcurnia360.com.co%2Fplanes%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.alcurnia360.com.co/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.alcurnia360.com.co%2Fplanes%2F&#038;format=xml" />
<!-- style | background -->
<style id="mfn-dnmc-bg-css">
body:not(.template-slider) #Header_wrapper{background-image:url(http://www.alcurnia360.com.co/wp-content/uploads/2018/02/ecobeef-product-gradientbottom-1.png);background-repeat:repeat;background-position:left top;background-size:cover}
#Top_bar,#Header_creative{background-image:url(http://www.alcurnia360.com.co/wp-content/uploads/2018/02/ecobeef-product-gradientbottom-1.png);background-repeat:no-repeat;background-position:right center}
#Subheader{background-image:url(http://www.alcurnia360.com.co/wp-content/uploads/2018/02/ecobeef-subheader-gradient.png);background-repeat:no-repeat;background-position:center bottom;background-size:cover}
</style>
<!-- style | dynamic -->
<style id="mfn-dnmc-style-css">
@media only screen and (min-width: 1240px){body:not(.header-simple) #Top_bar #menu{display:block!important}.tr-menu #Top_bar #menu{background:none!important}#Top_bar .menu > li > ul.mfn-megamenu{width:984px}#Top_bar .menu > li > ul.mfn-megamenu > li{float:left}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-1{width:100%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-2{width:50%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-3{width:33.33%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-4{width:25%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-5{width:20%}#Top_bar .menu > li > ul.mfn-megamenu > li.mfn-megamenu-cols-6{width:16.66%}#Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto;border-width:0 1px 0 0}#Top_bar .menu > li > ul.mfn-megamenu > li:last-child > ul{border:0}#Top_bar .menu > li > ul.mfn-megamenu > li > ul li{width:auto}#Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400;background:none}#Top_bar .menu > li > ul.mfn-megamenu a .menu-arrow{display:none}.menuo-right #Top_bar .menu > li > ul.mfn-megamenu{left:auto;right:0}.menuo-right #Top_bar .menu > li > ul.mfn-megamenu-bg{box-sizing:border-box}#Top_bar .menu > li > ul.mfn-megamenu-bg{padding:20px 166px 20px 20px;background-repeat:no-repeat;background-position:right bottom}.rtl #Top_bar .menu > li > ul.mfn-megamenu-bg{padding-left:166px;padding-right:20px;background-position:left bottom}#Top_bar .menu > li > ul.mfn-megamenu-bg > li{background:none}#Top_bar .menu > li > ul.mfn-megamenu-bg > li a{border:none}#Top_bar .menu > li > ul.mfn-megamenu-bg > li > ul{background:none!important;-webkit-box-shadow:0 0 0 0;-moz-box-shadow:0 0 0 0;box-shadow:0 0 0 0}.mm-vertical #Top_bar .container{position:relative;}.mm-vertical #Top_bar .top_bar_left{position:static;}.mm-vertical #Top_bar .menu > li ul{box-shadow:0 0 0 0 transparent!important;background-image:none;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu{width:98%!important;margin:0 1%;padding:20px 0;}.mm-vertical.header-plain #Top_bar .menu > li > ul.mfn-megamenu{width:100%!important;margin:0;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li{display:table-cell;float:none!important;width:10%;padding:0 15px;border-right:1px solid rgba(0, 0, 0, 0.05);}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:last-child{border-right-width:0}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li.hide-border{border-right-width:0}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li a{border-bottom-width:0;padding:9px 15px;line-height:120%;}.mm-vertical #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{font-weight:700;}.rtl .mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:first-child{border-right-width:0}.rtl .mm-vertical #Top_bar .menu > li > ul.mfn-megamenu > li:last-child{border-right-width:1px}.header-plain:not(.menuo-right) #Header .top_bar_left{width:auto!important}.header-stack.header-center #Top_bar #menu{display:inline-block!important}.header-simple #Top_bar #menu{display:none;height:auto;width:300px;bottom:auto;top:100%;right:1px;position:absolute;margin:0}.header-simple #Header a.responsive-menu-toggle{display:block;right:10px}.header-simple #Top_bar #menu > ul{width:100%;float:left}.header-simple #Top_bar #menu ul li{width:100%;padding-bottom:0;border-right:0;position:relative}.header-simple #Top_bar #menu ul li a{padding:0 20px;margin:0;display:block;height:auto;line-height:normal;border:none}.header-simple #Top_bar #menu ul li a:after{display:none}.header-simple #Top_bar #menu ul li a span{border:none;line-height:44px;display:inline;padding:0}.header-simple #Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:0;top:0;width:44px;height:44px;line-height:44px;font-size:30px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}.header-simple #Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}.header-simple #Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}.header-simple #Top_bar #menu ul li.hover a{border-bottom:0}.header-simple #Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}.header-simple #Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin:0!important;width:auto!important;background-image:none}.header-simple #Top_bar #menu ul li ul li{width:100%!important;display:block;padding:0;}.header-simple #Top_bar #menu ul li ul li a{padding:0 20px 0 30px}.header-simple #Top_bar #menu ul li ul li a .menu-arrow{display:none}.header-simple #Top_bar #menu ul li ul li a span{padding:0}.header-simple #Top_bar #menu ul li ul li a span:after{display:none!important}.header-simple #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}.header-simple #Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}.header-simple #Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}.header-simple #Top_bar #menu ul li ul li ul li a{padding:0 20px 0 40px}.rtl.header-simple #Top_bar #menu{left:1px;right:auto}.rtl.header-simple #Top_bar a.responsive-menu-toggle{left:10px;right:auto}.rtl.header-simple #Top_bar #menu ul li.submenu .menu-toggle{left:0;right:auto}.rtl.header-simple #Top_bar #menu ul li ul{left:auto!important;right:0!important}.rtl.header-simple #Top_bar #menu ul li ul li a{padding:0 30px 0 20px}.rtl.header-simple #Top_bar #menu ul li ul li ul li a{padding:0 40px 0 20px}.menu-highlight #Top_bar .menu > li{margin:0 2px}.menu-highlight:not(.header-creative) #Top_bar .menu > li > a{margin:20px 0;padding:0;-webkit-border-radius:5px;border-radius:5px}.menu-highlight #Top_bar .menu > li > a:after{display:none}.menu-highlight #Top_bar .menu > li > a span:not(.description){line-height:50px}.menu-highlight #Top_bar .menu > li > a span.description{display:none}.menu-highlight.header-stack #Top_bar .menu > li > a{margin:10px 0!important}.menu-highlight.header-stack #Top_bar .menu > li > a span:not(.description){line-height:40px}.menu-highlight.header-transparent #Top_bar .menu > li > a{margin:5px 0}.menu-highlight.header-simple #Top_bar #menu ul li,.menu-highlight.header-creative #Top_bar #menu ul li{margin:0}.menu-highlight.header-simple #Top_bar #menu ul li > a,.menu-highlight.header-creative #Top_bar #menu ul li > a{-webkit-border-radius:0;border-radius:0}.menu-highlight:not(.header-fixed):not(.header-simple) #Top_bar.is-sticky .menu > li > a{margin:10px 0!important;padding:5px 0!important}.menu-highlight:not(.header-fixed):not(.header-simple) #Top_bar.is-sticky .menu > li > a span{line-height:30px!important}.header-modern.menu-highlight.menuo-right .menu_wrapper{margin-right:20px}.menu-line-below #Top_bar .menu > li > a:after{top:auto;bottom:-4px}.menu-line-below #Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:-4px}.menu-line-below-80 #Top_bar:not(.is-sticky) .menu > li > a:after{height:4px;left:10%;top:50%;margin-top:20px;width:80%}.menu-line-below-80-1 #Top_bar:not(.is-sticky) .menu > li > a:after{height:1px;left:10%;top:50%;margin-top:20px;width:80%}.menu-link-color #Top_bar .menu > li > a:after{display:none!important}.menu-arrow-top #Top_bar .menu > li > a:after{background:none repeat scroll 0 0 rgba(0,0,0,0)!important;border-color:#ccc transparent transparent;border-style:solid;border-width:7px 7px 0;display:block;height:0;left:50%;margin-left:-7px;top:0!important;width:0}.menu-arrow-top #Top_bar.is-sticky .menu > li > a:after{top:0!important}.menu-arrow-bottom #Top_bar .menu > li > a:after{background:none!important;border-color:transparent transparent #ccc;border-style:solid;border-width:0 7px 7px;display:block;height:0;left:50%;margin-left:-7px;top:auto;bottom:0;width:0}.menu-arrow-bottom #Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:0}.menuo-no-borders #Top_bar .menu > li > a span{border-width:0!important}.menuo-no-borders #Header_creative #Top_bar .menu > li > a span{border-bottom-width:0}.menuo-no-borders.header-plain #Top_bar a#header_cart,.menuo-no-borders.header-plain #Top_bar a#search_button,.menuo-no-borders.header-plain #Top_bar .wpml-languages,.menuo-no-borders.header-plain #Top_bar a.action_button{border-width:0}.menuo-right #Top_bar .menu_wrapper{float:right}.menuo-right.header-stack:not(.header-center) #Top_bar .menu_wrapper{margin-right:150px}body.header-creative{padding-left:50px}body.header-creative.header-open{padding-left:250px}body.error404,body.under-construction,body.template-blank{padding-left:0!important}.header-creative.footer-fixed #Footer,.header-creative.footer-sliding #Footer,.header-creative.footer-stick #Footer.is-sticky{box-sizing:border-box;padding-left:50px;}.header-open.footer-fixed #Footer,.header-open.footer-sliding #Footer,.header-creative.footer-stick #Footer.is-sticky{padding-left:250px;}.header-rtl.header-creative.footer-fixed #Footer,.header-rtl.header-creative.footer-sliding #Footer,.header-rtl.header-creative.footer-stick #Footer.is-sticky{padding-left:0;padding-right:50px;}.header-rtl.header-open.footer-fixed #Footer,.header-rtl.header-open.footer-sliding #Footer,.header-rtl.header-creative.footer-stick #Footer.is-sticky{padding-right:250px;}#Header_creative{background-color:#fff;position:fixed;width:250px;height:100%;left:-200px;top:0;z-index:9002;-webkit-box-shadow:2px 0 4px 2px rgba(0,0,0,.15);box-shadow:2px 0 4px 2px rgba(0,0,0,.15)}#Header_creative .container{width:100%}#Header_creative .creative-wrapper{opacity:0;margin-right:50px}#Header_creative a.creative-menu-toggle{display:block;width:34px;height:34px;line-height:34px;font-size:22px;text-align:center;position:absolute;top:10px;right:8px;border-radius:3px}.admin-bar #Header_creative a.creative-menu-toggle{top:42px}#Header_creative #Top_bar{position:static;width:100%}#Header_creative #Top_bar .top_bar_left{width:100%!important;float:none}#Header_creative #Top_bar .top_bar_right{width:100%!important;float:none;height:auto;margin-bottom:35px;text-align:center;padding:0 20px;top:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#Header_creative #Top_bar .top_bar_right:before{display:none}#Header_creative #Top_bar .top_bar_right_wrapper{top:0}#Header_creative #Top_bar .logo{float:none;text-align:center;margin:15px 0}#Header_creative #Top_bar #menu{background-color:transparent}#Header_creative #Top_bar .menu_wrapper{float:none;margin:0 0 30px}#Header_creative #Top_bar .menu > li{width:100%;float:none;position:relative}#Header_creative #Top_bar .menu > li > a{padding:0;text-align:center}#Header_creative #Top_bar .menu > li > a:after{display:none}#Header_creative #Top_bar .menu > li > a span{border-right:0;border-bottom-width:1px;line-height:38px}#Header_creative #Top_bar .menu li ul{left:100%;right:auto;top:0;box-shadow:2px 2px 2px 0 rgba(0,0,0,0.03);-webkit-box-shadow:2px 2px 2px 0 rgba(0,0,0,0.03)}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu{margin:0;width:700px!important;}#Header_creative #Top_bar .menu > li > ul.mfn-megamenu > li > ul{left:0}#Header_creative #Top_bar .menu li ul li a{padding-top:9px;padding-bottom:8px}#Header_creative #Top_bar .menu li ul li ul{top:0}#Header_creative #Top_bar .menu > li > a span.description{display:block;font-size:13px;line-height:28px!important;clear:both}#Header_creative #Top_bar .search_wrapper{left:100%;top:auto;bottom:0}#Header_creative #Top_bar a#header_cart{display:inline-block;float:none;top:3px}#Header_creative #Top_bar a#search_button{display:inline-block;float:none;top:3px}#Header_creative #Top_bar .wpml-languages{display:inline-block;float:none;top:0}#Header_creative #Top_bar .wpml-languages.enabled:hover a.active{padding-bottom:11px}#Header_creative #Top_bar .action_button{display:inline-block;float:none;top:16px;margin:0}#Header_creative #Top_bar .banner_wrapper{display:block;text-align:center}#Header_creative #Top_bar .banner_wrapper img{max-width:100%;height:auto;display:inline-block}#Header_creative #Action_bar{display:none;position:absolute;bottom:0;top:auto;clear:both;padding:0 20px;box-sizing:border-box}#Header_creative #Action_bar .social{float:none;text-align:center;padding:5px 0 15px}#Header_creative #Action_bar .social li{margin-bottom:2px}#Header_creative .social li a{color:rgba(0,0,0,.5)}#Header_creative .social li a:hover{color:#000}#Header_creative .creative-social{position:absolute;bottom:10px;right:0;width:50px}#Header_creative .creative-social li{display:block;float:none;width:100%;text-align:center;margin-bottom:5px}.header-creative .fixed-nav.fixed-nav-prev{margin-left:50px}.header-creative.header-open .fixed-nav.fixed-nav-prev{margin-left:250px}.menuo-last #Header_creative #Top_bar .menu li.last ul{top:auto;bottom:0}.header-open #Header_creative{left:0}.header-open #Header_creative .creative-wrapper{opacity:1;margin:0!important;}.header-open #Header_creative .creative-menu-toggle,.header-open #Header_creative .creative-social{display:none}.header-open #Header_creative #Action_bar{display:block}body.header-rtl.header-creative{padding-left:0;padding-right:50px}.header-rtl #Header_creative{left:auto;right:-200px}.header-rtl #Header_creative .creative-wrapper{margin-left:50px;margin-right:0}.header-rtl #Header_creative a.creative-menu-toggle{left:8px;right:auto}.header-rtl #Header_creative .creative-social{left:0;right:auto}.header-rtl #Footer #back_to_top.sticky{right:125px}.header-rtl #popup_contact{right:70px}.header-rtl #Header_creative #Top_bar .menu li ul{left:auto;right:100%}.header-rtl #Header_creative #Top_bar .search_wrapper{left:auto;right:100%;}.header-rtl .fixed-nav.fixed-nav-prev{margin-left:0!important}.header-rtl .fixed-nav.fixed-nav-next{margin-right:50px}body.header-rtl.header-creative.header-open{padding-left:0;padding-right:250px!important}.header-rtl.header-open #Header_creative{left:auto;right:0}.header-rtl.header-open #Footer #back_to_top.sticky{right:325px}.header-rtl.header-open #popup_contact{right:270px}.header-rtl.header-open .fixed-nav.fixed-nav-next{margin-right:250px}#Header_creative.active{left:-1px;}.header-rtl #Header_creative.active{left:auto;right:-1px;}#Header_creative.active .creative-wrapper{opacity:1;margin:0}.header-creative .vc_row[data-vc-full-width]{padding-left:50px}.header-creative.header-open .vc_row[data-vc-full-width]{padding-left:250px}.header-open .vc_parallax .vc_parallax-inner { left:auto; width: calc(100% - 250px); }.header-open.header-rtl .vc_parallax .vc_parallax-inner { left:0; right:auto; }#Header_creative.scroll{height:100%;overflow-y:auto}#Header_creative.scroll:not(.dropdown) .menu li ul{display:none!important}#Header_creative.scroll #Action_bar{position:static}#Header_creative.dropdown{outline:none}#Header_creative.dropdown #Top_bar .menu_wrapper{float:left}#Header_creative.dropdown #Top_bar #menu ul li{position:relative;float:left}#Header_creative.dropdown #Top_bar #menu ul li a:after{display:none}#Header_creative.dropdown #Top_bar #menu ul li a span{line-height:38px;padding:0}#Header_creative.dropdown #Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:0;top:0;width:38px;height:38px;line-height:38px;font-size:26px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}#Header_creative.dropdown #Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}#Header_creative.dropdown #Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}#Header_creative.dropdown #Top_bar #menu ul li.hover a{border-bottom:0}#Header_creative.dropdown #Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}#Header_creative.dropdown #Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin-left:0!important;width:auto!important;background-image:none}#Header_creative.dropdown #Top_bar #menu ul li ul li{width:100%!important}#Header_creative.dropdown #Top_bar #menu ul li ul li a{padding:0 10px;text-align:center}#Header_creative.dropdown #Top_bar #menu ul li ul li a .menu-arrow{display:none}#Header_creative.dropdown #Top_bar #menu ul li ul li a span{padding:0}#Header_creative.dropdown #Top_bar #menu ul li ul li a span:after{display:none!important}#Header_creative.dropdown #Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}#Header_creative.dropdown #Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}#Header_creative.dropdown #Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}#Header_creative{transition: left .5s ease-in-out, right .5s ease-in-out;}#Header_creative .creative-wrapper{transition: opacity .5s ease-in-out, margin 0s ease-in-out .5s;}#Header_creative.active .creative-wrapper{transition: opacity .5s ease-in-out, margin 0s ease-in-out;}}@media only screen and (min-width: 1240px){#Top_bar.is-sticky{position:fixed!important;width:100%;left:0;top:-60px;height:60px;z-index:701;background:#fff;opacity:.97;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 2px 5px 0 rgba(0,0,0,0.1);box-shadow:0 2px 5px 0 rgba(0,0,0,0.1)}.layout-boxed.header-boxed #Top_bar.is-sticky{max-width:1240px;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}#Top_bar.is-sticky .top_bar_left,#Top_bar.is-sticky .top_bar_right,#Top_bar.is-sticky .top_bar_right:before{background:none}#Top_bar.is-sticky .top_bar_right{top:-4px;height:auto;}#Top_bar.is-sticky .top_bar_right_wrapper{top:15px}.header-plain #Top_bar.is-sticky .top_bar_right_wrapper{top:0}#Top_bar.is-sticky .logo{width:auto;margin:0 30px 0 20px;padding:0}#Top_bar.is-sticky #logo,#Top_bar.is-sticky .custom-logo-link{padding:5px 0!important;height:50px!important;line-height:50px!important}.logo-no-sticky-padding #Top_bar.is-sticky #logo{height:60px!important;line-height:60px!important}#Top_bar.is-sticky #logo img.logo-main{display:none}#Top_bar.is-sticky #logo img.logo-sticky{display:inline;max-height:35px;}#Top_bar.is-sticky .menu_wrapper{clear:none}#Top_bar.is-sticky .menu_wrapper .menu > li > a{padding:15px 0}#Top_bar.is-sticky .menu > li > a,#Top_bar.is-sticky .menu > li > a span{line-height:30px}#Top_bar.is-sticky .menu > li > a:after{top:auto;bottom:-4px}#Top_bar.is-sticky .menu > li > a span.description{display:none}#Top_bar.is-sticky .secondary_menu_wrapper,#Top_bar.is-sticky .banner_wrapper{display:none}.header-overlay #Top_bar.is-sticky{display:none}.sticky-dark #Top_bar.is-sticky,.sticky-dark #Top_bar.is-sticky #menu{background:rgba(0,0,0,.8)}.sticky-dark #Top_bar.is-sticky .menu > li > a{color:#fff}.sticky-dark #Top_bar.is-sticky .top_bar_right a:not(.action_button){color:rgba(255,255,255,.8)}.sticky-dark #Top_bar.is-sticky .wpml-languages a.active,.sticky-dark #Top_bar.is-sticky .wpml-languages ul.wpml-lang-dropdown{background:rgba(0,0,0,0.1);border-color:rgba(0,0,0,0.1)}.sticky-white #Top_bar.is-sticky,.sticky-white #Top_bar.is-sticky #menu{background:rgba(255,255,255,.8)}.sticky-white #Top_bar.is-sticky .menu > li > a{color:#222}.sticky-white #Top_bar.is-sticky .top_bar_right a:not(.action_button){color:rgba(0,0,0,.8)}.sticky-white #Top_bar.is-sticky .wpml-languages a.active,.sticky-white #Top_bar.is-sticky .wpml-languages ul.wpml-lang-dropdown{background:rgba(255,255,255,0.1);border-color:rgba(0,0,0,0.1)}}@media only screen and (min-width: 768px) and (max-width: 1240px){.header_placeholder{height:0!important}}@media only screen and (max-width: 1239px){#Top_bar #menu{display:none;height:auto;width:300px;bottom:auto;top:100%;right:1px;position:absolute;margin:0}#Top_bar a.responsive-menu-toggle{display:block}#Top_bar #menu > ul{width:100%;float:left}#Top_bar #menu ul li{width:100%;padding-bottom:0;border-right:0;position:relative}#Top_bar #menu ul li a{padding:0 25px;margin:0;display:block;height:auto;line-height:normal;border:none}#Top_bar #menu ul li a:after{display:none}#Top_bar #menu ul li a span{border:none;line-height:44px;display:inline;padding:0}#Top_bar #menu ul li a span.description{margin:0 0 0 5px}#Top_bar #menu ul li.submenu .menu-toggle{display:block;position:absolute;right:15px;top:0;width:44px;height:44px;line-height:44px;font-size:30px;font-weight:300;text-align:center;cursor:pointer;color:#444;opacity:0.33;}#Top_bar #menu ul li.submenu .menu-toggle:after{content:"+"}#Top_bar #menu ul li.hover > .menu-toggle:after{content:"-"}#Top_bar #menu ul li.hover a{border-bottom:0}#Top_bar #menu ul li a span:after{display:none!important}#Top_bar #menu ul.mfn-megamenu li .menu-toggle{display:none}#Top_bar #menu ul li ul{position:relative!important;left:0!important;top:0;padding:0;margin-left:0!important;width:auto!important;background-image:none!important;box-shadow:0 0 0 0 transparent!important;-webkit-box-shadow:0 0 0 0 transparent!important}#Top_bar #menu ul li ul li{width:100%!important}#Top_bar #menu ul li ul li a{padding:0 20px 0 35px}#Top_bar #menu ul li ul li a .menu-arrow{display:none}#Top_bar #menu ul li ul li a span{padding:0}#Top_bar #menu ul li ul li a span:after{display:none!important}#Top_bar .menu > li > ul.mfn-megamenu a.mfn-megamenu-title{text-transform:uppercase;font-weight:400}#Top_bar .menu > li > ul.mfn-megamenu > li > ul{display:block!important;position:inherit;left:auto;top:auto}#Top_bar #menu ul li ul li ul{border-left:0!important;padding:0;top:0}#Top_bar #menu ul li ul li ul li a{padding:0 20px 0 45px}.rtl #Top_bar #menu{left:1px;right:auto}.rtl #Top_bar a.responsive-menu-toggle{left:20px;right:auto}.rtl #Top_bar #menu ul li.submenu .menu-toggle{left:15px;right:auto;border-left:none;border-right:1px solid #eee}.rtl #Top_bar #menu ul li ul{left:auto!important;right:0!important}.rtl #Top_bar #menu ul li ul li a{padding:0 30px 0 20px}.rtl #Top_bar #menu ul li ul li ul li a{padding:0 40px 0 20px}.header-stack .menu_wrapper a.responsive-menu-toggle{position:static!important;margin:11px 0!important}.header-stack .menu_wrapper #menu{left:0;right:auto}.rtl.header-stack #Top_bar #menu{left:auto;right:0}.admin-bar #Header_creative{top:32px}.header-creative.layout-boxed{padding-top:85px}.header-creative.layout-full-width #Wrapper{padding-top:60px}#Header_creative{position:fixed;width:100%;left:0!important;top:0;z-index:1001}#Header_creative .creative-wrapper{display:block!important;opacity:1!important}#Header_creative .creative-menu-toggle,#Header_creative .creative-social{display:none!important;opacity:1!important}#Header_creative #Top_bar{position:static;width:100%}#Header_creative #Top_bar #logo,#Header_creative #Top_bar .custom-logo-link{height:50px;line-height:50px;padding:5px 0}#Header_creative #Top_bar #logo img.logo-sticky{max-height:40px!important}#Header_creative #logo img.logo-main{display:none}#Header_creative #logo img.logo-sticky{display:inline-block}.logo-no-sticky-padding #Header_creative #Top_bar #logo{height:60px;line-height:60px;padding:0}.logo-no-sticky-padding #Header_creative #Top_bar #logo img.logo-sticky{max-height:60px!important}#Header_creative #Action_bar{display:none}#Header_creative #Top_bar .top_bar_right{height:60px;top:0}#Header_creative #Top_bar .top_bar_right:before{display:none}#Header_creative #Top_bar .top_bar_right_wrapper{top:0;padding-top:9px}#Header_creative.scroll{overflow:visible!important}}#Header_wrapper, #Intro {background-color: #ffffff;}#Subheader {background-color: rgba(231, 235, 237, 1);}.header-classic #Action_bar, .header-fixed #Action_bar, .header-plain #Action_bar, .header-split #Action_bar, .header-stack #Action_bar {background-color: #292b33;}#Sliding-top {background-color: #545454;}#Sliding-top a.sliding-top-control {border-right-color: #545454;}#Sliding-top.st-center a.sliding-top-control,#Sliding-top.st-left a.sliding-top-control {border-top-color: #545454;}#Footer {background-color: #ffffff;}body, ul.timeline_items, .icon_box a .desc, .icon_box a:hover .desc, .feature_list ul li a, .list_item a, .list_item a:hover,.widget_recent_entries ul li a, .flat_box a, .flat_box a:hover, .story_box .desc, .content_slider.carouselul li a .title,.content_slider.flat.description ul li .desc, .content_slider.flat.description ul li a .desc, .post-nav.minimal a i {color: #7c7c7c;}.post-nav.minimal a svg {fill: #7c7c7c;}.themecolor, .opening_hours .opening_hours_wrapper li span, .fancy_heading_icon .icon_top,.fancy_heading_arrows .icon-right-dir, .fancy_heading_arrows .icon-left-dir, .fancy_heading_line .title,.button-love a.mfn-love, .format-link .post-title .icon-link, .pager-single > span, .pager-single a:hover,.widget_meta ul, .widget_pages ul, .widget_rss ul, .widget_mfn_recent_comments ul li:after, .widget_archive ul,.widget_recent_comments ul li:after, .widget_nav_menu ul, .woocommerce ul.products li.product .price, .shop_slider .shop_slider_ul li .item_wrapper .price,.woocommerce-page ul.products li.product .price, .widget_price_filter .price_label .from, .widget_price_filter .price_label .to,.woocommerce ul.product_list_widget li .quantity .amount, .woocommerce .product div.entry-summary .price, .woocommerce .star-rating span,#Error_404 .error_pic i, .style-simple #Filters .filters_wrapper ul li a:hover, .style-simple #Filters .filters_wrapper ul li.current-cat a,.style-simple .quick_fact .title {color: #000000;}.themebg,#comments .commentlist > li .reply a.comment-reply-link,#Filters .filters_wrapper ul li a:hover,#Filters .filters_wrapper ul li.current-cat a,.fixed-nav .arrow,.offer_thumb .slider_pagination a:before,.offer_thumb .slider_pagination a.selected:after,.pager .pages a:hover,.pager .pages a.active,.pager .pages span.page-numbers.current,.pager-single span:after,.portfolio_group.exposure .portfolio-item .desc-inner .line,.Recent_posts ul li .desc:after,.Recent_posts ul li .photo .c,.slider_pagination a.selected,.slider_pagination .slick-active a,.slider_pagination a.selected:after,.slider_pagination .slick-active a:after,.testimonials_slider .slider_images,.testimonials_slider .slider_images a:after,.testimonials_slider .slider_images:before,#Top_bar a#header_cart span,.widget_categories ul,.widget_mfn_menu ul li a:hover,.widget_mfn_menu ul li.current-menu-item:not(.current-menu-ancestor) > a,.widget_mfn_menu ul li.current_page_item:not(.current_page_ancestor) > a,.widget_product_categories ul,.widget_recent_entries ul li:after,.woocommerce-account table.my_account_orders .order-number a,.woocommerce-MyAccount-navigation ul li.is-active a,.style-simple .accordion .question:after,.style-simple .faq .question:after,.style-simple .icon_box .desc_wrapper .title:before,.style-simple #Filters .filters_wrapper ul li a:after,.style-simple .article_box .desc_wrapper p:after,.style-simple .sliding_box .desc_wrapper:after,.style-simple .trailer_box:hover .desc,.tp-bullets.simplebullets.round .bullet.selected,.tp-bullets.simplebullets.round .bullet.selected:after,.tparrows.default,.tp-bullets.tp-thumbs .bullet.selected:after{background-color: #000000;}.Latest_news ul li .photo, .Recent_posts.blog_news ul li .photo, .style-simple .opening_hours .opening_hours_wrapper li label,.style-simple .timeline_items li:hover h3, .style-simple .timeline_items li:nth-child(even):hover h3,.style-simple .timeline_items li:hover .desc, .style-simple .timeline_items li:nth-child(even):hover,.style-simple .offer_thumb .slider_pagination a.selected {border-color: #000000;}a {color: #e8d22a;}a:hover {color: #000000;}*::-moz-selection {background-color: #000000;color: white;}*::selection {background-color: #000000;color: white;}.blockquote p.author span, .counter .desc_wrapper .title, .article_box .desc_wrapper p, .team .desc_wrapper p.subtitle,.pricing-box .plan-header p.subtitle, .pricing-box .plan-header .price sup.period, .chart_box p, .fancy_heading .inside,.fancy_heading_line .slogan, .post-meta, .post-meta a, .post-footer, .post-footer a span.label, .pager .pages a, .button-love a .label,.pager-single a, #comments .commentlist > li .comment-author .says, .fixed-nav .desc .date, .filters_buttons li.label, .Recent_posts ul li a .desc .date,.widget_recent_entries ul li .post-date, .tp_recent_tweets .twitter_time, .widget_price_filter .price_label, .shop-filters .woocommerce-result-count,.woocommerce ul.product_list_widget li .quantity, .widget_shopping_cart ul.product_list_widget li dl, .product_meta .posted_in,.woocommerce .shop_table .product-name .variation > dd, .shipping-calculator-button:after,.shop_slider .shop_slider_ul li .item_wrapper .price del,.testimonials_slider .testimonials_slider_ul li .author span, .testimonials_slider .testimonials_slider_ul li .author span a, .Latest_news ul li .desc_footer,.share-simple-wrapper .icons a {color: #a8a8a8;}h1, h1 a, h1 a:hover, .text-logo #logo { color: #342111; }h2, h2 a, h2 a:hover { color: #342111; }h3, h3 a, h3 a:hover { color: #342111; }h4, h4 a, h4 a:hover, .style-simple .sliding_box .desc_wrapper h4 { color: #342111; }h5, h5 a, h5 a:hover { color: #342111; }h6, h6 a, h6 a:hover,a.content_link .title { color: #342111; }.dropcap, .highlight:not(.highlight_image) {background-color: #0095eb;}a.button, a.tp-button {background-color: #eeee22;color: #747474;}.button-stroke a.button, .button-stroke a.button .button_icon i, .button-stroke a.tp-button {border-color: #eeee22;color: #747474;}.button-stroke a:hover.button, .button-stroke a:hover.tp-button {background-color: #eeee22 !important;color: #fff;}a.button_theme, a.tp-button.button_theme,button, input[type="submit"], input[type="reset"], input[type="button"] {background-color: #000000;color: #e6b822;}.button-stroke a.button.button_theme,.button-stroke a.button.button_theme .button_icon i, .button-stroke a.tp-button.button_theme,.button-stroke button, .button-stroke input[type="submit"], .button-stroke input[type="reset"], .button-stroke input[type="button"] {border-color: #000000;color: #000000 !important;}.button-stroke a.button.button_theme:hover, .button-stroke a.tp-button.button_theme:hover,.button-stroke button:hover, .button-stroke input[type="submit"]:hover, .button-stroke input[type="reset"]:hover, .button-stroke input[type="button"]:hover {background-color: #000000 !important;color: #e6b822 !important;}a.mfn-link {color: #656B6F;}a.mfn-link-2 span, a:hover.mfn-link-2 span:before, a.hover.mfn-link-2 span:before, a.mfn-link-5 span, a.mfn-link-8:after, a.mfn-link-8:before {background: #0095eb;}a:hover.mfn-link {color: #0095eb;}a.mfn-link-2 span:before, a:hover.mfn-link-4:before, a:hover.mfn-link-4:after, a.hover.mfn-link-4:before, a.hover.mfn-link-4:after, a.mfn-link-5:before, a.mfn-link-7:after, a.mfn-link-7:before {background: #007cc3;}a.mfn-link-6:before {border-bottom-color: #007cc3;}.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover{background-color: #000000;color: #fff;}.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover{background-color: #000000;color: #fff;}.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce #respond input#submit[disabled]:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce a.button[disabled]:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce button.button[disabled]:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce input.button[disabled]:disabled{background-color: #000000;color: #fff;}.woocommerce #respond input#submit.disabled:hover,.woocommerce #respond input#submit:disabled:hover,.woocommerce #respond input#submit[disabled]:disabled:hover,.woocommerce a.button.disabled:hover,.woocommerce a.button:disabled:hover,.woocommerce a.button[disabled]:disabled:hover,.woocommerce button.button.disabled:hover,.woocommerce button.button:disabled:hover,.woocommerce button.button[disabled]:disabled:hover,.woocommerce input.button.disabled:hover,.woocommerce input.button:disabled:hover,.woocommerce input.button[disabled]:disabled:hover{background-color: #000000;color: #fff;}.button-stroke.woocommerce-page #respond input#submit,.button-stroke.woocommerce-page a.button,.button-stroke.woocommerce-page button.button,.button-stroke.woocommerce-page input.button{border: 2px solid #000000 !important;color: #000000 !important;}.button-stroke.woocommerce-page #respond input#submit:hover,.button-stroke.woocommerce-page a.button:hover,.button-stroke.woocommerce-page button.button:hover,.button-stroke.woocommerce-page input.button:hover{background-color: #000000 !important;color: #fff !important;}.column_column ul, .column_column ol, .the_content_wrapper ul, .the_content_wrapper ol {color: #737E86;}.hr_color, .hr_color hr, .hr_dots span {color: #0095eb;background: #0095eb;}.hr_zigzag i {color: #0095eb;}.highlight-left:after,.highlight-right:after {background: #0095eb;}@media only screen and (max-width: 767px) {.highlight-left .wrap:first-child,.highlight-right .wrap:last-child {background: #0095eb;}}#Header .top_bar_left, .header-classic #Top_bar, .header-plain #Top_bar, .header-stack #Top_bar, .header-split #Top_bar,.header-fixed #Top_bar, .header-below #Top_bar, #Header_creative, #Top_bar #menu, .sticky-tb-color #Top_bar.is-sticky {background-color: #ffffff;}#Top_bar .wpml-languages a.active, #Top_bar .wpml-languages ul.wpml-lang-dropdown {background-color: #ffffff;}#Top_bar .top_bar_right:before {background-color: #e3e3e3;}#Header .top_bar_right {background-color: #f5f5f5;}#Top_bar .top_bar_right a:not(.action_button) {color: #333333;}a.action_button{background-color: #f7f7f7;color: #747474;}.button-stroke a.action_button{border-color: #f7f7f7;}.button-stroke a.action_button:hover{background-color: #f7f7f7!important;}#Top_bar .menu > li > a,#Top_bar #menu ul li.submenu .menu-toggle {color: #e2b917;}#Top_bar .menu > li.current-menu-item > a,#Top_bar .menu > li.current_page_item > a,#Top_bar .menu > li.current-menu-parent > a,#Top_bar .menu > li.current-page-parent > a,#Top_bar .menu > li.current-menu-ancestor > a,#Top_bar .menu > li.current-page-ancestor > a,#Top_bar .menu > li.current_page_ancestor > a,#Top_bar .menu > li.hover > a {color: #342111;}#Top_bar .menu > li a:after {background: #342111;}.menuo-arrows #Top_bar .menu > li.submenu > a > span:not(.description)::after {border-top-color: #e2b917;}#Top_bar .menu > li.current-menu-item.submenu > a > span:not(.description)::after,#Top_bar .menu > li.current_page_item.submenu > a > span:not(.description)::after,#Top_bar .menu > li.current-menu-parent.submenu > a > span:not(.description)::after,#Top_bar .menu > li.current-page-parent.submenu > a > span:not(.description)::after,#Top_bar .menu > li.current-menu-ancestor.submenu > a > span:not(.description)::after,#Top_bar .menu > li.current-page-ancestor.submenu > a > span:not(.description)::after,#Top_bar .menu > li.current_page_ancestor.submenu > a > span:not(.description)::after,#Top_bar .menu > li.hover.submenu > a > span:not(.description)::after {border-top-color: #342111;}.menu-highlight #Top_bar #menu > ul > li.current-menu-item > a,.menu-highlight #Top_bar #menu > ul > li.current_page_item > a,.menu-highlight #Top_bar #menu > ul > li.current-menu-parent > a,.menu-highlight #Top_bar #menu > ul > li.current-page-parent > a,.menu-highlight #Top_bar #menu > ul > li.current-menu-ancestor > a,.menu-highlight #Top_bar #menu > ul > li.current-page-ancestor > a,.menu-highlight #Top_bar #menu > ul > li.current_page_ancestor > a,.menu-highlight #Top_bar #menu > ul > li.hover > a {background: #F2F2F2;}.menu-arrow-bottom #Top_bar .menu > li > a:after { border-bottom-color: #342111;}.menu-arrow-top #Top_bar .menu > li > a:after {border-top-color: #342111;}.header-plain #Top_bar .menu > li.current-menu-item > a,.header-plain #Top_bar .menu > li.current_page_item > a,.header-plain #Top_bar .menu > li.current-menu-parent > a,.header-plain #Top_bar .menu > li.current-page-parent > a,.header-plain #Top_bar .menu > li.current-menu-ancestor > a,.header-plain #Top_bar .menu > li.current-page-ancestor > a,.header-plain #Top_bar .menu > li.current_page_ancestor > a,.header-plain #Top_bar .menu > li.hover > a,.header-plain #Top_bar a:hover#header_cart,.header-plain #Top_bar a:hover#search_button,.header-plain #Top_bar .wpml-languages:hover,.header-plain #Top_bar .wpml-languages ul.wpml-lang-dropdown {background: #F2F2F2;color: #342111;}.header-plain #Top_bar,.header-plain #Top_bar .menu > li > a span:not(.description),.header-plain #Top_bar a#header_cart,.header-plain #Top_bar a#search_button,.header-plain #Top_bar .wpml-languages,.header-plain #Top_bar a.action_button {border-color: #F2F2F2;}#Top_bar .menu > li ul {background-color: #F2F2F2;}#Top_bar .menu > li ul li a {color: #5f5f5f;}#Top_bar .menu > li ul li a:hover,#Top_bar .menu > li ul li.hover > a {color: #2e2e2e;}#Top_bar .search_wrapper {background: #ffffff;}.overlay-menu-toggle {color: #ffffff !important;background: #000000;}#Overlay {background: rgba(0, 149, 235, 0.95);}#overlay-menu ul li a, .header-overlay .overlay-menu-toggle.focus {color: #FFFFFF;}#overlay-menu ul li.current-menu-item > a,#overlay-menu ul li.current_page_item > a,#overlay-menu ul li.current-menu-parent > a,#overlay-menu ul li.current-page-parent > a,#overlay-menu ul li.current-menu-ancestor > a,#overlay-menu ul li.current-page-ancestor > a,#overlay-menu ul li.current_page_ancestor > a {color: #B1DCFB;}#Top_bar .responsive-menu-toggle,#Header_creative .creative-menu-toggle,#Header_creative .responsive-menu-toggle {color: #ffffff;background: #000000;}#Side_slide{background-color: #342111;border-color: #342111;}#Side_slide,#Side_slide .search-wrapper input.field,#Side_slide a:not(.action_button),#Side_slide #menu ul li.submenu .menu-toggle{color: #ffffff;}#Side_slide a:not(.action_button):hover,#Side_slide a.active,#Side_slide #menu ul li.hover > .menu-toggle{color: #FFFFFF;}#Side_slide #menu ul li.current-menu-item > a,#Side_slide #menu ul li.current_page_item > a,#Side_slide #menu ul li.current-menu-parent > a,#Side_slide #menu ul li.current-page-parent > a,#Side_slide #menu ul li.current-menu-ancestor > a,#Side_slide #menu ul li.current-page-ancestor > a,#Side_slide #menu ul li.current_page_ancestor > a,#Side_slide #menu ul li.hover > a,#Side_slide #menu ul li:hover > a{color: #FFFFFF;}#Action_bar .contact_details{color: #bbbbbb}#Action_bar .contact_details a{color: #0095eb}#Action_bar .contact_details a:hover{color: #007cc3}#Action_bar .social li a,#Header_creative .social li a,#Action_bar .social-menu a{color: #bbbbbb}#Action_bar .social li a:hover,#Header_creative .social li a:hover,#Action_bar .social-menu a:hover{color: #FFFFFF}#Subheader .title{color: #342111;}#Subheader ul.breadcrumbs li, #Subheader ul.breadcrumbs li a{color: rgba(52, 33, 17, 0.6);}#Footer, #Footer .widget_recent_entries ul li a {color: #878787;}#Footer a {color: #519032;}#Footer a:hover {color: #57af2b;}#Footer h1, #Footer h1 a, #Footer h1 a:hover,#Footer h2, #Footer h2 a, #Footer h2 a:hover,#Footer h3, #Footer h3 a, #Footer h3 a:hover,#Footer h4, #Footer h4 a, #Footer h4 a:hover,#Footer h5, #Footer h5 a, #Footer h5 a:hover,#Footer h6, #Footer h6 a, #Footer h6 a:hover {color: #342111;}#Footer .themecolor, #Footer .widget_meta ul, #Footer .widget_pages ul, #Footer .widget_rss ul, #Footer .widget_mfn_recent_comments ul li:after, #Footer .widget_archive ul,#Footer .widget_recent_comments ul li:after, #Footer .widget_nav_menu ul, #Footer .widget_price_filter .price_label .from, #Footer .widget_price_filter .price_label .to,#Footer .star-rating span {color: #519032;}#Footer .themebg, #Footer .widget_categories ul, #Footer .Recent_posts ul li .desc:after, #Footer .Recent_posts ul li .photo .c,#Footer .widget_recent_entries ul li:after, #Footer .widget_mfn_menu ul li a:hover, #Footer .widget_product_categories ul {background-color: #519032;}#Footer .Recent_posts ul li a .desc .date, #Footer .widget_recent_entries ul li .post-date, #Footer .tp_recent_tweets .twitter_time,#Footer .widget_price_filter .price_label, #Footer .shop-filters .woocommerce-result-count, #Footer ul.product_list_widget li .quantity,#Footer .widget_shopping_cart ul.product_list_widget li dl {color: #a8a8a8;}#Footer .footer_copy .social li a,#Footer .footer_copy .social-menu a{color: #65666C;}#Footer .footer_copy .social li a:hover,#Footer .footer_copy .social-menu a:hover{color: #FFFFFF;}a#back_to_top.button.button_js,#popup_contact > a.button{color: #519032;background:transparent;-webkit-box-shadow:none;box-shadow:none;}a#back_to_top.button.button_js:after,#popup_contact > a.button:after{display:none;}#Sliding-top, #Sliding-top .widget_recent_entries ul li a {color: #cccccc;}#Sliding-top a {color: #0095eb;}#Sliding-top a:hover {color: #007cc3;}#Sliding-top h1, #Sliding-top h1 a, #Sliding-top h1 a:hover,#Sliding-top h2, #Sliding-top h2 a, #Sliding-top h2 a:hover,#Sliding-top h3, #Sliding-top h3 a, #Sliding-top h3 a:hover,#Sliding-top h4, #Sliding-top h4 a, #Sliding-top h4 a:hover,#Sliding-top h5, #Sliding-top h5 a, #Sliding-top h5 a:hover,#Sliding-top h6, #Sliding-top h6 a, #Sliding-top h6 a:hover {color: #ffffff;}#Sliding-top .themecolor, #Sliding-top .widget_meta ul, #Sliding-top .widget_pages ul, #Sliding-top .widget_rss ul, #Sliding-top .widget_mfn_recent_comments ul li:after, #Sliding-top .widget_archive ul,#Sliding-top .widget_recent_comments ul li:after, #Sliding-top .widget_nav_menu ul, #Sliding-top .widget_price_filter .price_label .from, #Sliding-top .widget_price_filter .price_label .to,#Sliding-top .star-rating span {color: #0095eb;}#Sliding-top .themebg, #Sliding-top .widget_categories ul, #Sliding-top .Recent_posts ul li .desc:after, #Sliding-top .Recent_posts ul li .photo .c,#Sliding-top .widget_recent_entries ul li:after, #Sliding-top .widget_mfn_menu ul li a:hover, #Sliding-top .widget_product_categories ul {background-color: #0095eb;}#Sliding-top .Recent_posts ul li a .desc .date, #Sliding-top .widget_recent_entries ul li .post-date, #Sliding-top .tp_recent_tweets .twitter_time,#Sliding-top .widget_price_filter .price_label, #Sliding-top .shop-filters .woocommerce-result-count, #Sliding-top ul.product_list_widget li .quantity,#Sliding-top .widget_shopping_cart ul.product_list_widget li dl {color: #a8a8a8;}blockquote, blockquote a, blockquote a:hover {color: #444444;}.image_frame .image_wrapper .image_links,.portfolio_group.masonry-hover .portfolio-item .masonry-hover-wrapper .hover-desc {background: rgba(0, 149, 235, 0.8);}.masonry.tiles .post-item .post-desc-wrapper .post-desc .post-title:after,.masonry.tiles .post-item.no-img,.masonry.tiles .post-item.format-quote,.blog-teaser li .desc-wrapper .desc .post-title:after,.blog-teaser li.no-img,.blog-teaser li.format-quote {background: #0095eb;}.image_frame .image_wrapper .image_links a {color: #ffffff;}.image_frame .image_wrapper .image_links a:hover {background: #ffffff;color: #0095eb;}.image_frame {border-color: #f8f8f8;}.image_frame .image_wrapper .mask::after {background: rgba(255, 255, 255, 0.4);}.sliding_box .desc_wrapper {background: #519032;}.sliding_box .desc_wrapper:after {border-bottom-color: #519032;}.counter .icon_wrapper i {color: #519032;}.quick_fact .number-wrapper {color: #519032;}.progress_bars .bars_list li .bar .progress {background-color: #519032;}a:hover.icon_bar {color: #519032 !important;}a.content_link, a:hover.content_link {color: #519032;}a.content_link:before {border-bottom-color: #519032;}a.content_link:after {border-color: #519032;}.get_in_touch, .infobox {background-color: #519032;}.google-map-contact-wrapper .get_in_touch:after {border-top-color: #519032;}.timeline_items li h3:before,.timeline_items:after,.timeline .post-item:before {border-color: #000000;}.how_it_works .image .number {background: #000000;}.trailer_box .desc .subtitle,.trailer_box.plain .desc .line {background-color: #519032;}.trailer_box.plain .desc .subtitle {color: #519032;}.icon_box .icon_wrapper, .icon_box a .icon_wrapper,.style-simple .icon_box:hover .icon_wrapper {color: #519032;}.icon_box:hover .icon_wrapper:before,.icon_box a:hover .icon_wrapper:before {background-color: #519032;}ul.clients.clients_tiles li .client_wrapper:hover:before {background: #000000;}ul.clients.clients_tiles li .client_wrapper:after {border-bottom-color: #000000;}.list_item.lists_1 .list_left {background-color: #519032;}.list_item .list_left {color: #519032;}.feature_list ul li .icon i {color: #519032;}.feature_list ul li:hover,.feature_list ul li:hover a {background: #519032;}.ui-tabs .ui-tabs-nav li.ui-state-active a,.accordion .question.active .title > .acc-icon-plus,.accordion .question.active .title > .acc-icon-minus,.faq .question.active .title > .acc-icon-plus,.faq .question.active .title,.accordion .question.active .title {color: #519032;}.ui-tabs .ui-tabs-nav li.ui-state-active a:after {background: #519032;}body.table-hover:not(.woocommerce-page) table tr:hover td {background: #000000;}.pricing-box .plan-header .price sup.currency,.pricing-box .plan-header .price > span {color: #519032;}.pricing-box .plan-inside ul li .yes {background: #519032;}.pricing-box-box.pricing-box-featured {background: #519032;}input[type="date"], input[type="email"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="url"],select, textarea, .woocommerce .quantity input.qty,.dark input[type="email"],.dark input[type="password"],.dark input[type="tel"],.dark input[type="text"],.dark select,.dark textarea{color: #626262;background-color: rgba(255, 255, 255, 1);border-color: #EBEBEB;}::-webkit-input-placeholder {color: #929292;}::-moz-placeholder {color: #929292;}:-ms-input-placeholder {color: #929292;}input[type="date"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="text"]:focus, input[type="url"]:focus, select:focus, textarea:focus {color: #000000;background-color: rgba(255, 255, 255, 1) !important;border-color: #d5e5ee;}:focus::-webkit-input-placeholder {color: #929292;}:focus::-moz-placeholder {color: #929292;}.woocommerce span.onsale, .shop_slider .shop_slider_ul li .item_wrapper span.onsale {border-top-color: #000000 !important;}.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {border-color: #000000 !important;}@media only screen and ( min-width: 768px ){.header-semi #Top_bar:not(.is-sticky) {background-color: rgba(255, 255, 255, 0.8);}}@media only screen and ( max-width: 767px ){#Top_bar{background-color: #ffffff !important;}#Action_bar{background-color: #FFFFFF !important;}#Action_bar .contact_details{color: #222222}#Action_bar .contact_details a{color: #0095eb}#Action_bar .contact_details a:hover{color: #007cc3}#Action_bar .social li a,#Action_bar .social-menu a{color: #bbbbbb}#Action_bar .social li a:hover,#Action_bar .social-menu a:hover{color: #777777}}html{background-color: #ffffff;}#Wrapper,#Content{background-color: #ffffff;}body, button, span.date_label, .timeline_items li h3 span, input[type="submit"], input[type="reset"], input[type="button"],input[type="text"], input[type="password"], input[type="tel"], input[type="email"], textarea, select, .offer_li .title h3 {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}#Subheader .title {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}h1, h2, h3, h4, .text-logo #logo {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}h5, h6 {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}blockquote {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}.chart_box .chart .num, .counter .desc_wrapper .number-wrapper, .how_it_works .image .number,.pricing-box .plan-header .price, .quick_fact .number-wrapper, .woocommerce .product div.entry-summary .price {font-family: "Gothic A1", Arial, Tahoma, sans-serif;}body {font-size: 14px;line-height: 25px;font-weight: 400;letter-spacing: 0px;}.big {font-size: 16px;line-height: 26px;font-weight: 500;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a{font-size: 20px;font-weight: 700;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 30px;}#Subheader .title {font-size: 64px;line-height: 70px;font-weight: 500;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 64px;line-height: 70px;font-weight: 500;letter-spacing: 0px;}h2 {font-size: 38px;line-height: 50px;font-weight: 500;letter-spacing: 0px;}h3 {font-size: 28px;line-height: 38px;font-weight: 500;letter-spacing: 0px;}h4 {font-size: 22px;line-height: 32px;font-weight: 500;letter-spacing: 0px;}h5 {font-size: 15px;line-height: 20px;font-weight: 700;letter-spacing: 0px;}h6 {font-size: 14px;line-height: 25px;font-weight: 400;letter-spacing: 0px;}#Intro .intro-title {font-size: 70px;line-height: 70px;font-weight: 400;letter-spacing: 0px;}@media only screen and (min-width: 768px) and (max-width: 959px){body {font-size: 13px;line-height: 21px;letter-spacing: 0px;}.big {font-size: 14px;line-height: 22px;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-size: 17px;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 25.5px;letter-spacing: 0px;}#Subheader .title {font-size: 54px;line-height: 60px;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 54px;line-height: 60px;letter-spacing: 0px;}h2 {font-size: 32px;line-height: 43px;letter-spacing: 0px;}h3 {font-size: 24px;line-height: 32px;letter-spacing: 0px;}h4 {font-size: 19px;line-height: 27px;letter-spacing: 0px;}h5 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h6 {font-size: 13px;line-height: 21px;letter-spacing: 0px;}#Intro .intro-title {font-size: 60px;line-height: 60px;letter-spacing: 0px;}blockquote { font-size: 15px;}.chart_box .chart .num { font-size: 45px; line-height: 45px; }.counter .desc_wrapper .number-wrapper { font-size: 45px; line-height: 45px;}.counter .desc_wrapper .title { font-size: 14px; line-height: 18px;}.faq .question .title { font-size: 14px; }.fancy_heading .title { font-size: 38px; line-height: 38px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 32px; line-height: 32px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 32px; line-height: 32px; }.pricing-box .plan-header h2 { font-size: 27px; line-height: 27px; }.pricing-box .plan-header .price > span { font-size: 40px; line-height: 40px; }.pricing-box .plan-header .price sup.currency { font-size: 18px; line-height: 18px; }.pricing-box .plan-header .price sup.period { font-size: 14px; line-height: 14px;}.quick_fact .number { font-size: 80px; line-height: 80px;}.trailer_box .desc h2 { font-size: 27px; line-height: 27px; }.widget > h3 { font-size: 17px; line-height: 20px; }}@media only screen and (min-width: 480px) and (max-width: 767px){body {font-size: 13px;line-height: 19px;letter-spacing: 0px;}.big {font-size: 13px;line-height: 20px;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-size: 15px;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 22.5px;letter-spacing: 0px;}#Subheader .title {font-size: 48px;line-height: 53px;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 48px;line-height: 53px;letter-spacing: 0px;}h2 {font-size: 29px;line-height: 38px;letter-spacing: 0px;}h3 {font-size: 21px;line-height: 29px;letter-spacing: 0px;}h4 {font-size: 17px;line-height: 24px;letter-spacing: 0px;}h5 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h6 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}#Intro .intro-title {font-size: 53px;line-height: 53px;letter-spacing: 0px;}blockquote { font-size: 14px;}.chart_box .chart .num { font-size: 40px; line-height: 40px; }.counter .desc_wrapper .number-wrapper { font-size: 40px; line-height: 40px;}.counter .desc_wrapper .title { font-size: 13px; line-height: 16px;}.faq .question .title { font-size: 13px; }.fancy_heading .title { font-size: 34px; line-height: 34px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 28px; line-height: 28px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 28px; line-height: 28px; }.pricing-box .plan-header h2 { font-size: 24px; line-height: 24px; }.pricing-box .plan-header .price > span { font-size: 34px; line-height: 34px; }.pricing-box .plan-header .price sup.currency { font-size: 16px; line-height: 16px; }.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}.quick_fact .number { font-size: 70px; line-height: 70px;}.trailer_box .desc h2 { font-size: 24px; line-height: 24px; }.widget > h3 { font-size: 16px; line-height: 19px; }}@media only screen and (max-width: 479px){body {font-size: 13px;line-height: 19px;letter-spacing: 0px;}.big {font-size: 13px;line-height: 19px;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-size: 13px;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 19.5px;letter-spacing: 0px;}#Subheader .title {font-size: 38px;line-height: 42px;letter-spacing: 0px;}h1, .text-logo #logo {font-size: 38px;line-height: 42px;letter-spacing: 0px;}h2 {font-size: 23px;line-height: 30px;letter-spacing: 0px;}h3 {font-size: 17px;line-height: 23px;letter-spacing: 0px;}h4 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h5 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}h6 {font-size: 13px;line-height: 19px;letter-spacing: 0px;}#Intro .intro-title {font-size: 42px;line-height: 42px;letter-spacing: 0px;}blockquote { font-size: 13px;}.chart_box .chart .num { font-size: 35px; line-height: 35px; }.counter .desc_wrapper .number-wrapper { font-size: 35px; line-height: 35px;}.counter .desc_wrapper .title { font-size: 13px; line-height: 26px;}.faq .question .title { font-size: 13px; }.fancy_heading .title { font-size: 30px; line-height: 30px; }.offer .offer_li .desc_wrapper .title h3 { font-size: 26px; line-height: 26px; }.offer_thumb_ul li.offer_thumb_li .desc_wrapper .title h3 {font-size: 26px; line-height: 26px; }.pricing-box .plan-header h2 { font-size: 21px; line-height: 21px; }.pricing-box .plan-header .price > span { font-size: 32px; line-height: 32px; }.pricing-box .plan-header .price sup.currency { font-size: 14px; line-height: 14px; }.pricing-box .plan-header .price sup.period { font-size: 13px; line-height: 13px;}.quick_fact .number { font-size: 60px; line-height: 60px;}.trailer_box .desc h2 { font-size: 21px; line-height: 21px; }.widget > h3 { font-size: 15px; line-height: 18px; }}.with_aside .sidebar.columns {width: 23%;}.with_aside .sections_group {width: 77%;}.aside_both .sidebar.columns {width: 18%;}.aside_both .sidebar.sidebar-1{margin-left: -82%;}.aside_both .sections_group {width: 64%;margin-left: 18%;}@media only screen and (min-width:1240px){#Wrapper, .with_aside .content_wrapper {max-width: 1080px;}.section_wrapper, .container {max-width: 1060px;}.layout-boxed.header-boxed #Top_bar.is-sticky{max-width: 1080px;}}@media only screen and (max-width: 767px){.section_wrapper,.container,.four.columns .widget-area { max-width: 480px !important; }}#Top_bar #logo,.header-fixed #Top_bar #logo,.header-plain #Top_bar #logo,.header-transparent #Top_bar #logo {height: 120px;line-height: 120px;padding: 0px 0;}.logo-overflow #Top_bar:not(.is-sticky) .logo {height: 120px;}#Top_bar .menu > li > a {padding: 30px 0;}.menu-highlight:not(.header-creative) #Top_bar .menu > li > a {margin: 35px 0;}.header-plain:not(.menu-highlight) #Top_bar .menu > li > a span:not(.description) {line-height: 120px;}.header-fixed #Top_bar .menu > li > a {padding: 45px 0;}#Top_bar .top_bar_right,.header-plain #Top_bar .top_bar_right {height: 120px;}#Top_bar .top_bar_right_wrapper {top: 40px;}.header-plain #Top_bar a#header_cart,.header-plain #Top_bar a#search_button,.header-plain #Top_bar .wpml-languages,.header-plain #Top_bar a.action_button {line-height: 120px;}.logo-overflow #Top_bar.is-sticky #logo{padding:0!important;}@media only screen and (max-width: 767px){#Top_bar a.responsive-menu-toggle {top: 70px;}}.twentytwenty-before-label::before { content: "Before";}.twentytwenty-after-label::before { content: "After";}#Side_slide{right:-250px;width:250px;}#Side_slide.left{left:-250px;}.blog-teaser li .desc-wrapper .desc{background-position-y:-1px;}
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
<meta name="generator" content="Powered by Slider Revolution 6.1.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/cropped-logo-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/cropped-logo-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/cropped-logo-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/cropped-logo-1-270x270.png" />
<script type="text/javascript">function setREVStartSize(t){try{var h,e=document.getElementById(t.c).parentNode.offsetWidth;if(e=0===e||isNaN(e)?window.innerWidth:e,t.tabw=void 0===t.tabw?0:parseInt(t.tabw),t.thumbw=void 0===t.thumbw?0:parseInt(t.thumbw),t.tabh=void 0===t.tabh?0:parseInt(t.tabh),t.thumbh=void 0===t.thumbh?0:parseInt(t.thumbh),t.tabhide=void 0===t.tabhide?0:parseInt(t.tabhide),t.thumbhide=void 0===t.thumbhide?0:parseInt(t.thumbhide),t.mh=void 0===t.mh||""==t.mh||"auto"===t.mh?0:parseInt(t.mh,0),"fullscreen"===t.layout||"fullscreen"===t.l)h=Math.max(t.mh,window.innerHeight);else{for(var i in t.gw=Array.isArray(t.gw)?t.gw:[t.gw],t.rl)void 0!==t.gw[i]&&0!==t.gw[i]||(t.gw[i]=t.gw[i-1]);for(var i in t.gh=void 0===t.el||""===t.el||Array.isArray(t.el)&&0==t.el.length?t.gh:t.el,t.gh=Array.isArray(t.gh)?t.gh:[t.gh],t.rl)void 0!==t.gh[i]&&0!==t.gh[i]||(t.gh[i]=t.gh[i-1]);var r,a=new Array(t.rl.length),n=0;for(var i in t.tabw=t.tabhide>=e?0:t.tabw,t.thumbw=t.thumbhide>=e?0:t.thumbw,t.tabh=t.tabhide>=e?0:t.tabh,t.thumbh=t.thumbhide>=e?0:t.thumbh,t.rl)a[i]=t.rl[i]<window.innerWidth?0:t.rl[i];for(var i in r=a[0],a)r>a[i]&&0<a[i]&&(r=a[i],n=i);var d=e>t.gw[n]+t.tabw+t.thumbw?1:(e-(t.tabw+t.thumbw))/t.gw[n];h=t.gh[n]*d+(t.tabh+t.thumbh)}void 0===window.rs_init_css&&(window.rs_init_css=document.head.appendChild(document.createElement("style"))),document.getElementById(t.c).height=h,window.rs_init_css.innerHTML+="#"+t.c+"_wrapper { height: "+h+"px }"}catch(t){console.log("Failure at Presize of Slider:"+t)}};</script>

</head>

<body class="page-template-default page page-id-227 wp-custom-logo template-slider  color-custom style-simple button-default layout-full-width if-zoom if-border-hide no-shadows header-classic sticky-header sticky-tb-color ab-hide subheader-title-right menu-link-color menuo-right menuo-no-borders logo-no-sticky-padding footer-hide footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll mobile-tr-header tr-header tr-menu be-reg-2108">

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
				<div class="logo"><a id="logo" href="https://www.alcurnia360.com.co" title="Alcurnia 360" data-height="120" data-padding="0"><img class="logo-main scale-with-grid" src="http://www.alcurnia360.com.co/wp-content/uploads/2020/02/logo.png" data-retina="" data-height="1212" alt="logo" data-no-retina /><img class="logo-sticky scale-with-grid" src="http://www.alcurnia360.com.co/wp-content/uploads/2020/02/logo.png" data-retina="" data-height="1212" alt="logo" data-no-retina /><img class="logo-mobile scale-with-grid" src="http://www.alcurnia360.com.co/wp-content/uploads/2020/02/logo.png" data-retina="" data-height="1212" alt="logo" data-no-retina /><img class="logo-mobile-sticky scale-with-grid" src="http://www.alcurnia360.com.co/wp-content/uploads/2020/02/logo.png" data-retina="" data-height="1212" alt="logo" data-no-retina /></a></div>
				<div class="menu_wrapper">
					<nav id="menu"><ul id="menu-menu-left" class="menu menu-main"><li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.alcurnia360.com.co/somos/"><span>SOMOS ALCURNIA</span></a></li>
<li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="https://www.alcurnia360.com.co/"><span>INICIO</span></a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page"><a rel="httpswwwalcurnia360comcoclientesindexphp" href="https://www.alcurnia360.com.co/clientes/"><span>CLIENTES ALCURNIA</span></a></li>
<li id="menu-item-167" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://www.alcurnia360.com.co/contacto/"><span>CONTACTO</span></a></li>
</ul></nav><a class="responsive-menu-toggle " href="#"><i class="icon-menu-fine"></i></a>				</div>

				<div class="secondary_menu_wrapper">
					<!-- #secondary-menu -->
									</div>

				<div class="banner_wrapper">
									</div>

				<div class="search_wrapper">
					<!-- #searchform -->

					
<form method="get" id="searchform" action="https://www.alcurnia360.com.co/">

	
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
<div class="mfn-main-slider" id="mfn-rev-slider">
			<!-- START vacacionales REVOLUTION SLIDER 6.1.3 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_7_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
				<rs-module id="rev_slider_7_1" style="display:none;" data-version="6.1.3">
					<rs-slides>
						<rs-slide data-key="rs-20" data-title="Slide" data-anim="ei:d;eo:d;s:1100;r:0;t:fade;sl:d;">
							<img src="Paquetes/Paquete1<?=$IdPaquete?>.jpg" title="BANNERPERIODOVACA" width="2560" height="1241" data-parallax="4" data-panzoom="d:20000;e:Power4.easeOut;ss:110;se:100;" class="rev-slidebg" data-no-retina>
<!---->						</rs-slide>
					</rs-slides>
					<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_7_1',rl:[1240,1024,778,480],el:[768],gw:[1240],gh:[768],layout:'fullscreen',offsetContainer:'',offset:'',mh:"0"});
					var	revapi7,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_7_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_7_1");
						}else{
							revapi7 = tpj("#rev_slider_7_1").show().revolution({
								jsFileLocation:"//www.alcurnia360.com.co/wp-content/plugins/revslider/public/assets/js/",
								sliderLayout:"fullscreen",
								duration:3000,
								visibilityLevels:"1240,1024,778,480",
								gridwidth:1240,
								gridheight:768,
								minHeight:"",
								spinner:"spinner2",
								editorheight:"768,768,960,720",
								responsiveLevels:"1240,1024,778,480",
								disableProgressBar:"on",
								navigation: {
									onHoverStop:false
								},
								parallax: {
									levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
									type:"scroll",
									origo:"slidercenter"
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
				</script>
				<script>
					var htmlDivCss = ' #rev_slider_7_1_wrapper rs-loader.spinner2{ background-color: #519032 !important; } '
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div></header>
			
		</div>

		
		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
<div id="Content">
	<div class="content_wrapper clearfix">

		<div class="sections_group">

			<div class="entry-content" itemprop="mainContentOfPage">

				<div class="section mcb-section mcb-section-ce834de52"  style="padding-top:75px; padding-bottom:125px; background-color:#ffffff" ><div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-c3736e677 one  valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-8c15e7a3e one-second column_column"><div class="column_attr clearfix align_left mobile_align_center"  style=""><h4 style="color: #e1b123 ;"><?=$Descripcion?><br />
<br />
<h3 style="color: #e1b123;">Fechas: <?=$Fechas?></h3>
<h3 style="color: #e1b123;">Vigencia: <?=$Vigencia?></h3></div></div><div class="column mcb-column mcb-item-c2eaf51df one-sixth column_placeholder"><div class="placeholder">&nbsp;</div></div><div class="column mcb-column mcb-item-f3bd79695 one-third column_column"><div class="column_attr clearfix"  style=""><p style="font: 20px sans-serif; color: #e1b123; margin: 0px;">&nbsp Desde</p>
<p style="font: 100px sans-serif; color: #e1b123; margin: 0px;"><?=$Precio?><span style="font: 40px sans-serif; color: #e1b123 ; vertical-align: 40%"><?=$Moneda?></span></p>
<p style="font: 20px sans-serif; color: #e1b123; margin: 0px;">&nbsp &nbsp costo por persona</p>
<br />
<div class="button_align align_center"><a class="button  button_size_2 button_js" href="http://www.alcurnia360.com.co/clientes/beneficios/arma-tu-viaje.php?p=<?=$Nombre?>" style="background-color:#e1b123!important;color:#ffffff;"><span class="button_label">RESERVA AQUÍ</span></a></div></div></div><div class="column mcb-column mcb-item-faa5c51a3 one column_placeholder"><div class="placeholder">&nbsp;</div></div><div class="column mcb-column mcb-item-n4bvv38l0 one column_column"><div class="column_attr clearfix align_center mobile_align_center"  style=""><h2 style="color: #e1b123 ;">¿Qué Incluye?<br />
</div></div>







<!--

</div><div class="column mcb-column mcb-item-oioopm141 one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC4-150x150.png" alt="REC4" title="REC4" width="150" height="150"/></div></div>

</div><div class="column mcb-column mcb-item-11c93dndf one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC3-150x150.png" alt="REC3" title="REC3" width="150" height="150"/></div></div>

-->
















<hr>
<?php
if($Traslados==1)
{
	?>


<div class="column mcb-column mcb-item-0cfbe3c72 one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC10-150x150.png" alt="REC10" title="REC10" width="150" height="150"/></div></div>
</div><div class="column mcb-column mcb-item-alhdmbmfc one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC2-150x150.png" alt="REC2" title="REC2" width="150" height="150"/></div></div>

	<?php
}
//$Guia=$_POST["Guia"];
if($Guia==1)
{
	?>


</div><div class="column mcb-column mcb-item-fbi0cebyb one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC13-150x150.png" alt="REC13" title="REC13" width="150" height="150"/></div></div>
	<?php
}
//$Desayuno=$_POST["Desayuno"];
if($Desayuno==1)
{
	?>



</div><div class="column mcb-column mcb-item-iexfmvcna one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC11-150x150.png" alt="REC11" title="REC11" width="150" height="150"/></div></div>
	<?php
}
//$Sturisticos=$_POST["Sturisticos"];
if($Sturisticos==1)
{
	?>

</div><div class="column mcb-column mcb-item-3qpb6xrbc one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC7-150x150.png" alt="REC7" title="REC7" width="150" height="150"/></div></div>

	<?php
}
//$Hotel=$_POST["Hotel"];
if($Hotel==1)
{
	?>


</div><div class="column mcb-column mcb-item-la673vxgm one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC8-150x150.png" alt="REC8" title="REC8" width="150" height="150"/></div></div>
	<?php
}
//$Alojamiento=$_POST["Alojamiento"];
if($Alojamiento==1)
{
	?>


</div><div class="column mcb-column mcb-item-vud4co96d one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC5-150x150.png" alt="REC5" title="REC5" width="150" height="150"/></div></div>
	<?php
}
//$Impuestos=$_POST["Impuestos"];
if($Impuestos==1)
{
	?>

</div><div class="column mcb-column mcb-item-11714eebs one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC6-150x150.png" alt="REC6" title="REC6" width="150" height="150"/></div></div>
	<?php
}
//$Equipaje=$_POST["Equipaje"];
if($Equipaje==1)
{
	?>


</div><div class="column mcb-column mcb-item-qhixoxug4 one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC1-150x150.png" alt="REC1" title="REC1" width="150" height="150"/></div></div>
	<?php
}
//$Shopping=$_POST["Shopping"];
if($Shopping==1)
{
	?>


</div><div class="column mcb-column mcb-item-inhs6r5xy one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC9-150x150.png" alt="REC9" title="REC9" width="150" height="150"/></div></div>
	<?php
}
//$Asistencia=$_POST["Asistencia"];
if($Asistencia==1)
{
	?>

</div><div class="column mcb-column mcb-item-n5ougi6hz one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC12-150x150.png" alt="REC12" title="REC12" width="150" height="150"/></div></div>
	<?php
}
//$Alimentacion=$_POST["Alimentacion"];
if($Alimentacion==1)
{
	?>


</div><div class="column mcb-column mcb-item-iexfmvcna one-fifth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch-ultrawide no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/REC11-150x150.png" alt="REC11" title="REC11" width="150" height="150"/></div></div>
	<?php
}
?>



<hr>
























</div><div class="column mcb-column mcb-item-rg8sip74m one column_placeholder"><div class="placeholder">&nbsp;</div></div><div class="column mcb-column mcb-item-6f3b7739b one column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="Paquetes/Paquete2<?=$IdPaquete?>.jpg" alt="" title=""  /></div></div>
</div><div class="column mcb-column mcb-item-1d8h2ton0 one-second column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="Paquetes/Paquete3<?=$IdPaquete?>.jpg" alt="" title=""  /></div></div>
</div><div class="column mcb-column mcb-item-4e1fea983 one-second column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter stretch no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="Paquetes/Paquete4<?=$IdPaquete?>.jpg" alt="" title=""  /></div></div>
</div><div class="column mcb-column mcb-item-4f5d06823 one column_column"><div class="column_attr clearfix"  style=" background-color:#ffffff;"><div class="button_align align_center"><a class="button  button_size_2 button_js" href="http://www.alcurnia360.com.co/clientes/beneficios/arma-tu-viaje.php?p=<?=$Nombre?>" style="background-color:#e1b123!important;color:#ffffff;"><span class="button_label">RESERVA AQUÍ</span></a></div></div></div></div></div></div></div><div class="section mcb-section mcb-section-8b39415fd"  style="padding-top:0px; padding-bottom:0px; background-color:#000000" ><div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-430d164a8 one  valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-f3eeb7ec1 two-fifth column_placeholder"><div class="placeholder">&nbsp;</div></div><div class="column mcb-column mcb-item-87f0fc601 one-sixth column_image"><div class="image_frame image_item no_link scale-with-grid aligncenter no_border" ><div class="image_wrapper"><img class="scale-with-grid" src="https://www.alcurnia360.com.co/wp-content/uploads/2020/02/logo-150x150.png" alt="logo" title="logo" width="150" height="150"/></div></div>
</div><div class="column mcb-column mcb-item-qs1igwwqz three-fifth column_column"><div class="column_attr clearfix"  style=" background-color:#000000;"><h4  style="color: #fff;"><a style=" color: #fff; padding-bottom: 20px; text-decoration: none; " href="https://www.alcurnia360.com.co/">alcurnia360.com.co</a></h4>
<h4  style="color: #fff;"><a style="text-decoration: none;color:#FFF " href="mailto:handshake@alcurnia360.com.co">handshake@alcurnia360.com.co</a></h4>
<h4 style="color: #fff;"> <a style="text-decoration: none;color:#FFF  " href="tel:+5712485030">248 5030</a> / Trasv 100 A # 80 A - 20 Local: N 2 - 106</h4>
<h4 style="color: #fff;"> C.C Portal de la 80 </h4></div></div><div class="column mcb-column mcb-item-6fa02f2ea two-fifth column_column"><div class="column_attr clearfix align_right"  style=" background-color:#000000;"><a style=" color: #fff; padding-bottom: 3px;" href="https://www.alcurnia360.com.co/somos/">SOMOS ALCURNIA</a>
<br />
<a style=" color: #fff; padding-bottom: 3px;" href="https://www.alcurnia360.com.co/">INICIO</a>
<br />
<a style=" color: #fff; padding-bottom: 3px;" href="https://www.alcurnia360.com.co/clientes/">CLIENTES ALCURNIA</a>
<br />
<a style=" color: #fff; padding-bottom: 3px;" href="https://www.alcurnia360.com.co/contacto/">CONTACTO</a>
</div></div></div></div></div></div><div class="section the_content no_content"><div class="section_wrapper"><div class="the_content_wrapper"></div></div></div>
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


<!-- mfn_hook_content_after --><!-- mfn_hook_content_after -->

</div>

<div id="Side_slide" class="right dark" data-width="250"><div class="close-wrapper"><a href="#" class="close"><i class="icon-cancel-fine"></i></a></div><div class="extras"><div class="extras-wrapper"></div></div><div class="lang-wrapper"></div><div class="menu_wrapper"></div><ul class="social"></ul></div><div id="body_overlay"></div>


<!-- mfn_hook_bottom --><!-- mfn_hook_bottom -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

		<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}
		</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.alcurnia360.com.co\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mfn = {"mobileInit":"1240","parallax":"translate3d","responsive":"1","retinaJS":"0","lightbox":{"disable":false,"disableMobile":false,"title":false},"slider":{"blog":0,"clients":0,"offer":0,"portfolio":0,"shop":0,"slider":0,"testimonials":0},"ajax":"https:\/\/www.alcurnia360.com.co\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/themes/betheme/js/plugins.js?ver=21.0.8'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/themes/betheme/js/menu.js?ver=21.0.8'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/themes/betheme/assets/animations/animations.min.js?ver=21.0.8'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/themes/betheme/assets/jplayer/jplayer.min.js?ver=21.0.8'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/themes/betheme/js/parallax/translate3d.js?ver=21.0.8'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-content/themes/betheme/js/scripts.js?ver=21.0.8'></script>
<script type='text/javascript' src='https://www.alcurnia360.com.co/wp-includes/js/wp-embed.min.js?ver=5.3.2'></script>

</body>
</html>
