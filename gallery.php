<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gallery</title>
		<link rel="icon" href="images/logo-color-mini.png">
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/animations.css">

		<!-- jQuery, Tether, Popper, Boostrap JS -->
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Other Scripts -->
		<script type="text/javascript">
			//Onload function
			$(document).ready(function() {
				});

			function walkAnimate() {
				var rng = Math.floor(((Math.random() * 10) + 1)/2);
				if(rng == 1) {
					$('.person', this)
						.delay(1000)
						.animate({ left: "+=10px", top: "+=10px" }, '50');
				}else if(rng == 2) {
					$(this)
						.delay(1000)
						.animate({ left: "+=10px", top: "-=10px" }, '50');
				}else if(rng == 3) {
					$(this)
						.delay(1000)
						.animate({ left: "-=10px", top: "+=10px" }, '50');
				}else if(rng == 4) {
					$(this)
						.delay(1000)
						.animate({ left: "-=10px", top: "-=10px" }, '50');
				}else if(rng == 5) {
				}
				walkAnimate();
			}

		</script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/navbar.css">
		<style type="text/css">
			.person {
				 animation-duration: .7s;
			}
		</style>
	</head>
	<body>
		<!-- Navbar -->
		<div id="navbar" style="padding: 0px 0px;">
			<ul id="navbarMenu">
			  <li>
			  	<a href="index.php" >Home</a>
			  </li>
			  <li>
			  	<a class="active" href="#gallery">Gallery</a>
			  </li>
			  <li>
			  	<a href="blog.php">Blog</a>
			  </li>
			  <li>
			  	<a href="aboutme.php">About Me</a>
			  </li>
			  <li style="float: right;">
			  	<a href="letstalk.php">Let's Talk</a>
			  </li>
			</ul>
		</div>
		<div class="container-fluid" style="margin-top: 100px; text-align: center;">
			<h1>
				Welcome to the Gallery!
			</h1>
			<img class="tossing person" onload="" src="images/commentor.png" style="height: 50px; position: relative;">
			<img class="tossing person" src="images/commentor.png" style="height: 50px; position: relative;">
			<img class="tossing person" src="images/commentor.png" style="height: 50px; position: relative;">
			<img class="tossing person" src="images/commentor.png" style="height: 50px; position: relative;">
		</div>
	</body>
</html>