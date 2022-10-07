<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class Userview {

    private $smarty;


    public function __construct(){
        $this->smarty = new Smarty ();
    }

    function showlogin () {
     $login = false;
     $this->smarty->assign("login", $login);
     $this->smarty->display('showlogin.tpl');
    }


    function showmsg (){
      if($user && $password==($user->password)){
       echo "Ha iniciado sesión";
      }
       else{
           echo "Ha habido un error, intentelo de nuevo";
       }
}
}