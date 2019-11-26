<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="{$meta_description}"/>
<meta name="keywords" content="{$meta_keywords}"/> 
<meta name="robots" content="{$meta_robots}" />
<link rel="stylesheet" type="text/css" href="{$theme_path}style.css" media="screen"/>
<title>{$title_tag}</title>
</head>
<body>
<div id="container">
	<div class="left" id="main_left">
		<div id="header">{$banner}</div>
		<div class="right" id="main">
			<div class="padded">
				<!-- header stops here -->
				{$guts}
				<!-- footer starts here -->		
			</div>
		</div>
		<div class="left" id="subnav">
		<h1>Links?</h1>
		<ul>
			{$nav1}
		</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
	<div class="right" id="main_right">
		<div class="padded">
			{$sidebar2}
		</div>
	</div>
	<div class="clearer">&nbsp;</div>
	<div id="footer">
		<span class="left">{$copyright} Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a></span>
		<span class="right"><a href="http://templates.arcsin.se/">Website template</a> by <a href="http://arcsin.se/">Arcsin</a></span>
		<div class="clearer">&nbsp;</div>
	</div>
</div>
</body>
</html>