<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GRAND TATTOO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript">
		function checkForm(form){
			chk=false;
			if ((form.number.value<'0' || form.number.value>'9') && (form.number.value != '.')){
				alert("กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง");
				form.number.focus();
				chk=false;
			}else{
			if ((form.username.value<'0' || form.username.value>'9') && (form.username.value != '.')){
				chk= true;
				}
			else{
				alert("กรอกชื่อไม่ถูกต้อง");
				form.username.focus();
				chk=false;
			}
			}
			return chk;
		}
	</script>


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
	<div id="werper">
		<div class="container">
			<h3 id="hand-1">Welcome to INSPIRED<br><span>Booking</span></h3>
			<form onsubmit="return checkForm(this);" action="booking_api.php" method="POST">
				  <select name="day" class="dropdrow">
				    <option value="day">--Day--</option>
				    <option value="mon">Monday</option>
				    <option value="tue">Tuesday</option>
				    <option value="wed">Wednesday</option>
				    <option value="thu">Thursday</option>
				    <option value="fri">Friday</option>
				    <option value="satu">Saturday</option>
				    <option value="sun">Sunday</option>
				  </select>
				  <br>
				  <select name="time" class="dropdrow">
				    <option value="time">--Time--</option>
				    <option value="1">14.00 PM</option>
				    <option value="2">17.00 PM</option>
				    <option value="3">20.00 PM</option>
				    <option value="4">23.00 PM</option>
				  </select>
				  <br>
				  	<input class="input-style" type="text" name="username" placeholder="Name">
				  <br>
				  	<input class="input-style" type="text" name="number" placeholder="Phonenumber">
				  <br>
				  	<button class="go-to-table" type="submit" name="Table_Booking" formaction="booking.php">
				  	Table Booking</button>
  					<input class="submit" type="submit" value="Reserve" name="submit">
			</form>
		</div><!-- container -->
		<footer id="footer-site">
			<div class="footer-wrap">
			<p>	&copy; Copyrignt 2015,All right reserved</p>
			</div><!-- footer-wrap -->
		</footer><!-- footer-site -->
	</div><!-- werper -->
</body>
</html>