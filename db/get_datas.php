<?php

//**RECUPERO PWD DEL USUARIO NICK
//** SI NO EXISTE USUARIO ENVIO -1

    function get_pwd_by_nick($_nick, $conn ){

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



  function get_user_by_nick($_nick, $conn ){


            $tabla="users";

            $Query = "SELECT * FROM `users` WHERE `nick` = '$_nick'" ;


            $user = $conn->query($Query);

            if($user->num_rows > 0){
                $_user = $user->fetch_assoc();
                $_Date = explode (" ", $_user['birth_date']);

                $_user['birth_date']=  $_Date[0];

            }else{
              echo "<br>No Existe este usuario desde get_data<hr>";
              $_user=-1;
            }
/*          echo "<pre>";
            print_r($_user);
            echo "</pre>";
*/

            $conn->close();
            return $_user;
        }

        function get_status_by_id($_id, $conn){


          //CONSULTA TOTS REGISTRES
          $sql = "SELECT `status` FROM `status_users` WHERE `id_status`='$_id' ";

          //EXCUTO LA QUERY I GUARDO A VARIABLE
          $status = $conn->query($sql);

        //  $_genere=[];

          $_statu = $status->fetch_assoc();

          //TANCO CONEXIO AMB LA BBDD
          $conn->close();
          
          return $_statu;
    }


    function get_user_by_email(){

    }

    function get_user_by_status(){
    }
 ?>
