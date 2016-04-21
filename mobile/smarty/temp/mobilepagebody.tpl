<div id = "pagebodyid">
{if $setrowspan > 0 && !empty($leftsider)}
<table id="outsideFrameId">
<tr>
<td id='leftsiderid' width="20%" valign="top">
{$leftsider|default:''}
</td>
<td id='bodycontentid' valign="top">
{$inputOrderButton|default:''}
<fieldset style="text-align:left;border: 2px solid LawnGreen;height:100%;width:96%;">
<legend id="navActionName" style="margin-left:15px;">{$actionName}</legend>
{if !empty($menucontentsFile)}
{include file="$menucontentsFile" title="page content"}
{else}
{$menucontents|default:''}
{/if}
</fieldset>
</td>
</tr>
</table>
{else}
{if !empty($menucontentsFile)}
{include file="$menucontentsFile" title="page content"}
{else}
{$menucontents|default:''}
{/if}
{/if}
</div>
{$submitfrmending|default:''}
