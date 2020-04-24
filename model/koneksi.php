<?php
/**
 * Created by PhpStorm.
 * User: Acek
 * Date: 12/2/2015
 * Time: 10:53 PM
 * */
$host = "localhost";
$username = "root";
$pass = "";
$db = "siap";
$con = mysql_connect($host, $username, $pass)or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());