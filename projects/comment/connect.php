<?php
$host="localhost";
$db_user="root";
$db_pass="l";
$db_name="Comment";
$timezone="Paris/France";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone);
?>
