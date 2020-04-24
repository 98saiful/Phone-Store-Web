<?php 
include_once 'db.php';
	
		$stmt = $conn->prepare("SELECT * FROM tbl_staffs_a166118_pt2 WHERE fld_staff_email = :email AND fld_staff_password = :password");
		
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR);
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$stmt->execute();
		$result = $stmt->fetchAll();

		$bil_row = $stmt->rowCount();
		
			if($bil_row > 0)
			{
				session_start();
				
				$_SESSION['fld_staff_email']=$email;

				header("location:mainpage.php");
			}
			else
			{
				header("location:index.php?login=failed");
			}	
?>