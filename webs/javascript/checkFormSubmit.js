
function checkOrderData() {
	var fieldname ;
	var fieldval = "";
	var errmsg ="";
	var errNo =0;

	//alert("start checkOrderData !");
	$("#inputAreaId input[type=text]").each(function(i) {
		fieldnameid = $(this).attr("name") + "t";
		fieldname = $.trim($('#'+fieldnameid).text());
		fieldval = $.trim($(this).val());
		//alert("checkOrderData fieldnameid:" + fieldnameid +", fieldname:" + fieldname + ", fieldval:" + fieldval);
		if (fieldval =="" && fieldname !="") {
			errNo++;
			errmsg = errmsg + " Please fill the " + fieldname + ", \n";
		}
	});
	
	if ( errNo>0) {
		errmsg = errmsg + "\n Thank you ! \n";
		alert (errmsg);
		return false;
	} else {
		//$("#orderlisthtmlid").val($.trim($("#orderedItemList").html()));
		$("#ordersid").val($.trim($("#orderedItemList").html()));
		return true;
	}
}