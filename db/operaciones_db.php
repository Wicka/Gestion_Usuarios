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

  //    header("Location: ../vistas/perfil_usuario.php");

  }

  function status_user($_nick, $conn){
    $_QUERY ="SELECT `id_estado` FROM `users` WHERE  `nick`= '$_nick'";

    $_status= $conn->query($_QUERY);

    echo "<pre>";
    print_r($_status);
    echo "</pre>";

    if($_status->num_rows > 0){
        $estado = $_status->fetch_assoc();

    }else{
      echo "<br>No Existe este usuario";
      $estado=-1;
    }

    return $estado;

  }




 ?>
