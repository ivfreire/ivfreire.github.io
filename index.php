<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Homepage acadêmica de Ícaro Vaz Freire no Instituto de Física da Universidade de São Paulo.">
	<title>Ícaro Freire | IFUSP</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/homepage.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
	<div class="page">
		<?php include('templates/navbar.php'); ?>
		<div class="column">
			<div class="container">
				<div class="left">
					<div class="menu">
						<div class="gadget profile">
							<div class="picture"><img src="images/profile.jpg" alt="icaro vaz freire"></div>
							<div class="name"><span>Ícaro Vaz Freire</span></div>
							<div class="description"><p>Bacharelando em Física no IF-USP.<br>Bolsista de Iniciação Científica no IAG-USP.</p></div>
						</div>
						<div class="gadget socials">
							<ul class="socials">
								<li><i class="fas fa-university"></i>Universidade de São Paulo</li>
								<li><i class="fas fa-map-marker"></i>São Paulo</li>
								<a href="https://ivfreire.github.io/"><li><i class="fas fa-globe"></i>GitHub pages</li></a>
								<a href="https://twitter.com/ovfreire"><li><i class="fab fa-twitter"></i>ovfreire</li></a>
								<a href="https://twitter.com/ovfreire"><li><i class="fab fa-github"></i>ivfreire</li></a>
								<a href="mailto:ivfreire@usp.br"><li><i class="far fa-envelope"></i>ivfreire@usp.br</li></a>
								<a href="mailto:icarovf@if.usp.br"><li><i class="far fa-envelope"></i>icarovf@if.usp.br</li></a>
								<a href="http://lattes.cnpq.br/2108666866605794"><li><i class="fas fa-link"></i>Lattes</li></a>
							</ul>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="gadget header">
						<h1>Bem-vindo!</h1><br>
						<p>Olá, eu sou Ícaro! Essa é minha página pessoal acadêmica, aqui você poderá encontrar alguns dos meus trabalhos ou projetos que contribui durante a graduação e links externos para minhas redes externas. Sinta-se à vontade para explorar.</p><br>
						<img src="images/clocksquare.jpg" alt="praça do relógio">
						<p>Praça do relógio</p>
					</div>
					<div class="gadget activities">
						<h2>Atividades</h2><br>
						<div class="holder">
							<a href=""><div class="activity">
								<span>Iniciação Ciêntífica</span>
								<p>Análise da qualidade da temperatura da base da nuvem medida com um sensor de baixo custo no infravermelho.</p>
							</div></a>
							<a href="https://www2.if.usp.br/~hackersp/"><div class="activity">
								<span>Extensão Acadêmica</span>
								<p>Laboratório aberto no Instituto de Física, Hackerspace IFUSP.</p>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('templates/footer.php') ?>
	</div>
</body>
</html>