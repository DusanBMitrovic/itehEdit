<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "rezervacijeiteh";
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
?>