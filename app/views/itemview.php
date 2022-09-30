
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
        <a href="login">Loguearse</a>;
        <table>
            <th>Ver Chocolate</th>
            <th>Ver marca</th>
            <th><a href="marca">Seleccionar todos los chocolates de una marca</a></th>
        </table>';
    }
    
    function printitems ($items) {
        foreach($items as $item){
            echo "<tr>"; 
            echo "<td> $item->nombre_chocolate </td>";
            echo '<td> <a href="detail">Ver detalle del chocolate </a></td>';
            echo '<br>';
            echo "</tr>";
        }
    }


}