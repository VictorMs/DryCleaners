
function mustinput(fieldvalue, fieldName, datatype, maxdigit) {
	
	if ( datatype =='undefined') {
		datatype = "string";
	}
	
	if (isEmpty(fieldvalue)) {
		alert("Please fill " + fieldName + ' field before you submit.');
		return false;
	}
	return true;
	
}

function isEmpty(fieldvalue) {
	
	return  (jQuery.trim(fieldvalue).length ==0 || fieldvalue == null || fieldvalue == 'undefined' ) ;
}

function submitByAjax(callbackfun, params, setDataType) {
	
	var index =0;
	
	if (jQuery.trim(setDataType)=='') {
		setDataType = 'html';
	}
	
	var dataString = '';
	if (jQuery.isArray(params)) {
		for (index =0; index < params.length; index++ ) {
			dataString  += (index == 0 ? '': '&') + params[index][0] + '='+ params[index][1]; 
		}
	} else {
		dataString = jQuery.trim(params);
	}
	$.ajax({
		  type: 'POST',
		  url : 'index.php',
		  data: dataString,
		  dataType : setDataType,
		  cache: false,
		  success: callbackfun,
		  error  : function(jqXHR, textStatus, errorThrown) {
			  
			  enableLoadWaitingImage(false);
			  alert('Jquery Ajax error textStatus:'+textStatus);
		  }
	});	
	
}

function submitByAjaxJson(callbackfun, params) {
	
	var index =0;
	
	var dataString = '';
	if (jQuery.isArray(params)) {
		for (index =0; index < params.length; index++ ) {
			dataString  += (index == 0 ? '?': '&') + params[index][0] + '='+ params[index][1]; 
		}
	} else {
		dataString = jQuery.trim(params);
	}
	//alert ('dataString:' + dataString);
	$.getJSON(('index.php' + dataString),callbackfun)
	     .error(function( jqXHR, textStatus, errorThrown) {
			  enableLoadWaitingImage(false);
			  alert('Jquery Ajax error textStatus:'+textStatus);
		  }
	);
}

function initLoadWaitingImage() {
	
	if (! isEmpty($('#LoadWaitingImage').attr("id"))) {
		var imgheigth    = Math.round(($('body').height() -$('#LoadWaitingImage').height())/2);
		var imgwidth     = Math.round(($('body').width() - $('#LoadWaitingImage').width())/2);
		var bodyPosition = $('body').position;
		
		var leftPos = bodyPosition.left + imgwidth;
		var topPos  = bodyPosition.top  + imgheigth
		
		$('#LoadWaitingImage').css("display","none")
							  .css("top", (topPos + "px"))
		  					  .css("left", (leftPos + "px"));
	}
}

function enableLoadWaitingImage(enableImage) {
	
	if (! isEmpty($('#LoadWaitingImage').attr("id"))) {
		
		if (enableImage == true) {
			initLoadWaitingImage();
			$('#LoadWaitingImage').css("display","block");
		} else {
			$('#LoadWaitingImage').css("display","none");
			
		}
	}
}

