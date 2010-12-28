<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
	<head>
		<title>Kwicks 1.5.1 Example Page</title>
		<!-- IMPORTANT!!! Include the stylesheet *BEFORE* the JavaScript (necessary for Safari 3.1.1) -->
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		
		<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="js/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$().ready(function() {
				$('.kwicks').kwicks({
					max : 205,
					spacing : 5
				});
			});
		</script>
	</head>
	
	<body>
		<ul class="kwicks horizontal" >
			<li id="kwick1"></li>
			<li id="kwick2"></li>
			<li id="kwick3"></li>
			<li id="kwick4"></li>
		</ul><br />
<br />	
</body>
</html>