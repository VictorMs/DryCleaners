{literal}
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
{/literal}

<div id='hiddenUnselectedAction'></div>
<div id='ServiceCategoryFrame'>
<div id='ServiceCategory'>
<div id='pickupDeliveryTopic' >
<div id='pickupDeliveryTitle' class ='titleOfTopic'>Pick up and Delivery</div>
{include file="webs/smarty/temp/ServiceCategory/pickupDelivery.tpl" title="Pick Up and Delivery service"}
</div>
<div id='alterationTopic' >
<div id='alterationTitle' class ='titleOfTopic'>Alteration</div>
{include file="webs/smarty/temp/ServiceCategory/alteration.tpl" title="Alteration service"}
</div>
<div id='areaRugTopic' >
<div id='areaRugTitle' class ='titleOfTopic'>Area Rug</div>
{include file="webs/smarty/temp/ServiceCategory/areaRug.tpl" title="Area Rug service"}
</div>
<div id='beddingTopic' >
<div id='beddingTitle' class ='titleOfTopic'>Bedding</div>
{include file="webs/smarty/temp/ServiceCategory/bedding.tpl" title="Bedding service"}
</div>
<div id='drapesTopic' >
<div id='drapesTitle' class ='titleOfTopic'>Drapes</div>
{include file="webs/smarty/temp/ServiceCategory/drapes.tpl" title="Drapes service"}
</div>
<div id='weddingGownsTopic' >
<div id='weddingGownsTitle' class ='titleOfTopic'>Wedding Gowns</div>
{include file="webs/smarty/temp/ServiceCategory/weddingGowns.tpl" title="Wedding Gowns service"}
</div>
<div id='onedayServiceTopic' >
<div id='onedayServiceTitle' class ='titleOfTopic'>One day Service</div>
{include file="webs/smarty/temp/ServiceCategory/onedayService.tpl" title="One day Service service"}
</div>
</div>
</div>
