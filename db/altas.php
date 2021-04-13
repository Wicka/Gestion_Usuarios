<?php
    include ("conexio_bbdd.php");
    include ("../seguridad/funciones_seguridad.php");
    include ("../sesiones/sesiones.php");

    if($_POST!=null){

        if($_POST['nick']!=null and $_POST['pwd']!=null and $_POST['name']!=null and $_POST['surname_1']!=null and $_POST['birth']!=null and $_POST['email']!=null){

          $conn=Connect_BBDD();

          $_nick = filter_var(strtolower(trim($_POST['nick'])), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
          $_pwd =  filter_var(trim($_POST['pwd']), FILTER_SANITIZE_STRING);
          $_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
          $_surname_1 = filter_var($_POST['surname_1'], FILTER_SANITIZE_STRING);
          $_surname_2 =  filter_var($_POST['surname_2'], FILTER_SANITIZE_STRING);
          $_email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

          $_birth =  filter_var(trim($_POST['birth']), FILTER_SANITIZE_NUMBER_INT);


          $_pwd_codificada = codifica_PWD($_pwd);
/*
            echo "CAMPOS <hr>";
            echo "nick :".$_nick."<hr>";
            echo "pwd :".$_pwd."<hr>";
            echo "name :".$_name."<hr>";
            echo "surname_1 :".$_surname_1."<hr>";
            echo "surname_2 :".$_surname_2."<hr>";
            echo "birth :".$_birth."<hr>";
            echo "email :".$_email."<hr>";

            echo "MI HASH :". $_pwd_codificada."<hr>";
*/
        //  echo "01<hr>";
//
    //      if(verifica_nick($_nick,$conn)){
    //      echo "02<hr>";

      //        echo "EL NICK ".$_nick." YA ESTA EN USO.<hr>";
      //        Usuario_en_uso($_nick , 1);
      //        echo "<a href='../formularios/form_altas.php'>Altas</a>";


          //    header("Location: ../formularios/form_altas.php");
          //    die();


    //      }else{
      //    echo "03<hr>";
    //          Usuario_en_uso($_nick , 0);
    //          echo "NICK LIBRE <hr>";

            //GUARDO EN TABLA

          //QUERY ALTA POR DEFECTO STATUS 1 ACTIVO
          $SQL_insert="INSERT INTO `users`
          (`id`, `nick`, `email`, `name`, `surname_01`, `surname_02`,
          `birth_date`, `pwd`, `create_date`, `last_connection`, `id_estado`)
           VALUES (NULL, '$_nick', '$_email', '$_name', '$_surname_1', '$_surname_2', '$_birth',
          '$_pwd_codificada', current_timestamp(), current_timestamp(), '1'); ";

          //EJECUTO LA QUERY INSERTAR NUEVO USUARIO
          $res_Insert_QUERY = $conn->query($SQL_insert);

          //GUARDAR IMAGEN
          //BUSCO EL ID DEL NUEVO REGISTRO PARA ASIGNARLO A LA IMAGEN QUE ME SUBA EL USUARIO

          $SQL_SELECT ="SELECT `id` FROM `users` ORDER BY `id` DESC LIMIT 1";
          $res_select_last_ID= $conn->query($SQL_SELECT);

          $user = $res_select_last_ID->fetch_assoc();

          Crear_Usuario_Sesion($_nick);

          echo "<pre>";
              print_r($user);
          echo "</pre>";

          echo "EL ID ES : ".$user['id']."<hr>";




          if ($_FILES['userfile']['error']!=0){

             echo "ERROR EN LA SUBIDA <hr>";
             echo $_FILES['userfile']['error']."<hr>";

             header("Location: ../form_altas.php");
       }else {

           echo "FICHERO SUBIDO CON EXITO<hr>";
           //AQUI TENGO EL ID DEL REGISTRO Y AHORA QUIERO GUARDAR EL FICHERO CON ESTE NOMBRE

           $_nom_foto_ID="../img/users/".$user['id'].".png";

           if(is_uploaded_file($_FILES['userfile']['tmp_name'])){

               if($_FILES['userfile']['size'] > 5120000){
                     echo "TAMAÑO INCORRECTO <hr>";
               }elseif(!(strpos($_FILES['userfile']['type'],"jpeg")) && !(strpos($_FILES['userfile']['type'],"jpg"))  && !(strpos($_FILES['userfile']['type'],"png")) ){
                     echo "TIPO DE ARCHIVO INCORRECTO <hr>";
                     }else{
                           move_uploaded_file($_FILES['userfile']['tmp_name'],$_nom_foto_ID);
                           echo "MOVIDO CON EXITO A CARPETA <hr>";
                     }
           }else{
               echo "no subes nada <hr>";
           }
    //   }









          $conn->close();

          echo "<hr>TE ENVIO A .....PERFIL si todo bien NO TE MOSTRARE ESTE MSJ<hr>";
          header("Location: ../vistas/perfil_usuario.php");
          die();


          }




        }else{
          echo "CAMPOS DEL POST ALGUNO VACIO<hr>";
          header("Location: ../formularios/form_altas.php");
          die();

        }

    }else{
      echo "NADA POR POST PARA ALTA USUARIO .";
      header("Location: ..");
      die();
    }




    function verifica_nick($_nick,$conn ){

        $Query = "SELECT `pwd` FROM `users` WHERE `nick` = '$_nick'" ;

        $user = $conn->query($Query);

        if($user->num_rows > 0){
            $_user = true;
        }else{
          echo "<br>No Existe este usuario";
          $_user= false;
        }

        return $_user;
    }

?>
