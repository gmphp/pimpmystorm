<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>How To Pimp the PhpStorm IDE from JetBrains</title>
		<meta name="description" content="A list of setting tweaks that you must do every time you install PhpStorm on a new computer.">
		<meta name="author" content="Gregorio Ramirez">
		<link rel="stylesheet" href="<?php echo $path = '/assets/css/main.css' ?>?<?php echo filemtime(__DIR__.$path) ?>">
	</head>
	<body> 
		<img src="/assets/images/phpstorm.png" class="logo" alt="PhpStorm">
		<h1>
			How To Pimp PhpStorm 
			<span class="by">By Gregorio Ramirez</span>
		</h1>
		<h2><span id="tweaks"></span> tweaks you must do before using the <a href="http://www.jetbrains.com/phpstorm/">PhpStorm</a> IDE from <a href="http://www.jetbrains.com">JetBrains</a>.</h2> 
		<p>The following list is a series of tweaks that I take the time to do everytime I install the PhpStorm software on a new computer. Most of these tweaks enhance my productivity, and all around just makes my coding session much more pleasant. I'm always on the lookout for more tweaks, so feel free to drop a comment or send me an email with a new finding.</p> 

		<div class="tweak"> 
			<h3>1. Turn <span class="bad">off</span> "Allow placement of caret after end of line"</h3> 
			<p class="path"><strong>Settings:</strong> <em>IDE Settings</em> > <em>Editor</em> > <em>Virtual Space</em> > Allow placement of caret after end of line</p> 
			<p>When enabled, this setting allows the cursor to step into virtual characters that don't exist. For instance, when jumping the cursor down to the next line, instead of placing the caret at the end of the line below, it will create the needed spaces to fill in the void.</p> 
			<h4>Before:</h4> 
			<p><img src="/assets/images/caret_after_end_of_file_before.png" class="bad" alt=""></p> 
			<h4>After:</h4> 
			<p><img src="/assets/images/caret_after_end_of_file_after.png" class="good" alt=""></p> 
		</div>
	
		<div class="tweak"> 
			<h3>2. Turn <span class="good">on</span> "Show virtual space at file bottom"</h3> 
			<p class="path"><strong>Settings:</strong> <em>IDE Settings</em> > <em>Editor</em> > <em>Virtual Space</em> > Show virtual space at file bottom</p> 
			<p>This setting allows you to scroll down beyond the end of a file, effectively allowing you to place the end of the file in the middle of the screen, as oppose to staring down at the bottom of the screen to see the last line of code.</p> 
		</div> 
		
		<p>
			<a href="http://feeds.feedburner.com/pimpmystorm"><img src="http://feeds.feedburner.com/~fc/pimpmystorm?bg=FF9900&amp;fg=0000000&amp;anim=0" height="26" width="88" alt="" /></a>
			
			&nbsp;
			
			<script type="text/javascript">
			var sc_project=6934240; 
			var sc_invisible=0; 
			var sc_security="701d0f57"; 
			</script>
			<script type="text/javascript"
			src="http://www.statcounter.com/counter/counter.js"></script>
			<noscript><div class="statcounter"><a title="tumblr hit
			counter" href="http://statcounter.com/tumblr/"
			target="_blank"><img class="statcounter"
			src="http://c.statcounter.com/6934240/0/701d0f57/0/"
			alt="tumblr hit counter"></a></div></noscript>
		</p>
		<p><a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.</p>
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="<?php echo $path = '/assets/js/main.js' ?>?<?php echo filemtime(__DIR__.$path) ?>"></script>
		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-23767607-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
	</body> 
</html>