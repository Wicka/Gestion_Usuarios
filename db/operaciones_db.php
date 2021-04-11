<?php


  function actualizar_Conexion($_nick, $conn){
    echo "dentro actualizar conexion<hr>";
      $_now = getdate();

      echo "<pre>";
      print_r($_now);
      echo "</pre>";

      $_hoy = $_now['year']."-".$_now['mon']."-".$_now['mday']." ".$_now['hours'].":".$_now['minutes'].":".$_now['seconds'];

      echo $_hoy;


      $_QUERY ="UPDATE `users` SET `last_connection`= '$_hoy'  WHERE  `nick`= '$_nick'";

      $conn->query($_QUERY);


      header("Location: ../vistas/perfil_usuario.php");

  }
 ?>
