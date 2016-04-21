<div id='BodyContens' >
    <div id='inputFieldsArea'>
		<div id='topicTitleId' style='width:100%;background: url(webs/images/background_title_green.png) no-repeat; background-size:100% 100%;background-position:top center;' >
			<table id='topicTitleTableId' style='width:100%;vertical-align:middle;padding:10px;' >
			<tr><td align='left'><font size='3'><b>Free Pick Up and delivery will save your time and gas !</b></font></td></tr>
			<tr><td align='left' rowspan='4'>&nbsp;&nbsp; When your orders amount of before tax over minimum amount 
			 (Tri-City area:$20, Bunaby/New Westminster/Pitt Meadows:$30, Vancouver/Surrey/Maple Right:$40). 
			  Orders under the minimum are subject to a fee (Tri-City area:$5.00, otherwise:$10.00). For delivery please pay cash only.
			  <font style="color:red;">Please click Input Your Order button</font>to fill/evaluate your order.
			</td></tr>
			<tr><td align='left'>&nbsp;</td></tr>
			<tr><td align='left'>&nbsp;</td></tr>
			<tr><td align='left'>&nbsp;</td></tr>
			</table>
		</div>
		<div id = 'inputAreaId' style='padding-top:20px;' >
			<input type="hidden" name="doSubmit" value="1">
			<input type="hidden" name="pickuporder" id="ordersid" value="">
			<table id = 'inputAreaTableId'>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;<span id ="firstnamet">First Name</span>:</td><td><input type='text' size='24' name='firstname'></td><td align='right'><font color='red'>*</font>&nbsp;&nbsp;<span id ="lasttnamet">List Name</span>:</td><td><input type='text' size='24' name='lastname'/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;<span id ="PhoneNumber1t">Contact Phone</span>:</td><td ><input type='text' size='18' name='PhoneNumber1'><td align='right'><span >Second Phone</span>:</td><td ><input type='text' size='18' name='PhoneNumber2'/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;<span id ="PickUpAddresst">Pickup Address</span>:</td><td><input type='text' size='40' name='PickUpAddress'></td><td align='right'>Unit/Suite/Apt:</td><td><input type='text' size='8' name='postCode'/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;City:</td><td>{$selectCityHtml|default:''}</td><td align='right'>postcode:</td><td><input type='text' size='8' name='postcode'></td></tr>
				<tr><td align='right'><span>Contact email</span>:</td><td ><input type='text' size='40' name='emailAddress'><td colspan="2" align='left'>British Columbia of Canada</td></tr>
				<tr><td align='right' valign='top'>Comment:</td><td colspan='3'><textarea cols='60' rows='5' name='comment'></textarea></td></tr>
			</table>
		</div>
	</div>
</div>
{$submitHtml|default:''}
<div id='orderedItemList' class='pricelist'>
</div>
