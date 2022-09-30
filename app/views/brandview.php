<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class brandview {

  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty();
  }

 function showbrands ($brands){

  //asigno las variables
   $this->smarty->assign('brands', $brands);

   $this->smarty->display('brandslist.tpl');
  }
}