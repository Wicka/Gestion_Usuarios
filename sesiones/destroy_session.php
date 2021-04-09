<?php
    session_start();
    if (isset($_SESSION['filtro'])){
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
 ?>
