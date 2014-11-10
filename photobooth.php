<?php
session_start();
require_once ('includes/config.inc.php');

$url = "index.php";

if (!isset($_SESSION['email']))
	{ 
			if (!isset($_SESSION['password']))  
					{   
					header("Location: $url");         // IF NOT LOGGED IN - TAKE THEM TO HOME PAGE
					}   
	}
?>

<html>
<head>
<title>PHOTOBOOTH</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="includes/styles.css" />
<SCRIPT language="JavaScript" SRC="ajax.js"></SCRIPT>
</head>


<body onLoad="JavaScript:firstLoad();">

<div id="header">
<img src="images/topvault.jpg" alt="VaultDigital" height="108" width="1000" />
<div id="header-bottom">
        
<ul>
<li><a href="index.php">home</a>&nbsp;&nbsp;</li>
<li><a href="iprocessing.php">processing</a>&nbsp;&nbsp;</li>
<li><a href="iproofing.php">proofing</a>&nbsp;&nbsp;</li>
<li><a href="archiving.php">archiving</a>&nbsp;&nbsp;</li>
<li><a href="photoboothlogon.php">photobooth</a>&nbsp;&nbsp;</li>
<li><a href="selection.php">selection</a>&nbsp;&nbsp;</li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>


</div> <!-- header-bottom -->
</div> <!-- header -->


<div id="photobooth">

<br />
<br />

<table border=0>

<tr>
    <td >
		<table height=600 border=0>
        	<tr><td valign=top>
        	<div id="thumb"></div>
     </td>
</tr>
</table>

</td>
    <td valign=top>
        <div id="photo"></div>
    </td>
</tr>
<tr><td colspan=2></td></tr>
</table>

</table>

</div>

<div id="footer">
<ul>
<li><a href="terms.php">Terms &amp; Conditions</a> </li>
<li>&nbsp;&nbsp;&nbsp;Copyright 2006 - All Rights Reserved</a> </li>
</ul>
</div> <!-- footer -->






</body>
</html>
