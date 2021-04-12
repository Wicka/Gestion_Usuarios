<?php
      include  ("../db/conexio_bbdd.php");
      include ("../db/get_datas.php");
      include ("funciones_seguridad.php");
      include ("../sesiones/sesiones.php");
      include ("../db/operaciones_db.php");

      //FUNCIONES VALIDACION USUARIO

      verifica_Login();

      function verifica_Login(){

          if($_POST != null){

              if($_POST['nick']!=null){

                  $_nick = filter_var($_POST["nick"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
              }else{
                  $_nick = "";
              }

              //PROCESO POST PWD
              if($_POST['pwd']!=null){
                  //SANEO ENTRADA CON FILTROS SANIZER
                  $_pwd = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
              }else{
                  $_pwd = "";
              }


                  $conn = Connect_BBDD();
                  //CONEXION BASE DE DATOS


                  $_Existe = get_pwd_by_nick($_nick, $conn);

                  if($_Existe==-1){
                        echo "<hr>No hay usuario con este nombre<hr>";
                        echo "<hr>TE ENVIO A INDEX NO TE MOSTRARE ESTE MSJ<hr>";
                        header("Location: ..");
                        die();
                  }else{

                        $_pwd_hash =  $_Existe['pwd'];

                        $_login = verifica_Pwd($_pwd, $_pwd_hash);

                        if ($_login){
                            echo '¡La contraseña es válida!';
                            echo "<hr>YA VERE A DONDE TE ENVIO .... SERA TU PAGINA DE PERFIL<hr>";

                            Crear_Usuario_Sesion($_nick);


                            $conn = Connect_BBDD();
                            actualizar_Conexion($_nick,$conn);

                            
                            $conn->close();

                        }else{
                            echo 'Contraseña erronea !';
                            echo "<hr>TE ENVIO A INDEX PQ NO ESA PWD NO ES CORRECTA TE MOSTRARE ESTE MSJ<hr>";
                            header("Location: ..");
                            die();
                        }
                  }

          }else{
                echo "NO RECIBO NADA DE FORMULARIO POST <hr>";
                header("Location: ..");
                die();
          }

      }

?>
