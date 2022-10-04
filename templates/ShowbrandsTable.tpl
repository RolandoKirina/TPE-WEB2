{include file = "header.tpl"}
<h1>Tabla Marcas  </h1>
<table class="table table-striped table-dark">
    <thead>
        <th>Nombre De la Marca</th>
        <th>Año Creacion </th>
        <th>Pais Marca </th>
    </thead>
    <tbody>
    {foreach from=$brands item=$brand}
        <tr>
        <td>{$brand->nombre_marca}</td>
        <td>{$brand->anio_creacion}</td>
        <td>{$brand->pais_marca}</td>
        </tr>
    {/foreach}
    </tbody>

{include file="footer.tpl"}