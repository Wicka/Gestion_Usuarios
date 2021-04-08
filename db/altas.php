<?php
    include("conexio_bbdd.php");

    $conn=Connect_BBDD();

    echo "altas.php<hr>";

    if($_POST!=null){

        if($_POST['nick']!=null and $_POST['pwd']!=null and $_POST['name']!=null and $_POST['surname_1']!=null and $_POST['birth']!=null and $_POST['email']!=null){

            echo "CAMPOS, NICK, NAME, SURNAME1, NACIMIENTO Y EMAIL RELLENADOS <hr>";


            /*-
                  function codifica_PWD($_pwd){
                    $hash = password_hash($_pwd, PASSWORD_DEFAULT);
                    return $hash;
                  }
            */

        }else{
          echo "CAMPOS DEL POST ALGUNO VACIO<hr>";
        }

    }else{
      echo "NADA POR POST PARA ALTA USUARIO .";
    }

?>
