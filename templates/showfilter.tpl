<h3>Ver Chocolates de cada Marca </h3>
{foreach from=$brands item=$brand}
    <ul class="ul">
    <li><a href="item/filter/{$brand->id_marca}">{$brand->nombre_marca}</a></li>
    </ul>
{/foreach}
</div>
// tengo los link de cada marca 
cuando el usuario aprete el link
lo lleve a otra pagina, que le muestre los chocolates pertenecientes a esa marca. 
{include file="footer.tpl"}