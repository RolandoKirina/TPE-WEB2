<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class homeview {

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty();
    }
    function showtable ($items, $BrandNameandId){
      //asigno las variables
      $this->smarty->assign('BrandNameandId', $BrandNameandId);
      $this->smarty->assign('items', $items);  
      $this->smarty->display('renderhome.tpl');   
  }

  function ShowBrandsTable($brands){
    $this->smarty->assign('brands', $brands);
    $this->smarty->display('ShowbrandsTable.tpl');
  }

  
}
