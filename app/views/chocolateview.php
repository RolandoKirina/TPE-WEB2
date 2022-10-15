<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class Chocolateview {

    private $smarty;  

    public function __construct(){
      $this->smarty = new Smarty();
    }
    function  showchocolatetable ($items , $brands, $logged){
      $this->smarty->assign('items', $items);
      $this->smarty->assign('brands', $brands);
      $this->smarty->assign('logged', $logged);
      $this->smarty->display('renderchocolatetable.tpl');  

    }
    function formedititem ($brands, $items, $itembyid) {
      $this->smarty->assign('brands', $brands);
      $this->smarty->assign('items', $items);
      $this->smarty->assign('itembyid', $itembyid);
      $this->smarty->display('formedititem.tpl');
    }
    function showdetail ($item){
      $this->smarty->assign('item', $item);
      $this->smarty->display('getdetail.tpl');
    } 
    function showfilter($brands){
      $this->smarty->assign('brands', $brands);
      $this->smarty->display('showfilter.tpl');
    }
    function showresultfilter ($items) {
      $this->smarty->assign('items', $items);
      $this->smarty->display('showresultfilter.tpl');
    }
    function showerror(){
      $this->smarty->display('showerrordelete.tpl');

    }

}

