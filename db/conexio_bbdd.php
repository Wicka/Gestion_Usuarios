<?php


//*******************************************************************
//*******************************************************************
//FUNCION PER CONECTAR A LA BBDD
//*******************************************************************
//*******************************************************************

function Connect_BBDD(){

      $taula_dades="";

      //dades de connexió
      $servidor = "localhost";
      $basededades = "users_control";

      $usuari = "user";
      $contrasenya = "user";

      //CONEXIO BBDD
      $conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

      // COMPROVACIO CONEXIO
      if ($conn->connect_error) {
          echo "Fallada en la connexió: ".$conn->connect_error;
          header("Location:..");
          die();
      }else{
          //echo "Conexio a BBDD ok <br><hr><br>";
      }
      return $conn;
}

 ?>
