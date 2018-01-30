<?php 
error_reporting(0);
ob_start();
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "project";
$connect = mysql_connect($dbhost,$dbuser,$dbpwd);
mysql_select_db($dbname,$connect);
date_default_timezone_set("Asia/Kolkata");
?>