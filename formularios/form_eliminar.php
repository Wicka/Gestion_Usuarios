<?php   session_start();

  include ("../db/conexio_bbdd.php");
  include ("../db/get_datas.php");


  if(isset($_SESSION['user'])){
          $conn  = Connect_BBDD();
          $_user = get_user_by_nick($_SESSION['user'], $conn );

      }else{
          header("Location: ../sesiones/destroy_session.php");
          die();
        }
?>


﻿<doctype html>
<html lang="es">

		<head>

				<meta charset="utf-8"/>
				<meta name="description" content="Gestion Usuarios">
				<meta name="keywords" content="Editar, usuarios, gestion">
				<meta name="author" content="Ester Mesa">

				<!-- Enllaç a l'arxiu CSS Extern -->
        <link rel="stylesheet" href="../css/style.css" type="text/css"/>
				<link rel="stylesheet" href="../css/style_forms_eliminar.css" type="text/css"/>

				<!-- google font -->
				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

				<!-- Enllaç a Javascript Extern -->
				<script  type="text/javascript" src="../js/functions.js"></script>

        <!--JQUERY -->
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js" ></script>

				<title>Edit User</title>

		</head>

		<body>
      <header>

        <div class="contenedor">

              <div   class="div_menu" >
                  <ul class="nav">
                    <li> <a href="../index.php">Inicio</a> </li>
                    </ul>
              </div>
        </div>

      </header>

      <form onsubmit="return valida_form();" class="login" action="../db/eliminar.php" method="POST" enctype='multipart/form-data'>


				    <section class ="contenedor">

                <div class="division_vertical">

                      <hr><hr>
                      <?php
                          if(file_exists("../img/users/".$_user['id'].".png")){
                                $_foto = "../img/users/".$_user['id'].".png";
                              }else{
                                $_foto = "../img/users/0.png";
                            }

                            echo "<img src=$_foto alt='foto perfil'>";

                        ?>
                        <h1>Perfil <?php echo $_SESSION['user'];?></h1><hr>
                      <!--  <span style="color:red"> * Campos Obligatorios </span>-->
                        <hr>

                        <!--	<input type='hidden' name='MAX_FILE_SIZE' value='100000'> <br> -->
                      
                        <br>  <br>
                        <hr>
                </div>

      						<div id="div_alta" class="division_vertical">


                    <p>
                      <?php
                      echo "Hola  ".$_user['nick'];
                      echo "<hr>";
                      echo "Nombre : ".$_user['name']."<br>";
                      echo "Apellido 1 : ".$_user['surname_01']."<br>";
                      echo "Apellido 2 : ".$_user['surname_02']."<br>";
                      echo "<hr>";
                      echo "Email : ".$_user['email'];
                      echo "<hr>";
                      echo "Fecha Nacimiento : ".$_user['birth_date'];
                      echo "<hr>";
                      echo "Antiguedad : ".$_user['create_date'];
                      echo "<hr>";
                      echo "Ultima conexion : ".$_user['last_connection'];
                      echo "<hr>";
                      echo "Estado : ".$_user['id_estado'];

                        ?>
                      </p>

      											<hr>
      											<div class="div_button"><input id="button" type="submit" name="Aceptar" value="ACEPTAR"></div>


      							</div>

				      </section>

         </form>

			<br><hr>

  		<footer>Gestion Usuario 2021 by Wicka</footer>

		</body>

</html>
