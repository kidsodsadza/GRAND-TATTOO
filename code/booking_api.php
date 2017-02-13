<?php  
	include "config.php";
	session_start();
		$user_day = $_POST["day"];
		$user_time = $_POST["time"];
		$user_name = $_POST["username"];
		$user_phone = $_POST["number"];
	if($conn->connect_error){
		header("location:home.php");
	}else{
		

			$sql = "Insert into user_booking (bk_day,bk_time,bk_name,bk_phonenumber) 
			VALUES ('".$user_day."','".$user_time."','".$user_name."','".$user_phone."')";
	
		if ($conn->query($sql)==TRUE)
		{
			header("location:booking.php");
		}else{
			header("location:home.php");
		}
		$conn->close();
		}
?>