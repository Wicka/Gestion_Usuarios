<?php
    session_start();
    include ("../db/conexio_bbdd.php");
    include ("../db/get_datas.php");

    if(isset($_SESSION['user'])){

        $conn  = Connect_BBDD();
        $_user = get_user_by_nick($_SESSION['user'], $conn );

        if(file_exists("../img/users/".$_user['id'].".png")){
              $_foto = "../img/users/".$_user['id'].".png";
            }else{
              $_foto = "../img/users/0.png";
          }
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
 				<meta name="keywords" content="Login, usuarios, gestion">
 				<meta name="author" content="Ester Mesa">

 				<!-- Enllaç a l'arxiu CSS Extern -->
 				<link rel="stylesheet" href="../css/vistas.css" type="text/css"/>

 				<!-- google font -->
 				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


 				<title>Gestion Usuario</title>

 		</head>

 		<body>

 				<header>

          <div class="contenedor">

              <div   class="div_menu" >
                    <ul class="nav">
                      <li> <a href="../formularios/form_editar.php"> Editar</a></li>
                      <li> <a href="../formularios/form_eliminar.php"> Eliminar</a></li>
                      <li> <a href="../sesiones/destroy_session.php"> Logout</a></li>

                      </ul>
              </div>
 				</header>


 			    <section class="contenedor">

            <div id="detalle_user" class="division_vertical">

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

            </div>


           <div class="division_vertical">

                     <img  class='foto_perfil' src=<?php echo $_foto; ?> alt="foto perfil">
           </div>

 				</section>

 			<br><hr>

   		<footer>Gestion Usuario 2021 by Wicka</footer>

 		</body>

 </html>
