<?php /* Smarty version Smarty-3.1.8, created on 2014-10-26 19:27:46
         compiled from "webs\smarty\temp\webpagebody.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31622544d3d22f3bf14-89668886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b851558cc1dc9bc16b39a2110d123982e5acaef6' => 
    array (
      0 => 'webs\\smarty\\temp\\webpagebody.tpl',
      1 => 1414342886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31622544d3d22f3bf14-89668886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'setrowspan' => 0,
    'leftsider' => 0,
    'inputOrderButton' => 0,
    'actionName' => 0,
    'menucontentsFile' => 0,
    'menucontents' => 0,
    'submitfrmending' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_544d3d232ef363_46644480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d3d232ef363_46644480')) {function content_544d3d232ef363_46644480($_smarty_tpl) {?><div id = "pagebodyid">
<?php if ($_smarty_tpl->tpl_vars['setrowspan']->value>0&&!empty($_smarty_tpl->tpl_vars['leftsider']->value)){?>
<table id="outsideFrameId">
<tr>
<td id='leftsiderid' width="20%" valign="top">
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['leftsider']->value)===null||$tmp==='' ? '' : $tmp);?>

</td>
<td id='bodycontentid' valign="top">
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['inputOrderButton']->value)===null||$tmp==='' ? '' : $tmp);?>

<fieldset style="text-align:left;border: 2px solid LawnGreen;height:100%;width:96%;">
<legend id="navActionName" style="margin-left:15px;"><?php echo $_smarty_tpl->tpl_vars['actionName']->value;?>
</legend>
<?php if (!empty($_smarty_tpl->tpl_vars['menucontentsFile']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['menucontentsFile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"page content"), 0);?>

<?php }else{ ?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['menucontents']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }?>
</fieldset>
</td>
</tr>
</table>
<?php }else{ ?>
<?php if (!empty($_smarty_tpl->tpl_vars['menucontentsFile']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['menucontentsFile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"page content"), 0);?>

<?php }else{ ?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['menucontents']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }?>
<?php }?>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['submitfrmending']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }} ?>