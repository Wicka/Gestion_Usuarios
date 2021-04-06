<?php include ("db/conexio_bbdd.php"); ?>

﻿<doctype html>
<html lang="es">

		<head>

				<meta charset="utf-8"/>
				<meta name="description" content="Gestion Usuarios">
				<meta name="keywords" content="Login, usuarios, gestion">
				<meta name="author" content="Ester Mesa">

				<!-- Enllaç a l'arxiu CSS Extern -->
				<link rel="stylesheet" href="css/style.css" type="text/css"/>

				<!-- google font -->
				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

				<title>Gestion Usuario</title>

		</head>

		<body>

				<header>
						<?php Connect_BBDD(); ?>
				</header>

				<!--MENU NAVEGACION-->

				<nav>
						<ul>
								<li> <a href="formularios/form_altas.php">Registrarse</a> </li>
								<li> <a href="formularios/form_detalles.php">Login</a> </li>
								<li> <a href="formularios/form_editar.php">Editar Usuario</a> </li>
								<li> <a href="formularios/form_eliminar.php">Eliminar Usuario</a> </li>
						</ul>
				</nav>

				<section class ="contenedor">

							<div class="division_vertical">
									<h1>Bienvenido a ..</h1>

									<form class="login" action="verificacion/verifico_user.php" method="POST">

												<label>Usuario: <br>
														<input type="text" name="name"  placeholder="Usuario" required>
												</label>
												<br>
												<label>Contraseña: <br>
														<input type="password" name="pwd"  placeholder="Contraseña" required>
												</label>
												<hr>
												<input type="submit" name="accede" value="Accede">
									</form>
							</div>


				</section>


			<br>
  		<footer>Gestion Usuario 2021 by Wicka</footer>

		</body>

</html>
