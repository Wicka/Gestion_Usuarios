<?php
    session_start();

    if (!isset($_SESSION['user']) or $_SESSION['code_status']==1){
        header("location: ..");
    }
 ?>



 ﻿<doctype html>
 <html lang="es">

 		<head>

 				<meta charset="utf-8"/>
 				<meta name="description" content="Gestion Usuarios">
 				<meta name="keywords" content="status, usuarios, gestion">
 				<meta name="author" content="Ester Mesa">

 				<!-- Enllaç a l'arxiu CSS Extern -->
 				<link rel="stylesheet" href="../css/status.css" type="text/css"/>

 				<!-- google font -->
 				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

 				<title>Gestion Usuario</title>

 		</head>

 		<body>

 				<header>

 				</header>

 				<section class ="contenedor">
 							<div id="div_login" class="division_vertical">
 								<form onsubmit="return valida_login();" class="login" action="seguridad/verifico_user.php" method="POST">


                        <?php
                        if (isset($_SESSION['code_status'])){

                            echo "USUARIO : ".$_SESSION['user']."<hr>";

                            switch ($_SESSION['code_status']) {
                              case '0':
                                // ELIMINADO TEMPORALMENTE...
                                echo "ELIMINADO TEMPORALMENTE...";
                                echo "<div class='div_button'> <a href='#'>RECUPERAR</a> </div>";
                                echo "<div class='div_button'><input id='button' type='submit' name='login' value='ELIMINAR'></div>";

                              break;
                              case '2':
                                // BANEADO...
                                echo "BANEADO...";
                              break;

                              case '3':
                                // PENDIENTE...
                                echo "PENDIENTE VERIFICACION...";
                              break;
                              case '4':
                                // INACTIVO...
                                echo "INACTIVO...";
                                    echo "<div class='div_button'><input id='button' type='submit' name='login' value='ACTIVAR'></div>";
                              break;

                              default:
                                echo "<div class='div_button'><input id='button' type='submit' name='login' value='LOGIN'></div>";

                                break;
                            }

                        //    session_destroy();
                        //    unset($_SESSION['code_status']);
                            echo "Sesion cerrada<hr>";
                        }

                        ?>

 									</form>
 							</div>
 				</section>

 			<br><hr>

   		<footer>Gestion Usuario 2021 by Wicka</footer>

 		</body>

 </html>
