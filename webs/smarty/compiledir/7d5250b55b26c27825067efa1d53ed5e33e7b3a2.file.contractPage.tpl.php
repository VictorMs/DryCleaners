<?php /* Smarty version Smarty-3.1.8, created on 2014-05-23 07:23:19
         compiled from "webs/smarty/temp/SendRequest/contractPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1976955003537f2fa719d234-37267660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d5250b55b26c27825067efa1d53ed5e33e7b3a2' => 
    array (
      0 => 'webs/smarty/temp/SendRequest/contractPage.tpl',
      1 => 1400628429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976955003537f2fa719d234-37267660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submitHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_537f2fa7572da9_81708970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f2fa7572da9_81708970')) {function content_537f2fa7572da9_81708970($_smarty_tpl) {?><div id="BodyContens" >
   <div id="inputFieldsArea">
		<div id='topicTitleId' style='width:100%;background: url(webs/images/background_title_blue.png) no-repeat; background-size:100% 100%;background-position:top center;' >
			<table id="topicTitleTableId" style="width:100%;vertical-align:middle;padding:10px;" >
			<tr><td align="left"><font size="3"><b>Send Contract Request:</b></font></td></tr>
			<tr><td align="left" rowspan="4">&nbsp;&nbsp; 
			Eagle Square DryCleaners (Abbreviation: ESD) there are full range of dry cleaning equipments and great production capacity.
			We try find business partners to jointly develop the marketing. 
			ESD will provide great advantage, profernal service and great opporunity to the business partners.
			ESD will help them to start dry cleaning service without cost or low cost If you already have/lent some place.  
			ESD just need your place to collect garments from customers (drop off service). 
			ESD's staff will collect the garments then turen back the garments you after we dry/wet cleaning/packing the garments.
			ESD cover whole cost of dry/wet cleaning process but ESD will share around 50% of whole the sale amount to the partners. Each month/bi-week we will send invoice to the business partners.
			</td></tr>
			<tr><td align="left">&nbsp;</td></tr>
			<tr><td align="left">&nbsp;</td></tr>
			<tr><td align="left">&nbsp;</td></tr>
			</table>
		</div>
		<div id = "inputAreaId" style="padding-top:20px;" >
			<table id = "inputAreaTableId">
				<tr><td align="right"><font color="red">*</font>&nbsp;&nbsp;Contact Person:</td><td align="left" colspan="3"><input type="text" size="50" name="personname"></td></tr>
				<tr><td align="right"><font color="red">*</font>&nbsp;&nbsp;Business Name:</td><td align="left" colspan="3"><input type="text" size="60" name="businessName">&nbsp;&nbsp;&nbsp;&nbsp; in Greater Vancouver area</td></tr>
				<tr><td align="right"><font color="red">*</font>&nbsp;&nbsp;Contact Phone:</td><td align="left" colspan="3"><input type="text" size="18" name="PhoneNumber1"><span style="padding-left:34px;">Second Phone:</span><input type="text" size="18" name="PhoneNumber2"/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;Contact email:</td><td align="left" colspan="3"><input type='text' size='60' name='emailAddress'></td></tr>
				<tr><td align="right" valign="top">Comment:</td><td colspan="3"><textarea cols="60" rows="5" name="comment"></textarea></td></tr>
			</table>
		</div>
	</div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['submitHtml']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }} ?>