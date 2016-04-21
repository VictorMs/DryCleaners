<?php /* Smarty version Smarty-3.1.8, created on 2014-10-26 19:27:47
         compiled from "webs\smarty\temp\PriceListWindow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23668544d3d2350c921-32692616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4cfb00dfc012529d80ffd9a9d00ccd13cf427d8' => 
    array (
      0 => 'webs\\smarty\\temp\\PriceListWindow.tpl',
      1 => 1414342884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23668544d3d2350c921-32692616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PriceListHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_544d3d235190a2_46756228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d3d235190a2_46756228')) {function content_544d3d235190a2_46756228($_smarty_tpl) {?><div id='pricelistpopupwind'>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['PriceListHtml']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id='showtotalamount'><table><tr><td>Total Amount:</td><td id='SummaryOrderAmount'></td></tr></table></div>
</div>
<?php }} ?>