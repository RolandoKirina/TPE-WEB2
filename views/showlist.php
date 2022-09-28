
<?php

include_once './templates/header.php';

function renderlist () {
echo '
<h1>Chocolateria</h1>
<ul>
    <li><a href="veritem">Ver Item</a></li>
    <li><a href="veritem/detalle">Ver detalle de item</a></li>
    <li><a href="vermarcas">Ver marcas</a></li>
    <li><a href="veritem/marca">Ver item por categoria</a></li>

</ul>';
}

renderlist();
?>
