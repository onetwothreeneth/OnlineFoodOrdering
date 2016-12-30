<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";
session_start();
$email = $_SESSION['email'];
$id = $_GET['id'];

	
?>

