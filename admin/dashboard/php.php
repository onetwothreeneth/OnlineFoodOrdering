<?php 
session_start(); 
$_SESSION['admin']='admin'; 
header('location:index'); 
?>