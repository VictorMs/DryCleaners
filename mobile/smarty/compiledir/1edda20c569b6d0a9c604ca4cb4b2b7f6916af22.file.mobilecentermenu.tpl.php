<?php /* Smarty version Smarty-3.1.8, created on 2013-10-25 04:53:00
         compiled from "mobile\smarty\temp\mobilecentermenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194815269f92cb1ea02-77277185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1edda20c569b6d0a9c604ca4cb4b2b7f6916af22' => 
    array (
      0 => 'mobile\\smarty\\temp\\mobilecentermenu.tpl',
      1 => 1336610940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194815269f92cb1ea02-77277185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submitfrm' => 0,
    'CenterMenuFieldName' => 0,
    'controller' => 0,
    'EventFieldName' => 0,
    'action' => 0,
    'centermenus' => 0,
    'menuKey' => 0,
    'menuName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5269f92cc73a68_46755508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269f92cc73a68_46755508')) {function content_5269f92cc73a68_46755508($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['submitfrm']->value;?>

<div id="centermenuid">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['CenterMenuFieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['CenterMenuFieldName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['EventFieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['EventFieldName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
<table id="centermenuTable">
<tr>
<?php if (count($_smarty_tpl->tpl_vars['centermenus']->value)){?> 
<?php  $_smarty_tpl->tpl_vars['menuName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuName']->_loop = false;
 $_smarty_tpl->tpl_vars['menuKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['centermenus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuName']->key => $_smarty_tpl->tpl_vars['menuName']->value){
$_smarty_tpl->tpl_vars['menuName']->_loop = true;
 $_smarty_tpl->tpl_vars['menuKey']->value = $_smarty_tpl->tpl_vars['menuName']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['menuKey']->value==$_smarty_tpl->tpl_vars['controller']->value){?>
 <td id='<?php echo $_smarty_tpl->tpl_vars['menuKey']->value;?>
'><font><?php echo $_smarty_tpl->tpl_vars['menuName']->value;?>
</font></td>
<?php }else{ ?>
 <td id='<?php echo $_smarty_tpl->tpl_vars['menuKey']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['menuName']->value;?>
</td>
 <?php }?>
<?php } ?>
<?php }?>
</tr>
</table>
</div>    
    <?php }} ?>