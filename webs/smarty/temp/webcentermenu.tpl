{$submitfrm}
<div id="centermenuid">
<input type="hidden" name="{$CenterMenuFieldName}" id="{$CenterMenuFieldName}" value="{$controller}">
<input type="hidden" name="{$EventFieldName}" id="{$EventFieldName}" value="{$action}">
<table id="centermenuTable">
<tr>
{if $centermenus|@count} 
{foreach from=$centermenus key=menuKey item=menuName}
{if $menuKey == $controller}
 <td id='{$menuKey}'><font>{$menuName}</font></td>
{else}
 <td id='{$menuKey}'>{$menuName}</td>
 {/if}
{/foreach}
{/if}
</tr>
</table>
</div>    
    