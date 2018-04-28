<?php

$db_host = "localhost";
$db_username = "yinpengc_cyp";
$db_pass = "fifa2002";
$db_name = "yinpengc_dbpersonweb";

mysql_connect("$db_host","$db_username","$db_pass") or die(mysql_error());
mysql_query("SET NAMES 'UTF8'"); 
mysql_select_db("$db_name") or die("no database by that name");








?>




