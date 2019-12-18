<?php

error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$con=mysql_pconnect('localhost','root','')or die("cannot connect to server");
mysql_select_db('pharma')or die("cannot connect to database");

?>