<?php
//$localhost=SAE_MYSQL_HOST_M;
//$port=SAE_MYSQL_PORT;
//$hostuser=SAE_MYSQL_USER;
//$pass=SAE_MYSQL_PASS;
$localhost=localhost;
$port=3306;
$hostuser=root;
$pass=root;
//
$dbname=13019;
//$tablename=persons;
$conn = @mysql_connect($localhost.':'.$port,$hostuser,$pass) or die("coulde not connect");
mysql_select_db("$dbname",$conn);
mysql_query("set names 'utf8'");
//define(ALL_PS,"13019");
?>