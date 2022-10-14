<?php

require_once './smarty-4.2.1/libs/Smarty.class.php';

class Brandview{

    private $smarty;

    public function __construct() {
      $this->smarty = new Smarty();
    }
    function showbrandtable($brands, $logged) {
      $this->smarty->assign('brands', $brands);
      $this->smarty->assign('logged', $logged);
      $this->smarty->display('ShowbrandsTable.tpl');
    }
    function showedit($brandbyid) {
      $this->smarty->assign('brandbyid', $brandbyid);
      $this->smarty->display('showedit.tpl');
    }
    function showerror ($error = NULL) {
      $this->smarty->assign('error', $error);
      $this->smarty->display('showerror.tpl');

    }
}