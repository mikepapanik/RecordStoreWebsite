<?php
$host = "localhost";
$port = "5432";
$dbname = "recordstorerock";
$user = "postgres";
$password = "39613962"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
session_start();
$sql ="DELETE FROM showfav";
$data = pg_query($dbconn,$sql); 
// Initialize the session

 
$_SESSION = array();
 
session_destroy();
 
header("location: login.php");
exit;
?>