<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class Homeview{

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty();
    }
 
    function  showchocolatetable ($items, $brandname, $brandnameandid){
      $this->smarty->assign('brandname', $brandname);
      $this->smarty->assign('brandnameandid', $brandnameandid);
      $this->smarty->assign('items', $items);
      $this->smarty->display('renderhome.tpl');      
  }
    function showbrandtable($brands){
      $this->smarty->assign('brands', $brands);
      $this->smarty->display('ShowbrandsTable.tpl');
    }


}