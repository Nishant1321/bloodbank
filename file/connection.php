<?php




define('SITEURL', 'http://localhost/bloodbank/');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>