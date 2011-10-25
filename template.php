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
	<div id="sidebar">
  <ul class="nav inline">
  <li><a href="./"><img class="logo" style="width: 75px; height: 43px;" src="images/bpw-logo.png"></a></li>
  </ul>
  <ul class="nav top_higher">
		<li><?php link_to('about/', 'about'); ?></li>
		<li><?php link_to('events/', 'events'); ?></li>
		<li><?php link_to('thanks/', 'thanks'); ?></li>
		<li><?php link_to('press/', 'press'); ?></li>
		<li><?php link_to('clone-it/', 'run your own'); ?></li>
		</ul>
	</div>
<div id="wrap">
	<div id="header"><h1><?php echo $page_title; ?></h1></div>
	<div id="main">
	<?php echo $content; ?>
	</div>

</div>
</body>
</html>
