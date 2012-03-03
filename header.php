<!doctype html>
<html lang="de">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="wp-content/themes/pl07/js/hyphenate.js" type="text/javascript"></script>
	<script src="wp-content/themes/pl07/js/script.js" type="text/javascript"></script>
	<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29609712-1']);
  _gaq.push(['_setDomainName', 'pl07.de']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body onload="initPl07()">
	<header class="top">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	</header><!-- header -->
	<nav class="top">
		<ul>
			<li style="display:none"><a href="<?php bloginfo('url'); ?>">Home</a></li>
			<li style="display:none"><a href="<?php bloginfo('url'); ?>" style="display:none">Blog</a></li>
			<li style="display:none"><a href="#about">About</a></li>
			<li style="display:none"><a href="#">Archives</a></li>
			<li style="display:none"><a href="#">Contact</a></li>
			<li  style="display:none" class="subscribe"><a href="#">Subscribe via. RSS</a></li>
		</ul>
	</nav><!-- Navigation -->