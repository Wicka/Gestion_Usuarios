<?php
    session_start();

    echo "HOLA PERFIL USUARIO <hr>";


    if(isset($_SESSION['user'])){

        echo " Eres : ".$_SESSION['user'];
        echo "<hr><a href='../sesiones/destroy_session.php'>Cerrar Sesion</a>";
        
    }else{
        header("Location: ../sesiones/destroy_session.php");
        die();
    }

 ?>
