<?php

  session_start();


	if(isset($_SESSION['user'])){
		header("Location: ../vistas/perfil_usuario.php");
	}

?>

﻿<doctype html>
<html lang="es">

		<head>

				<meta charset="utf-8"/>
				<meta name="description" content="Gestion Usuarios">
				<meta name="keywords" content="Altas, usuarios, gestion">
				<meta name="author" content="Ester Mesa">

				<!-- Enllaç a l'arxiu CSS Extern -->
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
				<link rel="stylesheet" href="../css/style_forms.css" type="text/css"/>

				<!-- google font -->
				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

				<!-- Enllaç a Javascript Extern -->
				<script  type="text/javascript" src="../js/functions.js"></script>

        <!--JQUERY -->
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js" ></script>

				<title>New User</title>

		</head>

		<body>	<header>

        <div class="contenedor">

            <div   class="div_menu" >
                  <ul class="nav">
                    <li> <a href="../index.php">Inicio</a> </li>
                    </ul>
            </div>



      </header>



				<section class ="contenedor">

							<div id="div_alta" class="division_vertical">

									<h1>Registro</h1><hr>
									<span style="color:red">* Campos obligatorios</span>
									<hr>


								<form onsubmit="return valida_form();" class="login" action="../db/altas.php" method="POST" enctype='multipart/form-data'>

			               	<span style="color:red">*</span> NICK <br>
											<input  class="form_texto"  type="text" name="nick" id="nick" placeholder="User name" required onblur="rellena_nick()"  oninput="check_nick()" >
											<div class="div_form_error" id="message_nick"></div>


			               	<span style="color:red">*</span> EMAIL <br>
											<input  class="form_texto"  type="email" name="email" id="email" placeholder="email"  required onblur="rellena_email();" oninput="check_email();">
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

											<!--	<input type='hidden' name='MAX_FILE_SIZE' value='100000'> <br> -->
											<div class="fitxer">
													<br>
													<label>Sube una foto de un tamaño no superior a 50 KB.
																<br><br> <input name='userfile' type='file'> <br><br>
													</label>
												</div>

											<div class="div_pie">

													<label>Acepto la Politica de datos
																<input type="checkbox" id="politica" name="politica" value="politica">
													</label>

													<a href="../vistas/politica_datos.php">Leer politica de datos !! </a>

											</div>
											<hr>
											<div class="div_button"><input id="button" type="submit" name="Aceptar" value="ACEPTAR"></div>


								</form>


							</div>

				</section>

			<br><hr>

  		<footer>Gestion Usuario 2021 by Wicka</footer>

		</body>

</html>
