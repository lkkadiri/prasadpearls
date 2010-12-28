<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Prasad Pearls Home</title>
	
	<meta name="keywords" content="jquery,user interface,ui,widgets,interaction,javascript" />
	<meta name="description" content="jQuery UI is the official jQuery user interface library. It provides interactions, widgets, effects, and theming for creating Rich Internet Applications." />
	<meta name="author" content="The jQuery Project" />
	
	<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>
	
	<link rel="shortcut icon" href="/images/favicon.ico" />
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/css/pearls.css" type="text/css" media="all" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
</head>

<body id="home">
<!--[if IE 5]><div id="ie5" class="ie"><![endif]-->
<!--[if IE 6]><div id="ie6" class="ie"><![endif]-->
<!--[if IE 7]><div id="ie7" class="ie"><![endif]-->
<div id="wrapper">
	<div id="banner">

		<h1 class="logo">
			<a href="/home" title="jQuery UI"><span>Prasad Pearls</span></a>
		</h1>
		</div>
        <div id="navigation"><?php
		if (! isset($_SESSION['Affiliate'])){
			echo $this->element('navigation');	
		}else{
		}
		 ?></div>
		<div id="content">
			<?php echo $content_for_layout; ?>
		</div> 
	</div>
	<div id="content-wrapper">
		<div id="content">
				<div class="content">﻿<div class="content-body">
<div id="home-content-wrapper">


	<div id="home-content">
		<div id="home-nav">

	</div><!-- /home-content -->

</div><!-- /home-content-wrapper -->
</div>		</div>
		</div>
	</div>
</div>
<!--[if lte IE 7]></div><![endif]-->
<script type="text/javascript">
var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-1076265-1']); _gaq.push(['_trackPageview']); _gaq.push(['_setDomainName', '.jqueryui.com']);
(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);})();
</script>
<script type="text/javascript">
$(document).ready(function() {
$('a').click(function(){
        this.blur();
});
});
</script>
</body>

</html>

