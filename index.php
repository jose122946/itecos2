<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Itecos</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="itecos.css">
	<link rel="stylesheet" href="normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</head>
<body>
	<header>
		<article id="boxmenu">
	<ul>
		<li class="menu"><a id="inicio" href="#">
		<?php
			include("autoadmin.php");
			$con = new conexion();
			$con->recuperar(); 

			?>
			</a></li>
		<li class="menu"><a href="#">Nosotros</a></li>
		<li class="menu"><a href="#">Contáctanos</a></li>
		<li class="menu"><a href="#">Donde estamos</a></li>

	</ul>
			
		</article>
		<figure id = "fheader">
			<img src="header2.jpg" alt="" id="itecosheader">
		</figure>

	</header>
	<section>
	<article id="box1">

			<h2>Buenos Dias</h2>
		<p>Lorem ipsum dolor sit amet, 
		consectetur adipisicing elit. 
		Mollitia ipsa voluptates voluptate cu
		lpa dolorem, necessitatibus facere doloribus 
		fugiat aspernatur, voluptatibus autem deleniti 
		suscipit molestiae atque possimus tempore 
		dolores ullam saepe.</p>


	</article>
		<article id="box2">
			<div class="subtitulo" >
				<span class="icon-paragraph-left" style="display:inline-block"></span><h3 >Lorem</h3>
			</div>
			<div class="descripcion">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero molestiae aperiam deserunt fuga neque minima praesentium ipsam provident, fugiat laudantium illum, est mollitia reiciendis, cumque dignissimos itaque iure quo odio!</p>
			</div>

		</article>

	</section>
		<footer>
				
		<div id="derechos">&copy;Derechos Reservados</div>
		<div id="redes">
			<p id="redes1">Siguenos en nuestras redes sociales</p>
			<a href=""><span  class="icon-facebook2" class="red"></span></a><a href=""><span class="icon-twitter2" class="red"></span></a><a href=""><span  class="icon-google-plus2" class="red"></span></a>
		</div>
		</footer>


</body>
</html>