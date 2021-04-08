<?php

      include ("../db/get_datas.php");
      //FUNCIONES VALIDACION USUARIO

      verifica_Login();

      function verifica_Login(){

          if($_POST != null){


            //PROCESO POST NICK
              if($_POST['nick']!=null){
                  //SANEO ENTRADA CON FILTROS SANIZER
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

                  echo "<hr>";
                  echo "NICK : ".$_nick;
                  echo "<hr>";
                  echo "pwd : ".$_pwd;
                  echo "<hr>";

                  echo "RECUPERO PWD DE LA TABLA USUARIOS <hr>";
                  echo "llamo a funcion get_user_by_nick() del fichero get_datas.php <hr>";

                  $_pwd_hash = get_user_by_nick($_nick)['pwd'];

                  echo "<hr><hr>";
                  echo "imprimo el hash de la tabla del usuario :".$_pwd_hash."<hr>";

                  echo "<hr>LLAMO A LA FUNCION VERIFICA PASSWORD <hr>";

                  if (password_verify($_pwd, $_pwd_hash)) {
                        echo '¡La contraseña es válida!';

                  } else {
                      //echo 'La contraseña no es válida.';
                        echo 'Ha ocurrido un error prueba otra vez !';
                  }



          }else{
            echo "NO RECIBO NADA DE FORMULARIO POST <hr>";
          }

      }

/*-
      function codifica_PWD($_pwd){
        $hash = password_hash($_pwd, PASSWORD_DEFAULT);
        return $hash;
      }
*/

?>
