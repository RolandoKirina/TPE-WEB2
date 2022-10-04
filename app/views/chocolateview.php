<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class chocolateview{

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty();
    }
    function printOneDetail($items, $id){
      $this->smarty->assign('items', $items);
      $this->smarty->assign('id', $id);
      $this->smarty->display('chocolate.tpl');
    }
    function showtable ($brandname, $items){
      //asigno las variables
      $this->smarty->assign('brandname', $brandname);
      $this->smarty->assign('items', $items);

      $this->smarty->display('renderhome.tpl');      
  }



}