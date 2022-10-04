<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class homeview {

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty();
    }
    function showtable ($BrandNameandId, $items,){
      //asigno las variables
      $this->smarty->assign('BrandNameandId', $BrandNameandId);
      $this->smarty->assign('items', $items);  
      $this->smarty->display('renderhome.tpl');   
 

  }


  
}
