<?php
/**
* J14 Ohel Application   
* Feature: lior tzur     
* Design: Anna snapiro   
* Program: Edo frenkel
* Contact: http://www.Lightapps.co.il / edodifr (at) gmail.com
*/

 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
	define("URL", $pageURL); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/forms_area_switch.js"></script>
<?php include("js/javascript.php"); ?>
</head>
<body>

	<div id="wrap">
        <div id="menu">
            <div id="update"></div>
            <div id="volunteer"></div>
            <div id="donate"></div>
		</div>
        
        <div id="content">
			<div id="content_update" class="hide">
                <?php include("tabs/update.php"); ?>
            </div>
        
            <div id="content_volunteer" class="hide">
            	<div id="volunteer_bg">
	                <?php include("tabs/volunteer.php"); ?>
                </div>
            </div>
        
            <div id="content_donate" class="hide">
            	<div id="donate_bg">
            	    <?php include("tabs/donate.php"); ?>
               	</div>
            </div>
            
        </div>
	</div>
    
    <div class="pre">
    	<img src="images/volunteer_on.jpg" />
        <img src="images/donate_on.jpg" />
        <img src="images/update_on.jpg" />
    	<img src="images/volunteer_off.jpg" />
        <img src="images/donate_off.jpg" />
        <img src="images/update_off.jpg" />
        <img src="images/sign_on.jpg" />
        <img src="images/credit_on.jpg" />
        <img src="images/give_on.jpg" />

    </div>

<br />

</body>
</html>