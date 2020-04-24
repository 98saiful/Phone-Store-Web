<?php
include_once 'db.php';
session_start();

	$email = $_SESSION['fld_staff_email'];
	
	
	$stmt = $conn->prepare("SELECT * FROM tbl_staffs_a166118_pt2 WHERE fld_staff_email = '$email'");

	$stmt->execute();
	
	$readrow = $stmt->fetch(PDO::FETCH_ASSOC);
	
$fname = $readrow['fld_staff_fname'];
$lname = $readrow['fld_staff_lname'];

		
if($email==''){
	header("location:index.php?login");
	}
	else {
	header("");
	}
?>