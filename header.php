<?php
	//Opening file to get counter value
	$fp = fopen ("hit_count.txt", "r");
	$count_number = fread ($fp, filesize ("hit_count.txt"));
	fclose($fp);
?>
<img src="images/header.jpg" width="777" height="106" alt="JB Train Tours" /><img src="images/flag-complete.gif" width="123" height="106" alt="Waveing South African Flag" />
  <div id="main-menu"><?php include('menu.php'); ?></div>