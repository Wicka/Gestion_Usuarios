<?php

  //** FUNCIONES DE PROCESAMIENTOS

    function codifica_PWD($_pwd){

        return password_hash($_pwd,PASSWORD_DEFAULT);
      }


    function verifica_Pwd($_pwd, $_pwd_hash){

      if (password_verify($_pwd, $_pwd_hash)) {
            $login= true;
        } else {
            $login= false;
          }
        return $login;
    }
 ?>
