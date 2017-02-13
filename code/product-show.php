<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GRAND TATTOO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-product.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			ajax();
			$('.input-filter').on('keypress keyup change',function(event)
			{
				var movie_name = $('#movie-name').val();
				var select_branch = $('#select-branch').val();
				var select_status = $('#select-status').val();

				//console.log(movie_name+' '+select_branch+' '+select_status);
				ajax(movie_name,select_branch,select_status);
			});

			function ajax(movie_name,select_branch,select_status)
			{
				movie_name = (movie_name==undefined) ?'':movie_name;
				select_branch = (select_branch==undefined) ?'':select_branch;
				select_status = (select_status==undefined) ?'':select_status;

				var request = $.ajax({
					url:"ajax/filter.php",
					method:"GET",
					data:{movie_name:movie_name,select_branch:select_branch,select_status:select_status}
				});

				request.done(function(html){
				
					$('#show-data').html(html);
				});
				request.fail(function(jqXHR,textStatus){
					alert("Request Fail"+ textStatus);
				});
			}

		});
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
	<div id="warper-pr-show">
		<div class="container-pr-show">
			<h2 id="hand-pr" class="show">PRODUCT</h2>
			<input type="text" name="search-text" class="search-box-text input-filter" placeholder=" Search Tattoo" id="movie-name">
			<select class="selectchoice input-filter" id="select-branch" onchange="selectChoice(this.value)">
								<option value="all"> -Tattoo Style-</option>
								<option value="Maori">Maori Style</option>
								<option value="Japanese">Japanese Style</option>
								<option value="Portraits">Portraits Style</option>
								<option value="Thai">Thai Style</option>
			</select>
			<div id="show-data">
			</div><!-- show-data -->
		</div><!-- container-pr -->
		<footer id="footer-site">
			<div class="footer-wrap">
			<p>	&copy; Copyrignt 2015,All right reserved</p>
			</div><!-- footer-wrap -->
		</footer><!-- footer-site -->
	</div><!-- warper -->
</body>
</html>