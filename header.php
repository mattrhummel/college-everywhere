<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package college_everywhere
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Ads: 991441201 --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-991441201"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-991441201'); </script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11698249-12"></script>
		<!-- Event snippet for Applications conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-991441201/-L2SCKvsxGEQseLg2AM', 'value': 150.0, 'currency': 'USD', 'event_callback': callback }); return false; } </script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-11698249-12');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1144728302536839'); 
fbq('track', 'PageView');
</script>

<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=1144728302536839&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<meta name="google-site-verification" content="P28NFm-IpgZF7qYJAWLS6yfG0lgCocO7ResGnT07Bq4" />
</head>

<body <?php body_class(); ?>>


<div id="page">
<a class="sr-only sr-only-focusable" href="#primary">Skip to content test</a>