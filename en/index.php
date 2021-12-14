<?php include('../templates/locale.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Icaro Freire's homepage at the University of Sao Paulo in Brazil.">
	<title>Ícaro Freire | IF-USP</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
	<div class="page">
		<?php $_GET['lang'] = 'en'; include('../templates/navbar.php'); ?>
		<div class="column">
			<div class="container">
				<div class="left">
					<div class="menu">
						<div class="gadget profile">
							<div class="picture"><img src="../images/profile.jpg" alt="icaro vaz freire"></div>
							<div class="name"><span>Ícaro Vaz Freire</span></div>
							<div class="description"><p>Physics BSc student at IF-USP.<br>Undergraduate researcher at IAG-USP.</p></div>
						</div>
						<div class="gadget socials">
							<ul class="socials">
								<a href="https://www5.usp.br/#english"><li><i class="fas fa-university"></i>University of São Paulo</li></a>
								<!-- <li><i class="fas fa-map-marker"></i>São Paulo, Brazil</li> -->
								<a href="https://ivfreire.github.io/"><li><i class="fas fa-globe"></i>GitHub pages</li></a>
								<a href="https://twitter.com/ovfreire"><li><i class="fab fa-twitter"></i>ovfreire</li></a>
								<a href="https://twitter.com/ovfreire"><li><i class="fab fa-github"></i>ivfreire</li></a>
								<a href="mailto:ivfreire@usp.br"><li><i class="far fa-envelope"></i>ivfreire@usp.br</li></a>
								<a href="mailto:icarovf@if.usp.br"><li><i class="far fa-envelope"></i>icarovf@if.usp.br</li></a>
								<a href="http://lattes.cnpq.br/2108666866605794"><li><i class="fas fa-link"></i>Lattes Curriculum</li></a>
							</ul>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="gadget header">
						<h1>Welcome!</h1><br>
						<p>Hello there, I am Ícaro. I have created this page to put my work and projects on display. Here, you will find a bunch of stuff I did while in university, from extracurricular activities to research. Feel free to look around.</p><br>
						<img src="../images/clocksquare.jpg" alt="praça do relógio">
						<p>Clock tower square at USP - <i>"In the cultural universe, the centre is everywhere."</i></p>
					</div>
					<div class="gadget activities">
						<h2>Activities</h2><br>
						<div class="holder">
							<a href="../project.php?q=lraa&lang=en"><div class="activity">
								<span>Undergraduate Research</span>
								<p>Quality analysis of temperature measurements of the bottom of clouds in the infrared band using cost-effective equipment.</p>
							</div></a>
							<a href="../project.php?q=hackerspace&lang=en"><div class="activity">
								<span>Extracurricular Activity</span>
								<p>Open-source laboratory at the Institute of Physics at USP - Hackerspace IFUSP.</p>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('../templates/footer.php') ?>
	</div>
</body>
</html>