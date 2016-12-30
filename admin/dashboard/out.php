<?php
session_start();
$admin = $_SESSION['admin'];
include "dbconn.php"; 
session_destroy();
unset($admin);
header('location:index');
	 

?>