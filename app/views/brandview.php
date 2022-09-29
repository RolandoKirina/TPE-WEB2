<?php


class brandview {


 function showbrands ($brands){
   foreach ($brands as $brand) {
     echo "<tr>";
     echo "<td> $brand->nombre_marca </td>";
     echo "</tr>";
     

   }
 }
}