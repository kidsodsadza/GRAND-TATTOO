<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GRAND TATTOO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<style>
		table,th,td {
		 width: 800px;
		 height: 70px;
   		 border: 2px solid #b1000e;
   		 margin: 0 auto;
   		 text-align: center;
   		 padding-top: 20px;
   		 box-sizing: border-box;
   		 line-height: 1.5;
		}
</style>
</head>
<body>
	<header id="header-site">
		<nav id="nav-site">
			<img src="img/logo.png">
				<ul>
					<li>Home</li>
					<li>Product</li>
					<li>Customer</li>
					<li>About us</li>
				</ul>
		</nav>
	</header>
	<div id="werper-book">
		<div class="container-book">
		<h4 id="hand-4">Table Booking</h3>
			<table>
				  <tr>
				    <th>Day/Time</th>
				    <th>14.00 - 17.00 PM</th>
				    <th>17.00 - 20.00 PM</th>
				    <th>20.00 - 23.00 PM</th>
				    <th>23.00 - 24.00 PM</th>
				  </tr>
				  <tr>
				    <td>Monday</td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'mon' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'mon' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'mon' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'mon' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
				  <tr>
				    <td>Tuesday</td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'tue' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'tue' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'tue' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'tue' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
				  <tr>
				    <td>Wednesday</td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'wed' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'wed' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'wed' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'wed' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
				  <tr>
				    <td>Thursday</td>
				    <td><?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'thu' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'thu' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'thu' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'thu' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
				  <tr>
				    <td>Friday</td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'fri' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'fri' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'fri' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'fri' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
				  <tr>
				    <td>Saturday</td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'satu' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'satu' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'satu' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'satu' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
				  <tr>
				    <td>Sunday</td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'sun' AND bk_time= '1'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'sun' AND bk_time= '2'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'sun' AND bk_time= '3'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				    <td>
				    	<?php
							include "config.php";
							if($conn->connect_error){
								header("location:login.html");
							}else{
							 	$sql = "SELECT * FROM `user_booking` WHERE bk_day = 'sun' AND bk_time= '4'";
							 	$result = $conn->query($sql);
								$row = $result->fetch_assoc();
						?>
				    <?php echo $row["bk_name"]?><br>Tell:<?php echo $row["bk_phonenumber"]?>
				    </td>
				  </tr>
			</table>
				<a href="home.php"><button class="back-home">Back</button></a>
		</div><!-- container -->
		<footer id="footer-site">
			<div class="footer-wrap">
			<p>	&copy; Copyrignt 2015,All right reserved</p>
			</div><!-- footer-wrap -->
		</footer><!-- footer-site -->
	</div><!-- werper -->
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>
	<?php
	}

?>	<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>
<?php
	}
?>





</body>
</html>