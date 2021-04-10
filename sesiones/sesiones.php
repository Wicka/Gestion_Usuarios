
<?php

    function Crear_Sesion($_nick){

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

              header ("Location: ../vistas/perfil_usuario.php");
              die();

            }
    }

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
