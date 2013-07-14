<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>2013 Holiday Rates and Dates | JB Train Tours</title>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script>

	$(document).ready(function () {
		var top = $('#scrollingDiv').offset().top - parseFloat($('#scrollingDiv').css('marginTop').replace(/auto/, 0));
			 $(window).scroll(function (event) {
		    // what the y position of the scroll is
		    var y = $(this).scrollTop();
			if (y > top) {
				$('#scrollingDiv').css('display', 'block');
			} else {
				$('#scrollingDiv').css('display', 'none');
			}
		});
             $('#scrollingDiv').click(function () {
                 $('html, body').animate({
                     scrollTop: '0px'
                 },
                 1500);
                 return false;
             });
         });
</script>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link href="menu-dropdown/css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="menu-dropdown/css/dropdown/themes/mtv.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
<script type="text/javascript" src="menu-dropdown/js/jquery/jquery.js"></script>
<script type="text/javascript" src="menu-dropdown/js/jquery/jquery.dropdown.js"></script>
<![endif]-->
</head>

<body class="oneColFixCtrHdr" name="top">


<div id="container">
<div id="header"><?php include('header.php'); ?></div>
<div class="clearer"></div>
   <div id="mainContent">
   	<a name="specials"></a>
   	<h1 align="center">2013 Year Programme</h1>
   	
   	<div class="btn"><a href="#specials">Special Offers</a></div>
   	<?php include('2013/specials_2013.html'); ?>

   	<div id="" class="rd_nav">
	   <div class="btn"><a href="#holiday">Holiday</a></div>
	   <div class="btn"><a href="#motorbike">Motorbikes</a></div>
	   <div class="btn"><a href="#sport">Sport</a></div>
	   <div class="btn"><a href="#festival">Festival</a></div>
	   <div class="btn"><a href="#upmarket">Upmarket</a></div>
	   <div id="scrollingDiv" class="btn"><a href="#top">^Back to top</a></div>
	   <div class="clearer"></div>
	</div>

	  <div style="margin-top:10px;"><a name="holiday"></a></div>
      <?php include('2013/holiday_2013.html'); ?>
      <a name="motorbike"></a><?php include('2013/motorbike_2013.html'); ?>
      <a name="sport"></a><?php include('2013/sport_2013.html'); ?>
      <?php include('2013/rugby_2013.html'); ?>
      <a name="festival"></a><?php include('2013/festival_2013.html'); ?>
      <a name="upmarket"></a><?php include('2013/upmarket_2013.html'); ?>
      <?php include('2013/footer.html'); ?>

   </div> <!-- //end mainContent -->
   
   <div id="footer">
    <?php include('footer.php'); ?>
   </div>
  
</div>