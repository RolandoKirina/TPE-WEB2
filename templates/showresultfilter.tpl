{include file = "header.tpl"}
<h1>Chocolates pertenecientes a esa marca </h1>

<ul>

    {foreach from=$items item=$item}
        <li>{$item->nombre_chocolate}</li>
    {/foreach}

</ul>
<a href="item" type="button" class="btn btn-link">Volver a la tabla de chocolates </a>
{include file = "footer.tpl"}