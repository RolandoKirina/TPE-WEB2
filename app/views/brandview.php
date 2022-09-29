<?php


class brandview {


 function showbrands ($brands){
   echo '<tr> Marca: </tr>';
   foreach ($brands as $brand) {
     echo "<br>";
     echo "<td> $brand->nombre_marca </td>";
     echo "<br>";
   }
 }
}