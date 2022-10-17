<?php

class Authhelper {

  public function login ($userinfo){
      session_start();
        $_SESSION['USER_ID'] = $userinfo->id;
        $_SESSION['USER_EMAIL'] = $userinfo->email;
        $_SESSION['ISLOGGED'] = true;
  }
  //si no esta logueado lleva al login...
  public function checkloggedin() {
    session_start();
     if (!isset($_SESSION['ID_USER'])) {
         header('Location: ' . BASE_URL . "login");
         die();
     }
 }

  public function logged() { 
    session_start();
    if(!isset($_SESSION['ISLOGGED'])) {
        $logged = false;
    } 
    else {
        $logged = true;
    }
   return $logged;  
  }
 }