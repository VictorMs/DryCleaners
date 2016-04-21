<?php /* Smarty version Smarty-3.1.8, created on 2014-05-23 07:23:22
         compiled from "webs/smarty/temp/SendRequest/feedbackPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131869049537f2faaa61249-94428918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d92633ec83a7a1c449e55a48f2a1a87c6348c50' => 
    array (
      0 => 'webs/smarty/temp/SendRequest/feedbackPage.tpl',
      1 => 1400628430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131869049537f2faaa61249-94428918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submitHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_537f2faabc03b6_46724296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f2faabc03b6_46724296')) {function content_537f2faabc03b6_46724296($_smarty_tpl) {?><div id="BodyContens" >
    <div id="inputFieldsArea">
		<div id="topicTitleId" style="width:100%;background: url(webs/images/background_title_brown.png) no-repeat; background-size:100% 100%;background-position:top center;" >
			<table id='topicTitleTableId' style='width:100%;vertical-align:middle;padding:10px;' >
			<tr><td align="left"><font size="4"><b>Feedback</b></font></td></tr>
			<tr><td align="left" rowspan="4">&nbsp;&nbsp; Your dry leaners store absolutely need you join and oversee to improve our service quality. Your opinions and advices is our aenergy and important resource.
			 Please sent any information to us. We will do our best service for you. 
			</td></tr>
			<tr><td align="left">&nbsp;</td></tr>
			<tr><td align="left">&nbsp;</td></tr>
			<tr><td align="left">&nbsp;</td></tr>
			</table>
		</div>
		<div id = "inputAreaId" style="padding-top:20px;" >
			<table id = "inputAreaTableId">
				<tr><td align="right">&nbsp;Your Name:</td><td align="left" colspan="3"><input type="text" size="50" name="personname"></td></tr>
				<tr><td align="right">&nbsp;Contact Phone:</td><td ><input type="text" size="18" name="PhoneNumber1"></td></tr>
				<tr><td align='right'>&nbsp;Contact email:</td><td align="left" colspan="3"><input type='text' size='60' name='emailAddress'></td></tr>
				<tr><td align="right" valign="top">Feed Back:</td><td colspan="3"><textarea cols="60" rows="5" name="comment"></textarea></td></tr>
			</table>
		</div>
	</div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['submitHtml']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }} ?>