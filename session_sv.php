<?php
include_once 'db.php';
session_start();

	$name = $_SESSION['fld_sv_username'];
	
	
	$stmt = $conn->prepare("SELECT * FROM tbl_sv_a166118_pt2 WHERE fld_sv_username = '$name'");

	$stmt->execute();
	
	$readrow = $stmt->fetch(PDO::FETCH_ASSOC);
	
$fname = $readrow['fld_sv_fname'];
$lname = $readrow['fld_sv_lname'];

		
if($name==''){
	header("location:index.php?login");
	}
	else {
	header("");
	}
?>