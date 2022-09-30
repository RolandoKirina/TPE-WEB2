{include file = "header.tpl"}

<table class="table">
    <tbody>
        <thead class="mt-5">
           <th>Nombre De La marca </th>
           <th>Pais De La marca </th>
           <th>Editar</th>
           <th>Eliminar</th>
        </thead>
    {foreach from=$brands item=$brand}
        <tr>
            <td> {$brand->nombre_marca} </td>
            <td> {$brand->pais_marca} </td>
            <td> Boton editar</td>
            <td> Boton Eliminar</td>
        </tr>
    {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}














{include file="footer.tpl"}