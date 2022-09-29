
<?php

/**
* Listado de ítems: Se debe poder visualizar todos los items cargados
*Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
*Listado de categorías: Se debe poder visualizar un listado
* con todas las categorías cargadas
*Listado de ítems x categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada
*/

class itemview{

    function renderlist () {
    echo '
        <h1>Chocolateria</h1>
        <ul>
            <li><a href="item">Ver Item</a></li>
            <li><a href="item/detail">Ver detalle del item</a></li>
            <li><a href="marcas">Ver marcas</a></li>
            <li><a href="item/marca">Ver item por marca</a></li>

        </ul>';
    }
    function printitems ($items) {
        echo '<tr> Chocolate: </tr>';
        foreach($items as $item){
            echo "<p> $item->nombre_chocolate </p>";
        }
    }

}