<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class Chocolateview {

    private $smarty;  

    public function __construct(){
      $this->smarty = new Smarty();
    }
    function printonedetail($item, $id){
      $this->smarty->assign('item', $item);
      $this->smarty->assign('id', $id);
      $this->smarty->display('chocolate.tpl');
    } 
    function  showchocolatetable ($items , $brands){
      $this->smarty->assign('items', $items);
      $this->smarty->assign('brands', $brands);
      $this->smarty->display('renderchocolatetable.tpl');      
    }

}

