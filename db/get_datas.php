<?php
    include  ("../db/conexio_bbdd.php");



    function get_user_by_nick($_nick){

        $conn = Connect_BBDD();
        //CONEXION BASE DE DATOS
        $tabla="users";

        $Query = "SELECT `pwd` FROM `users` WHERE `nick` = '$_nick'" ;


        $user = $conn->query($Query);

        if($user->num_rows > 0){
            $_user = $user->fetch_assoc();
        }else{
          echo "<br>No Existe este usuario";
          $_user=-1;
        }

        $conn->close();
        return $_user;
    }


    function get_user_by_email(){

    }

    function get_user_by_status(){

    }
 ?>
