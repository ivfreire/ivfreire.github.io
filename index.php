<?php
	require_once('templates/locale.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Homepage acadêmica de Ícaro Vaz Freire no Instituto de Física da Universidade de São Paulo.">
	<title>Ícaro Freire | IF-USP</title>
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
								<a href="https://www5.usp.br/"><li><i class="fas fa-university"></i>Universidade de São Paulo</li></a>
								<a href="https://ivfreire.github.io/"><li><i class="fas fa-globe"></i>GitHub pages</li></a>
								<a href="https://twitter.com/ovfreire"><li><i class="fab fa-twitter"></i>ovfreire</li></a>
								<a href="https://github.com/ivfreire"><li><i class="fab fa-github"></i>ivfreire</li></a>
								<a href="mailto:ivfreire@usp.br"><li><i class="far fa-envelope"></i>ivfreire@usp.br</li></a>
								<a href="mailto:icarovf@if.usp.br"><li><i class="far fa-envelope"></i>icarovf@if.usp.br</li></a>
								<a href="http://lattes.cnpq.br/2108666866605794"><li><i class="fas fa-link"></i>Lattes</li></a>
							</ul>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="gadget header">
						<h1>Olá!</h1><br>
						<p>Esta é minha página acadêmica, aqui você encontrará alguns trabalhos e projetos para os quais eu contribui durante a graduação e links para minhas redes externas.</p><br>
						<img src="images/clocksquare.jpg" alt="praça do relógio">
						<p>Praça do relógio - <i>"No universo da cultura o centro está em toda a parte."</i></p>
					</div>
					<div class="gadget activities">
						<h2>Atividades recentes</h2><br>
						<div class="holder">
							<a href="#"><div class="activity">
								<img src="projects/lraa/header.jpg">
								<span>Iniciação Científica</span>
								<p>Análise da qualidade da temperatura da base da nuvem medida com um sensor de baixo custo no infravermelho.</p>
							</div></a>
							<a href="https://www2.if.usp.br/~hackersp"><div class="activity">
								<img src="projects/hackerspace/header.jpg">
								<span>Extensão Acadêmica</span>
								<p>Laboratório no Instituto de Física, Hackerspace IFUSP.</p>
							</div></a>
						</div>
					</div>
					<div class="gadget cv">
						<h2>Curriculum Vitae</h2>
						<div id="cv">
							<div class="year">
								<div class="marker"><span>2001</span></div>
								<div class="text">
									<ul>
										<li><p>13 de setembro às 20:44 nascido em Guarulhos</p></li>
									</ul>
								</div>
							</div>
							<div class="year">
								<div class="marker"><span>2018</span></div>
								<div class="text">
									<ul>
										<li><p>Premiado com medalha de bronze na OBMEP 2017</p></li>
										<li><p>Premiado pela Competição USP de Conhecimento (CUCo)</p></li>
										<li><p>Formado no Ensino Médio</p></li>
									</ul>
								</div>
							</div>
							<div class="year">
								<div class="marker"><span>2019</span></div>
								<div class="text">
									<ul>
										<li><p>Aceito na Universidade de São Paulo para cursar Física</p></li>
										<li><p>Voluntariado no Hackerspace IF-USP</p></li>
										<li><p>Estágio no Centro de Computação do IF-USP</p></li>
									</ul>
								</div>
							</div>
							<div class="year">
								<div class="marker"><span>2021</span></div>
								<div class="text">
									<ul>
										<li><p>Iniciação Científica no Laboratório de Radiação e Aerossóis Atmosféricos</p></li>
										<li><p>Participação no Workshop Latinoamericano em Modelagem Numérica de Radiação Solar</p></li>
									</ul>
								</div>
							</div>
							<div class="year">
								<div class="marker"><span>2022</span></div>
								<div class="text">
									<ul>
										<li><p>Curso de verão do IF-USP 2022</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="gadget inpirations">
						<h2>Inspirações</h2>
						<div class="inspiring">
							<div>
								<img src="images/people/alexandra.jpg">
								<span>Alexandra Elbakyan</span>
								<p>Cientista</p>
							</div>
							<div>
								<img src="images/people/julian.jpg">
								<span>Julian Assange</span>
								<p>Jornalista</p>
							</div>
							<div>
								<img src="images/people/jocelyn.jpg">
								<span>Jocelyn Burnell</span>
								<p>Astrônoma</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('templates/footer.php') ?>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="js/cmd.js"></script>
	<script src="js/index.js"></script>
</body>
</html>
