<?php

include("db_config.php");
include("site_config.php");
include("function.php");

if(ACTIVATE_MODE==1)
 {
   $uid=$_REQUEST['uid'];
   $key=$_REQUEST['key'];
   $num=verifyEmail($uid,$key);

 }
else
{
      

}

if($num==1)
{
echo "Your email address has been verified and your account is now Activated"; 

}
?>
