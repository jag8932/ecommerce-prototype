<?php 

// Code credit: https://www.doabledanny.com/
// Article: https://www.doabledanny.com/Deploy-PHP-And-MySQL-to-Heroku

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

// If using localhost
/*
$serverName = "localhost";
$username = "root";
$password = "";
$name = "loginsystem";

$conn = mysqli_connect($serverName, $username, $password, $name);
*/
?>