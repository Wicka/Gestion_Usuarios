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

				<!-- Enllaç a Javascript Extern -->
				<script  type="text/javascript" src="js/functions.js"></script>

				<title>Gestion Usuario</title>

		</head>

		<body>

				<header>
						<?php Connect_BBDD(); ?>
				</header>

				<!--MENU NAVEGACION-->
				<label> <h2>Menu provisional</h2> </label>
				<nav>
						<ul>
								<li> <a href="formularios/form_altas.php">Registrarse</a> </li>
								<li> <a href="formularios/form_detalles.php">Login</a> </li>
								<li> <a href="formularios/form_editar.php">Editar Usuario</a> </li>
								<li> <a href="formularios/form_eliminar.php">Eliminar Usuario</a> </li>
						</ul>
				</nav>

				<section class ="contenedor">

							<div id="div_login" class="division_vertical">
									<h1>Bienvenido a ..</h1><hr><br><br>

								<form onsubmit="return valida_form();" class="login" action="verificacion/verifico_user.php" method="POST">

												<div class="div_form_field">
														<input  class="form_texto"  type="text" name="nick" id="nick" placeholder="User name" onblur="rellena_nick();"><br>
														<div class="div_form_error" id="message_nick"></div>
												</div>

												<div class="div_form_field">
														<input  class="form_texto"  type="password" name="pwd" id="pwd" placeholder="User password" onblur="rellena_password();"><br>
														<div class="div_form_error" id="message_pwd"></div>
												</div>

												<div class="div_button"><input id="button" type="submit" name="login" value="LOGIN"></div>

									</form>
							</div>

				</section>

			<br><hr>

  		<footer>Gestion Usuario 2021 by Wicka</footer>

		</body>

</html>
