<?php;?>

<html>
<head>
	<title>Alexis Kilayko | Games</title>
	<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
	<!-- stylesheets -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/games.css">
	<link rel="stylesheet" href="css/animate.css">
	
	
	<!-- bootstrap scripts -->
	<?php require 'php/scripts.php';?>	
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Ramabhadra&display=swap');  
		
		.header {
			font-family: 'Ramabhadra', sans-serif;
		}
	    .content {
		   	font-family: 'Nunito', sans-serif;
	    }
		h2 {
			font-size: 3rem;
			font-family: 'Ramabhadra', sans-serif;		
		}
		.navbar {
			padding: 1rem 1rem;
			text-transform: uppercase;
		}
		.navbar-brand, .nav-link {
			margin: 0 0rem;
		}
		.navbar-brand {
			font-family: 'Ramabhadra', sans-serif;		
			font-weight: bold;
			background-color: rgb(167, 201, 87);
			color: white;
			border-radius: 50%;
			padding: 0.5rem 0.6rem;
			transition: color 0.4s;
		}
		.navbar-brand:hover {
			color: rgb(255,255,255,0.6);
		}
		footer i {
			background-color: rgb(255,255,255,0);
			padding: 0.9rem 0.8rem;
			border: 2px solid rgb(255,255,255,0.6);
			border-radius: 50%;
			margin: 0 0.5rem;
			color: white;
			transition: color 0.4s, background-color 0.4s;
		}
		footer i:hover {
			color: rgb(167, 201, 87);
			background-color: white;
			cursor: pointer;
		}
	</style>
	
</head>
<body>
	
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="../alexis.github.io/"><img src="imgs/icon.png" width=30px></a>
		<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	
	<div class="container-fluid animate1" style="margin:0 0 3rem 0; border-bottom:1px solid #f1f1f1;">
		<div class="heading" style="padding:0 0 3rem 0; color:rgb(0,0,0,0.8);">
			<div class="row justify-content-center">
				<h1 style="text-align:center; font-size:4rem; font-family:'Ramabhadra', sans-serif;">Game Library</h1>
			</div>
			<div class="row justify-content-center" style="font-family: 'Nunito', sans-serif; padding: 0 2rem; text-align:center;">
				A list of all the video games I've been playing in the new decade.
			</div>
		</div>
	</div>
	
	<div class="container col-xs-12 col-sm-11 col-md-10 col-lg-9 col-xl-7 content">
		<div class="row justify-content-center">
			<?php require 'php/games.php';?>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="container-fluid" style="margin:8rem 0 0 0; padding:5rem 2rem; background-color:rgb(167, 201, 87);">
			<div class="container" style="text-align:center; padding: 0 0 1rem 0; color: white;">
				<h2>Reach out.</h2>
			</div>
			<div class="row justify-content-center">
				<a href="https://github.com/alexiskilayko" target="_blank"><i class="fab fa-github-alt fa-lg"></i></a> 
				<a href="https://www.linkedin.com/in/alexiskilayko/" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a> 
				<a href="mailto:akilayko@smith.edu"><i class="fas fa-envelope fa-lg"></i></a>
			</div>
			<div class="row justify-content-center" style="color:white; margin: 4rem 0 0 0; text-align:center; font-size:0.8rem;">
				Images belong to their respective owners. <br> Website designed + developed by Alexis Kilayko. <br> AK &#169; 2020
			</div>
		</div>
	</footer>
	
	
</body>
</html>