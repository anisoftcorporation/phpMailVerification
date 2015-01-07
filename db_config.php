<?php
mysql_connect("localhost","testDBA","abcd1234")or die(''.mysql_error());
mysql_select_db("test")or die(''.mysql_error());
echo "Connected..";

?>
