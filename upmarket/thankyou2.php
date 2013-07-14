<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JB Train Tours</title>
<style type="text/css">
<!--
@import url("jb.css");
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/bgtile.gif);
}
-->
</style>
</head>

<body>
<table width="769" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td scope="col"><img src="images/header_new.jpg" width="769" height="321" /></td>
          </tr>
          <tr>
            <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="768" height="47">
              <param name="movie" value="images/topnav2.swf" />
              <param name="quality" value="high" />
              <embed src="images/topnav2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="768" height="47"></embed>
            </object></td>
          </tr>
          <tr>
            <td><img src="images/text_top.gif" width="769" height="20" /></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#fff2cd" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="20" scope="col">&nbsp;</td>
                    <td valign="top" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td scope="col">&nbsp;</td>
                        <td width="20" scope="col">&nbsp;</td>
                      </tr>
                      <tr>
                        <td><p align="center" class="maintext">Thank you!</p>
                          <p align="center" class="maintext">JB Train Tours are looking forward to keeping you informed through our newsletters. </p></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><!-- PHP mail code start -->

<?php
		
	//*** SEND EMAIL TO CLIENT - TEXT/HTML ***
	// building the text-version
	$mail_text= "To whom it may concern";
	$mail_text.= "\n\nThe following details was submitted";
	$mail_text.= "\n\nName & Surname: ".$_POST['name']."";
	$mail_text.= "\n\nCompany Name: ".$_POST['company']."";
	$mail_text.= "\nTel No: ".$_POST['contact']."";
	$mail_text.= "\nMobile: ".$_POST['mobile']."";
	$mail_text.= "\nEmail: ".$_POST['email']."";	
	$mail_text.= "\nWhere did you hear about us: ".$_POST['hearaboutus']."";
	$mail_text.= "\nEnquiry: ".$_POST['enquiry']."";
	$mail_text.= "\n\nRegards\nPremier Classe";	

	//building the html version
	$mail_html= "<html><head>";
	$mail_html.= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\n";
	$mail_html.= "<title>E-Mail</title>
								<style type=\"text/css\">
<!--
.bodycopy {
       font-family:Verdana, Arial, Helvetica, sans-serif;
	   font-size:11px;
	   color:#000000;
	   }
	   
.bodycopyblack {
       font-family:Verdana;
	   font-size:11px;
	   color:#000000;
	   }
	   
-->
</style>	";
	$mail_html.= "</head>";
	$mail_html.= "<body leftmargin='1' topmargin='1'>";
	$mail_html.= "<font color=black>To whom it may concern<br><br>";
	$mail_html.= "The following details was submitted <br>";
	$mail_html.= "<table width=\"700\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" bgcolor=\"#FFFFFF\" class=\"bodycopyblack\">";

	$mail_html.= "<tr><td>Name & Surname:</td><td align=\"left\">".$_POST['name']."</td></tr>";
	$mail_html.= "<tr><td>Company Name:</td><td align=\"left\">".$_POST['company']."</td></tr>";
	$mail_html.= "<tr><td>Tel No:</td><td align=\"left\">".$_POST['contact']."</td></tr>";
	$mail_html.= "<tr><td>Mobile:</td><td align=\"left\">".$_POST['mobile']."</td></tr>";
	$mail_html.= "<tr><td>Email:</td><td align=\"left\">".$_POST['email']."</td></tr>";
	$mail_html.= "<tr><td>Where did you hear about us:</td><td align=\"left\">".$_POST['hearaboutus']."</td></tr>";
	$mail_html.= "<tr><td>Enquiry:</td><td align=\"left\">".$_POST['enquiry']."</td></tr></table>";
	$mail_html.= "Regards<br>Premier Classe</font></body></html>";
	
	// Boundary
	$innerboundary ="=_".time()."_=";
	
	// Mail-Header
	$mail_head ="MIME-Version: 1.0\r\n";
	$mail_head.="From: Premier Classe<jolene@jbtours.co.za>\r\n";
	$mail_head.="Reply-To: Premier Classe<jolene@jbtours.co.za>\r\n";
	$mail_head.="X-Mailer: kmPHP-Mailer\n";
	$mail_head.="Content-Type: multipart/alternative;\n\tboundary=\"".$innerboundary."\"\n";
	
	// Mail-subject
	$mail_subj ="Premier Classe Online form";
	$mail_body ="";
	
	// TEXT part
	$mail_body="\n--".$innerboundary."\n";
	$mail_body.="Content-Type: text/plain;\n\tcharset=\"iso-8859-1\"\n\n";
	$mail_body.=$mail_text."\n\n";
	
	// HTML part
	$mail_body.="\n--".$innerboundary."\n";
	$mail_body.="Content-Type: text/html;\n\tcharset=\"iso-8859-1\"\n";
	$mail_body.="Content-Transfer-Encoding: base64\n\n";
	$mail_body.=chunk_split(base64_encode($mail_html))."\n\n";
	$mail_body.="\n--".$innerboundary."--\n";
	$mail_body.="\n\n";	
	
	mail('jolene@jbtours.co.za',$mail_subj,$mail_body,$mail_head);

	$mail_html.= "<tr><td>Name & Surname:</td><td align=\"left\">".$_POST['name']."</td></tr>";
	$mail_html.= "<tr><td>Company Name:</td><td align=\"left\">".$_POST['company']."</td></tr>";
	$mail_html.= "<tr><td>Tel No:</td><td align=\"left\">".$_POST['number']."</td></tr>";	
	$mail_html.= "<tr><td>Mobile:</td><td align=\"left\">".$_POST['mobile']."</td></tr>";
	$mail_html.= "<tr><td>Email:</td><td align=\"left\">".$_POST['email']."</td></tr>";
	$mail_html.= "<tr><td>Where did you hear about us:</td><td align=\"left\">".$_POST['hearaboutus']."</td></tr>";
	$mail_html.= "<tr><td>Enquiry:</td><td align=\"left\">".$_POST['enquiry']."</td></tr></table>";
	
	echo $html;
?>	

<!-- PHP mail code end --></td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
                </tr>
              
              <tr>
                <td bgcolor="#fff2cd" scope="col">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="images/bottom2.gif" width="769" height="53" /></td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7534371-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
