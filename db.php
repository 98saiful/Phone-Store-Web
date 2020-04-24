<?php
 
$servername = "lrgs.ftsm.ukm.my";
$username = "a166118";
$password = "smallbluedonkey";
$dbname = "a166118";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
?>