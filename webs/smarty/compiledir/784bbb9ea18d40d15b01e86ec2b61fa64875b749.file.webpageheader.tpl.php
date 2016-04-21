<?php /* Smarty version Smarty-3.1.8, created on 2014-05-20 20:29:43
         compiled from "/hermes/bosoraweb054/b823/ipg.eaglesquaredrycleane/webs/smarty/temp/webpageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:343963010537bf37736bb40-46517900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '784bbb9ea18d40d15b01e86ec2b61fa64875b749' => 
    array (
      0 => '/hermes/bosoraweb054/b823/ipg.eaglesquaredrycleane/webs/smarty/temp/webpageheader.tpl',
      1 => 1400628388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343963010537bf37736bb40-46517900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'sheetFiles' => 0,
    'sheetFile' => 0,
    'javascriptfiles' => 0,
    'jfiles' => 0,
    'controller' => 0,
    'CenterMenuFieldName' => 0,
    'EventFieldName' => 0,
    'ajaxRequestName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_537bf3777a8394_82818010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537bf3777a8394_82818010')) {function content_537bf3777a8394_82818010($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<META name="robots" content="index,follow">
<META name="keywords" content="dry,cleaners, dry cleaning,service,green,coquitlam,tri-city,port moddy,drycleanrs">
<META name="description" content="dry cleanrs,dry cleaning">
<?php if ($_smarty_tpl->tpl_vars['pageTitle']->value!=''){?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['sheetFiles']->value)){?> 
<?php  $_smarty_tpl->tpl_vars['sheetFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sheetFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sheetFiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sheetFile']->key => $_smarty_tpl->tpl_vars['sheetFile']->value){
$_smarty_tpl->tpl_vars['sheetFile']->_loop = true;
?>
 <link href="<?php echo $_smarty_tpl->tpl_vars['sheetFile']->value;?>
" type="text/css"  rel="stylesheet">
<?php } ?>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['javascriptfiles']->value)){?> 
<?php  $_smarty_tpl->tpl_vars['jfiles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jfiles']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascriptfiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jfiles']->key => $_smarty_tpl->tpl_vars['jfiles']->value){
$_smarty_tpl->tpl_vars['jfiles']->_loop = true;
?>
 <script src="<?php echo $_smarty_tpl->tpl_vars['jfiles']->value;?>
" type="text/javascript"></script>
<?php } ?>
<?php }?>

<script type="text/javascript">
 var selectedMenu   = "<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
";
 var ControllerName = "<?php echo $_smarty_tpl->tpl_vars['CenterMenuFieldName']->value;?>
";
 var EventName      = "<?php echo $_smarty_tpl->tpl_vars['EventFieldName']->value;?>
";
 var ajaxPostName   = "<?php echo $_smarty_tpl->tpl_vars['ajaxRequestName']->value;?>
";
 var selectedAction = null;
 var previousAction = null;
 

$(function() {
	
	$('#centermenuTable td').click(function(){
		var selId = jQuery.trim($(this).attr('id'));
		var curId = jQuery.trim($('#' + EventName).val());

		if (selId != curId && selId != '') {
			$('#'+selectedMenu).val(selId);
			
			window.location.href=('index.php?'+ ControllerName +'='+selId);
		}
		
	});

	$('#leftsideridtab td').click(function(){
		var selId = jQuery.trim($(this).attr('id'));
		var curId = jQuery.trim($('#'+ EventName).val());
		var doSubmit = false;
		
		//alert('selId:'+selId+' curId:'+curId +' EventName:'+EventName);
		if ($("#" + EventName).length == 0) {
			$('<input type="hidden" id ="'+EventName+'" name ="'+EventName+'">').appendTo('#centermenuid');
		}
		
		if (isEmpty($('#hiddenUnselectedAction').attr('id'))) {
			if (curId.length >0 && selId.length >0) {
				previousAction = curId;
				selectedAction = selId;
				
				$('#' + EventName).val(selId);
				
				var params = new Array(new Array(EventName,selId),
						               new Array(ControllerName,selectedMenu),
						               new Array(ajaxPostName, '1')
						          );
				
			    enableLoadWaitingImage(true);
				
				submitByAjax(showPageContents,params);
			}
		} else {
			var selFrm = $('#' + selectedMenu +'Frame');
			var curObj = $('#' + curId +'Topic');//'Title');
			var selObj = $('#' + selId +'Topic');//'Title');
			//alert('test curId' + selectedMenu +' selId:'+selId);
			if ((!isEmpty(selFrm.attr('id'))) && ( !isEmpty(selObj.attr('id'))) ) {
				//var destination = Math.round(curObj.offset().top);
				var destination = Math.round(selObj.offset().top -curObj.offset().top);
				//alert('destination:' + destination + ' Frame:'+ selFrm.offset().top);
				selFrm.animate({ scrollTop: destination}, 'slow'); 
				if (! isEmpty(curId)) {
					$('#'+curId).css('color',"white");
					$('#'+selId).css('color',"red");
				}
			}
		}
	});
	
	// submit
	$('#doSubmit').click(function(){
		
		$('#websubmitfrm').submit();
		
	});
	
	if (! isEmpty($('#pricelistpopupwind').attr('id'))) {
		$('#pricelistpopupwind').dialog({ 
			title:"Order Amount Evaluator",
			autoOpen: false,
			modal: true,
			maxHeight:600,
			maxWidth:400,
			height: 550,
			width:400,
			position: ['right','top'],
			buttons: {
				"Clear & Reinput": function() { 
					clearOrderListAndTotalAmount();
			 	}, 
				"Save Order": function() { 
							$('#orderedItemList').html(getOrderListAndTotalAmount(true));
							$(this).dialog("close"); 
					 	} 
				}
		});
		
		var pos = $('#InputOrderAreaId img').position;
	    var width = $('#InputOrderAreaId #inputOrderButton').outerWidth() + 10;
	    var heigth = $('#InputOrderAreaId #inputOrderButton').outerHeight() +5;
	    var imgHeigth = $('#InputOrderAreaId img').outerHeight();
	    
	    //heigth = Math.round(heigth/2);  

	    $('#InputOrderAreaId #inputOrderButton').css({
	        position: "absolute",
	        top: (pos.top ) + "px",
	        left: (pos.left + width) + "px"
		}).show();
	}
	
	$('#inputOrderButton').click(function(){
		
		enableLoadWaitingImage(true);
		$('#pricelistpopupwind').dialog( "open" );
		$('#showtotalamount').css("display","block");
		enableLoadWaitingImage(false);
		clearOrderListAndTotalAmount();
		
	});
	
	$('#pricelistpopupwind input[name="inputPicecsField"]').change(function() {
		var selectedId = $(this).attr('id');
		var ItemPieces = jQuery.trim($(this).val());
		var ItemPrice  = jQuery.trim($('#pricelistpopupwind input[type="hidden"][name="' + selectedId+'"]').attr('value'));
		var ItemAmount = '';
		var amountfieldId ;
		
		if (selectedId.length > 2) {
			if (ItemPrice !='' && ItemPieces != '') {
				ItemAmount =''+ Math.round(parseFloat(ItemPieces) * parseFloat(ItemPrice) *100.0)/100.0 ;
			}
			amountfieldId = 'amountfieldname' + selectedId.substr(selectedId.length - 2) ;
			$('#pricelistpopupwind #' + amountfieldId).text(ItemAmount);
			
			$('#SummaryOrderAmount').text(getTotalAmount());
		}
	});
	
	$('#pricelistpopupwind').scroll(function(){
	    $("#showtotalamount")
	    .stop()
	    .animate({"marginTop": ($(this).scrollTop()) + "px"}, "slow" );
	});
	
})

function getTotalAmount() {
	var retValue =0;
	var textVar  ='';

	$('#PriceListId tr>td:nth-child(5)').each(function() {
		textVar = jQuery.trim($(this).text());
		if ( textVar.length>0) {
			retValue += parseFloat(textVar);
		}
	});
	if (retValue > 0 ) {
	  textVar = '$'+ Math.round(retValue * 100)/100;
	} else {
		textVar ='';
	}
	return textVar;
}

function clearOrderListAndTotalAmount() {
	var parentObj;
	var childObj;
	if (!isEmpty($('#PriceListId').attr('id'))) {
		//alert('clearOrderListAndTotalAmount!');
		$('#PriceListId tr>td:nth-child(4)').each(function() {
			parentObj = $(this).parent();
			 $(this).children('input[type="text"]').val('');
			parentObj.children('td:nth-child(5)').text('');
		});
		
		$('#SummaryOrderAmount').text('');
	}
}

function getOrderListAndTotalAmount(setbyHtml) {
	var retValue =0;
	var retSum   =0;
	var textVar  ='';
	var retText  ='';
	var parentObj;
	var childObj;
	
	if (jQuery.trim(setbyHtml).length==0) {
		setbyHtml = false;
	}
	var sP = (setbyHtml==true)? "" : "\t";

	$('#PriceListId tr>td:nth-child(5)').each(function() {
		textVar = jQuery.trim($(this).text());
		if ( textVar.length>0) {
			
			retText += (setbyHtml==true)? "<tr>" : "";
			retValue = parseFloat(textVar);
			if (retValue > 0) {
				retSum += retValue;
				parentObj = $(this).parent();
				retText += convertFieldValue(parentObj.children('td:nth-child(1)').text(), setbyHtml);
				retText += convertFieldValue(parentObj.children('td:nth-child(2)').text(), setbyHtml,sP);
				retText += convertFieldValue(parentObj.children('td:nth-child(3)').text(), setbyHtml,sP);
				childObj = parentObj.children('td:nth-child(4)');
				retText += convertFieldValue(childObj.children('input[type="text"]').val(), setbyHtml,sP);
				retText +=  convertFieldValue(textVar, setbyHtml,sP);
			}
			retText += (setbyHtml==true)? "</tr>" : "\n";
		}
	});
	
	//textVar = $('#SummaryOrderAmount').text();

	if (retSum > 0 ) {
		textVar = '$ '+ Math.round(retSum * 100)/100;
		if (setbyHtml) {
			retText = '<div style="font-size:14px;font-weight:bold;">Your Order List:</div>' + 
			          '<table><tr><th>Garment</th><th>Price</th><th>Unit</th><th>Pieces</th><th>Amount</th></tr>' + retText;
			retText += '<tr><td>Total:</td><td colspan="4">' + textVar + '</td></tr>';
			retText += '</table>'
		}  else {
			retText += 'Total :' + textVar + "\n";
		}
	} else {
		retText ='';
	}
	//alert('retText:' + retText);
	return retText;
}

function showPageContents(Data, textStatus, jqXHR) {
	if (previousAction !=null && selectedAction !=null && Data.length>20) {
		$('#BodyContens').html(Data);
		$('#'+previousAction).css('color',"white");
		$('#'+selectedAction).css('color',"red");

		var cMenuid = $('#controller').val();
		
		var cMenuName = $('#'+ cMenuid).text();
		
		var actionName = $('#'+ selectedAction).text();
		
		varHtml = '<font size="4" color="OrangeRed">' + cMenuName+ ' for <font color="Darkbule">' + actionName +'</font></font>';
		$('#navActionName').html(varHtml);
		
		enableLoadWaitingImage(false);
	}
}

function convertFieldValue(inFieldValue,outTD, separat) {
	var retStr = jQuery.trim(separat) + jQuery.trim(inFieldValue);
	if (outTD == true) {
		retStr = '<td>' + retStr + '</td>';
	}
	return retStr;
}


</script>
</head>
<body>
<?php }} ?>