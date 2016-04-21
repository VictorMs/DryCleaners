<?php /* Smarty version Smarty-3.1.8, created on 2014-05-20 20:29:43
         compiled from "webs/smarty/temp/PriceListWindow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1698177328537bf377c179e7-35035073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2daa26d246419c5c9378e00953d75a1b0d99be' => 
    array (
      0 => 'webs/smarty/temp/PriceListWindow.tpl',
      1 => 1400628386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1698177328537bf377c179e7-35035073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PriceListHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_537bf377c5f3c8_49858187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537bf377c5f3c8_49858187')) {function content_537bf377c5f3c8_49858187($_smarty_tpl) {?><div id='pricelistpopupwind'>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['PriceListHtml']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id='showtotalamount'><table><tr><td>Total Amount:</td><td id='SummaryOrderAmount'></td></tr></table></div>
</div>
<?php }} ?>