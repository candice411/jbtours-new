<div align="center">
	<a onMouseOver="var img=document['fpAnimswapImgFP2'];img.imgRolln=img.src;img.src=img.lowsrc?img.lowsrc:img.getAttribute?img.getAttribute('lowsrc'):img.src;" onMouseOut="document['fpAnimswapImgFP2'].src=document['fpAnimswapImgFP2'].imgRolln" title="Return to top of page" href="#top">
<img border="0" src="images/back-to-top.jpg" width="79" height="22" id="fpAnimswapImgFP2" name="fpAnimswapImgFP2" dynamicanimation="fpAnimswapImgFP2" lowsrc="images/back-to-top-hover.jpg"></a></b></div>
<p align="center">
Updated : <strong>25-07-11</strong> | Visitor : <span class="counter">
<?php
$filename= "counter/logs/hit_count.txt" ;
$fd = fopen ($filename , "r") or die ("Can't open $filename") ;
$fstring = fread ($fd , filesize ($filename)) ;
echo "$fstring" ;
fclose($fd) ;

$fd = fopen ($filename , "w") or die ("Can't open $filename") ;
$fcounted = $fstring + 1 ;
$fout= fwrite ($fd , $fcounted ) ;
fclose($fd) ;

?></span>		 <br>

<a href="contact-us.php" title="Contact JB Train Tours">Contact Us</a> | <a href="general-information-jb-train-tours.php" title="General info about our train tours">General Info</a><br />
<a href="http://twitter.com/JBTrainTours" title="Follow us on Twitter" target="_blank"><img src="images/twitter-logo.png" alt="JB Train Tours - Twitter" width="32" height="32" border="0" /></a><a href="http://www.facebook.com/pages/Boksburg-South-Africa/JB-Train-Tours/134781029867862" title="Add us on Facebook" target="_blank"><img src="images/facebook-logo.png" alt="JB Train Tours - Facebook" width="32" height="32" border="0" /></a><br />
Copyright &copy; 2010 JB Train Tours. All Rights Reserved.</p> 
<!-- end #footer -->


<!-- Start | Google Analytics Code -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3450581-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- End | Google Analytics Code -->