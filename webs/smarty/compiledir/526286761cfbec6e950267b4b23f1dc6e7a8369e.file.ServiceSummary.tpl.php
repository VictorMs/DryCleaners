<?php /* Smarty version Smarty-3.1.8, created on 2014-05-21 02:03:27
         compiled from "webs/smarty/temp/ServiceCategory/ServiceSummary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628496986537c41af905db5-75613029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526286761cfbec6e950267b4b23f1dc6e7a8369e' => 
    array (
      0 => 'webs/smarty/temp/ServiceCategory/ServiceSummary.tpl',
      1 => 1400628434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628496986537c41af905db5-75613029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_537c41afb806a2_33711349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c41afb806a2_33711349')) {function content_537c41afb806a2_33711349($_smarty_tpl) {?>
<script type="text/javascript">
$(function() {
    var mapWidth  = $('body').width();
    var mapHeight = $(window).height();
    var frmObj    = $('#' + selectedMenu + 'Frame');
    
    var framePos  = 0;
    if (!isEmpty(frmObj) ) {
    	framePos  = frmObj.position();
	    
	    mapHeight = mapHeight - Math.round(framePos.top);
	    
	    frmObj.css('height', mapHeight)
	          .css('overflow-y','scroll');
    }
    
});
    
</script>


<div id='hiddenUnselectedAction'></div>
<div id='ServiceCategoryFrame'>
<div id='ServiceCategory'>
<div id='pickupDeliveryTopic' >
<div id='pickupDeliveryTitle' class ='titleOfTopic'>Pick up and Delivery</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/pickupDelivery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Pick Up and Delivery service"), 0);?>

</div>
<div id='alterationTopic' >
<div id='alterationTitle' class ='titleOfTopic'>Alteration</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/alteration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Alteration service"), 0);?>

</div>
<div id='areaRugTopic' >
<div id='areaRugTitle' class ='titleOfTopic'>Area Rug</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/areaRug.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Area Rug service"), 0);?>

</div>
<div id='beddingTopic' >
<div id='beddingTitle' class ='titleOfTopic'>Bedding</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/bedding.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Bedding service"), 0);?>

</div>
<div id='drapesTopic' >
<div id='drapesTitle' class ='titleOfTopic'>Drapes</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/drapes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Drapes service"), 0);?>

</div>
<div id='weddingGownsTopic' >
<div id='weddingGownsTitle' class ='titleOfTopic'>Wedding Gowns</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/weddingGowns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Wedding Gowns service"), 0);?>

</div>
<div id='onedayServiceTopic' >
<div id='onedayServiceTitle' class ='titleOfTopic'>One day Service</div>
<?php echo $_smarty_tpl->getSubTemplate ("webs/smarty/temp/ServiceCategory/onedayService.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"One day Service service"), 0);?>

</div>
</div>
</div>
<?php }} ?>