<?php
#index.php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Paquete Imperio - LMS</title>		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Audiowide" rel='stylesheet' type="text/css">
		<link rel="stylesheet" href="css/base.css">
		<link rel="stylesheet" href="css/grids.css">
		<link rel="stylesheet" href="css/buttons.css">
		<link rel="stylesheet" href="css/grids-responsive.css">
		<link rel="stylesheet" href="css/menus.css">
		<link rel="stylesheet" href="style.css" type="text/css" media="screen, projection">
		<script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="envoltura">
			<nav class="pure-menu pure-menu-horizontal">
				<ul class="pure-menu-list">
					<li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Inicio</a></li>
					<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
						<a href="#" id="menuLink1" class="pure-menu-link">Módulos</a>
						<ul class="pure-menu-children">
						    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Plan de negocios</a></li>
						    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Márketing</a></li>
						    <li class="pure-menu-item"><a href="#" class="pure-menu-link">Programación informática</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div>
				<form method="post" action="<?php echo 'http://voz.pisfato.com/back/controlador/usuarioControlador.php'; ?>">
					<input type="text" name="" placeholder="Nombre" />
					<input type="password" name="" placeholder="Clave" />
					<input type="submit" name="" value="Ingresar" />
				</form>
			</div>
		</header>
		<section>
			<h2>Cursos a iniciar</h2>
			<div class="pure-g">
				<div class="pure-u-1-4 caja curso">
					<span class="curso-precio">S/. 100,00</span>
					<img src="http://placehold.it/350/aaabbb/000000?text=C++ POO" class="pure-img" />
					<h3>Aprender C++ desde cero</h3>
					<p>Con estas clases vas a aprender a ser uno de los mejores escribiendo código orientado objetos.</p>
					<span>Por George Garro</span>
					<a class="pure-button pure-button-primary pure-u-1" href="curso.html">Inscripción abierta</a>
				</div>
				<div class="pure-u-1-4 caja curso">
					<span class="curso-precio">Gratis</span>
					<img src="http://placehold.it/350/1aa4bb/000000?text=C" class="pure-img" />
					<h3>Aprender C desde cero</h3>
					<p>Con estas clases vas a aprender a ser uno de los mejores escribiendo código orientado objetos.</p>
					<span>Por George Garro</span>
					<a class="pure-button pure-button-primary pure-u-1" href="curso.html">Inscripción abierta</a>
				</div>
				<div class="pure-u-1-4 caja curso">
					<span class="curso-precio">S/. 60,00</span>
					<img src="http://placehold.it/350/a67b5b/000000?text=EcmaScript" class="pure-img" />
					<h3>Aprender JavaScript desde cero</h3>
					<p>Con estas clases vas a aprender a ser uno de los mejores escribiendo código orientado objetos.</p>
					<span>Por George Garro</span>
					<a class="pure-button pure-button-primary pure-u-1" href="curso.html">Inscripción abierta</a>
				</div>
				<div class="pure-u-1-4 caja curso">
					<span class="curso-precio">S/. 60,00</span>
					<img src="http://placehold.it/350/0aa0b0/000000?text=Oracle System" class="pure-img" />
					<h3>Aprender Java desde cero</h3>
					<p>Con estas clases vas a aprender a ser uno de los mejores escribiendo código orientado objetos.</p>
					<span>Por George Garro</span>
					<a class="pure-button pure-button-primary pure-u-1" href="curso.html">En curso</a>
				</div>
			</div>
		</section>
		<footer>
		
		</footer>
	</body>
</html>
