<?php include ("../db/altas.php"); ?>

﻿<doctype html>
<html lang="es">

		<head>

				<meta charset="utf-8"/>
				<meta name="description" content="Gestion Usuarios">
				<meta name="keywords" content="Altas, usuarios, gestion">
				<meta name="author" content="Ester Mesa">

				<!-- Enllaç a l'arxiu CSS Extern -->
				<link rel="stylesheet" href="../css/style_forms.css" type="text/css"/>

				<!-- google font -->
				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

				<!-- Enllaç a Javascript Extern -->
				<script  type="text/javascript" src="../js/functions.js"></script>

				<title>New User</title>

		</head>

		<body>

				<header>

				</header>

				<!--MENU NAVEGACION
				<label> <h2>Menu provisional</h2> </label>-->
				<nav>
						<ul>
                <li> <a href="../index.php">Inicio</a> </li>

						</ul>
				</nav>

				<section class ="contenedor">

							<div id="div_alta" class="division_vertical">

									<h1>Registro</h1><hr>
									<span style="color:red">* Campos obligatorios</span>
									<hr>

								<form onsubmit="return valida_form();" class="login" action="../db/altas.php" method="POST">

			               	<span style="color:red">*</span> NICK <br>
											<input  class="form_texto"  type="text" name="nick" id="nick" placeholder="User name" required onblur="rellena_nick();">
											<div class="div_form_error" id="message_nick"></div>

			               	<span style="color:red">*</span> EMAIL <br>
											<input  class="form_texto"  type="text" name="email" id="email" placeholder="email"  required onblur="rellena_email();">
											<div class="div_form_error" id="message_email"></div>

			             		<span style="color:red">*</span>   NAME <br>
			                <input  class="form_texto"  type="text" name="name" id="name" placeholder="name"  required  onblur="rellena_name();">
			                <div class="div_form_error" id="message_name"></div>

			               	<span style="color:red">*</span> SURNAME_1 <br>
			                <input  class="form_texto"  type="text" name="surname_1" id="surname_1" placeholder="surname_1"  required  onblur="rellena_surname_1();">
			                <div class="div_form_error" id="message_surname_1"></div>

			               	SURNAME_2 <br>
			                <input  class="form_texto"  type="text" name="surname_2" id="surname_2" placeholder="surname_2">
			                <div class="div_form_error" id="message_surname_2"></div>

			               	<span style="color:red">*</span> BIRTH DATE <br>
			                <input  class="form_date"  type="date" name="birth" id="birth" placeholder="birth"  required  onblur="rellena_birth();">
			                <div class="div_form_error" id="message_birth"></div>

			                <span style="color:red">*</span> PASSWORD <br>
			            	  <input  class="form_pwd"  type="password" name="pwd" id="pwd" placeholder="User password"  required  onblur="rellena_password();">
									    <div class="div_form_error" id="message_pwd"></div>

											<span style="color:red">*</span> REPITE PASSWORD <br>
											<input  class="form_pwd"  type="password" name="pwd_2" id="pwd_2" placeholder="User password"  required  onblur="rellena_password_2();">
											<div class="div_form_error" id="message_pwd_2"></div>

											<hr>
											<div class="div_pie">

													<label>Mantener Usuario
																<input type="checkbox" id="mem_user" name="mem_user" value="mem_user">
													</label>
													<br>
													<label>Acepto la Politica de datos
																<input type="checkbox" id="politica" name="politica" value="politica">
													</label>

													<a href="politica_datos.php">Leer politica de datos !! </a>

											</div>
											<hr>
											<div class="div_button"><input id="button" type="submit" name="login" value="LOGIN"></div>


								</form>


							</div>

				</section>

			<br><hr>

  		<footer>Gestion Usuario 2021 by Wicka</footer>

		</body>

</html>
