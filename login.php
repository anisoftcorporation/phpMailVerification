<?php
include("db_config.php");
$uname=$_REQUEST['uname'];
$password=$_REQUEST['passwd'];

$login_query="select * from user_account_master where uname='$uname' and password='$password' and state=1";
$login_result=mysql_query($login_query);
$num_rows=mysql_num_rows($login_result);

if($num_rows==1)
{
 echo "Success";
}
else
{
  echo "Login failure";
}
?>
