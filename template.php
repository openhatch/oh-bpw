<?php
function link_to($path, $name) {
	 print '<a href="' . $path . '">';
	 print $name;
	 print '</a>';
	 }
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php $base_href = 'file://' . dirname(__FILE__) . '/public/';
	if (getenv("BASE_HREF")) {
	$base_href = getenv("BASE_HREF");
	}
	?>
	<base href="<?php echo $base_href ?>" />
	<title>Boston Python Workshop: <?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" media="screen, print, projection" href="style.css" />

</head>
<body>
<div id="wrap">
	<div id="header"><h1><?php echo $page_title; ?></h1></div>
	<div id="sidebar">
		<a href="./"><img style="padding-top: 30px; width: 150px;" src="images/bpw-logo.png"></a>
		<h2><?php link_to('about/', 'about'); ?></h2>
		<h2><?php link_to('events/', 'events'); ?></h2>
		<p>&nbsp;</p>
		<h2><?php link_to('results/', 'results'); ?></h2>
		<h2><?php link_to('thanks/', 'thanks'); ?></h2>
		<h2><?php link_to('press/', 'press'); ?></h2>
		<p>&nbsp;</p>
		<h2><?php link_to('clone-it/', 'run your own'); ?></h2>
	</div>
	<div id="main">
	<?php echo $content; ?>
	</div>

</div>
</body>
</html>
