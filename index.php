
<?php
		session_start();
		if(isset($_SESSION['user'])){
			header("Location: vistas/perfil_usuario.php");
		}
 ?>

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

				</header>

				<section class ="contenedor">

							<div id="div_login" class="division_vertical">
									<h1>Bienvenido a ..</h1><hr><br>

								<form onsubmit="return valida_login();" class="login" action="seguridad/verifico_user.php" method="POST">

												<div class="div_form_field">
														<input  class="form_texto"  type="text" name="nick" id="nick" placeholder="User name" onblur="rellena_nick();">
														<div class="div_form_error" id="message_nick"></div>
												</div>

												<div class="div_form_field">
														<input  class="form_texto"  type="password" name="pwd" id="pwd" placeholder="User password" onblur="rellena_login_password();">
														<div class="div_form_error" id="message_pwd"></div>
												</div>

												<div class="div_button"><input id="button" type="submit" name="login" value="LOGIN"></div>

											<div class="div_pie">
													<label>Mantener Usuario
																<input type="checkbox" id="mem_user" name="mem_user" value="mem_user">
													</label>
											</div>
									</form>

									<article class="">
											<a href="formularios/form_altas.php">Registrate si eres nuevo !! </a>
									</article>
							</div>

				</section>

			<br><hr>

  		<footer>Gestion Usuario 2021 by Wicka</footer>

		</body>

</html>
