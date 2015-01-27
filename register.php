<?php
include("db_config.php");
include("site_config.php");
include("function.php");
if($_REQUEST['submit']=='Register')
{

doRegister($_REQUEST);




}
?>
