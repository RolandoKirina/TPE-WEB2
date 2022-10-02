
<?php

/**
* Listado de ítems: Se debe poder visualizar todos los items cargados
*Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
*Listado de categorías: Se debe poder visualizar un listado
* con todas las categorías cargadas
*Listado de ítems x categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada
*/
require_once './smarty-4.2.1/libs/Smarty.class.php';

class chocolateview{

    private $smarty;

    public function __construct(){
      $this->smarty = new Smarty();
    }

    
    function printitems ($items) {
        $this->smarty->assign('chocolates', $items);

        $this->smarty->display('chocolate.tpl');
    }

}