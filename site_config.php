<?php
$site_url="http://localhost/signup/phpMailVerification";
$site_name="Anisoft Corporation";
$subject="Account Activation";
$activate_mode=1;

$content1="Hello ";
$content2=",<br><br>";
$content3="Thank you for creating account with ".$site_name.".<br><br>";;

$content4="Your account has been created successfully. However in order to activate your account , please click on the below link.<br><br>";

$content5="<a href='";
$content6="'>Activate My Account</a><br><br>";

$content7="Thanks and Regards,<br><br>";

$content8="Support Team,<br><br>";

define(SITE_URL,$site_url);
define(SITE_NAME,$site_name);
define(SUBJECT,$subject);
define(CONTENT1,$content1);
define(CONTENT2,$content2);
define(CONTENT3,$content3);
define(CONTENT4,$content4);
define(CONTENT5,$content5);
define(CONTENT6,$content6);
define(CONTENT7,$content7);
define(CONTENT8,$content8);
define(ACTIVATE_MODE,$activate_mode);
?>
