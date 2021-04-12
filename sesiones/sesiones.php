
<?php

    function Crear_Usuario_Sesion($_nick){

          if ($_nick == null){
            echo "ESTOY EN CREAR SESION SIN NICK<hr>";
          //    header ("Location: ../index.php");
        //      die();

          }else {

              //INICIO SESSIO
              echo "ESTOY EN CREAR SESION CON EL NICK : ".$_nick."<hr>";
              session_start();
              $_SESSION['user']=$_nick;
              echo "Imprimo variable sesion user : ".$_SESSION['user']."<hr>";

          //    header ("Location: ../vistas/perfil_usuario.php");
          //    die();

            }
    }

/*

    function Usuario_en_uso($_nick, $_libre){
      echo "sesion 01<hr>";

      if ($_libre == 1){

        echo "sesion 02<hr>";
        echo "nick sesion en suso ";

        $_SESSION['en_uso'] = $_nick;
        echo "session .:".$_SESSION['en_uso']."<hr>";

      }else {
        echo "sesion 03<hr>";
        echo "destruyo variable nick sesion en suso ";
        unset($_SESSION['en_uso']);
      }

    }
*/

    function Destruir_Sesion(){

      if (isset( $_SESSION['user'])){
          if(session_destroy() == true){
              session_destroy();
              header("Location: ../index.php");
              die();
          }
        }else{
          echo "No has iniciat sesio";
          header("Location: ../index.php");
          die();
        }
    }
 ?>
