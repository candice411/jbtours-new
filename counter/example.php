<?php

	// Before you can use your counter, you must configure the settings in 
	// config.php properly.  This is where you will define the style of the 
	// counter.
	//
	// There are three lines that are required to add a counter to your page.
	// First, you must include the counter.php script with require_once().  
	// Second, you must call the do_counter_hit() method to count the hit.  
	// Lastly, you must call show_counter() at the point in your page where 
	// you want the counter to be displayed.
	//
	// IMPORTANT: The require_once() and do_counter_hit() calls must appear in 
	// a PHP code block *before* any HTML output.  Otherwise, the cookie may  
	// not get set properly, resulting in duplicate hits.
	//  
	// Modify these lines as follows: 
	//
	// * Change the require_once path to reflect where DRBCounter is installed.  
	// * Change the parameter for do_counter_hit() to reflect the unique  
	//   ID for the counter on this page.  This feature allows you to store  
	//   data for more than one counter using the same installation of 
	//   DRBCounter.  IDs must be alphanumeric and less than 40 characters.
	//   New IDs must be added to the VALID_COUNTER_IDS array in config.php.
	// * Change the parameter for show_counter() to reflect the ID you 
	//   provided in the call to do_counter_hit().
	//
	
	require_once('counter/counter.php');
	do_counter_hit('1');
	
	//
	// See the call to show_counter() further down on this page.
	//

?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Counter Demo</title>
<style type="text/css">
body {
	font-family: Arial, sans-serif;
	font-size: 10pt;
	background-color: #ffffff;
	color: #000000;
}

h1 {
	width: 600px;
	font-family: Arial, sans-serif;
	font-size: 16pt;
	font-weight: bold;
	color: #000000;
	border-bottom: solid 4px #000000;
}

.credit {
	font-family: Arial, sans-serif;
	font-size: 8pt;
	color: #696969;
}

a:link, a:visited, a:active {
	text-decoration: none;
	background: transparent;
}

a:link {
	color: #0000ff;
}

a:visited {
	color: #990099;
}

a:active {
	color: #ff0000;
}

a:link:hover, a:visited:hover, a:active:hover {
	color: #ff0000;
}
</style>
</head>
<body>

<h1>Counter Demo</h1>

<p>
This page is intended to demonstrate how you can quickly add  
a text counter to almost any page on your website.
</p>

<p>
Number of hits: 

<?php 

	// Change the parameter for show_counter() to reflect the ID you 
	// provided in the call to do_counter_hit().
	show_counter('1');

?>

</p>

<div class="credit">Powered by DRBCounter, a free <a href="http://www.dbscripts.net/counter/">PHP counter</a> script</div>

</body>
</html>