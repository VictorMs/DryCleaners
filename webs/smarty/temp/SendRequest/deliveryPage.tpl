<div id='BodyContens' >
    <div id='inputFieldsArea'>
		<div id='topicTitleId' style='width:100%;background: url(webs/images/background_title_blue.png) no-repeat; background-size:100% 100%;background-position:top center;' >
			<table id='topicTitleTableId' style='width:100%;vertical-align:middle;padding:10px;' >
			<tr><td align='left'><font size='3'><b>Free Delivery:</b></font></td></tr>
			<tr><td align='left' rowspan='4'>&nbsp;&nbsp; When your orders amount of before tax over minimum amount 
			 (Tri-City area:$20, Bunaby/New Westminster/Pitt Meadows:$30, Vancouver/Surrey/Maple Right:$40). 
			  Orders under the minimum are subject to a fee (Tri-City area:$5.00, otherwise:$10.00). For delivery pay cash only.
			  <a href='#' id='pricelistid' style="color:red;">evaluate your order</a>
			</td></tr>
			<tr><td align='left'>&nbsp;</td></tr>
			<tr><td align='left'>&nbsp;</td></tr>
			<tr><td align='left'>&nbsp;</td></tr>
			</table>
		</div>
		<div id = 'inputAreaId' style='padding-top:20px;' >
			<table id = 'inputAreaTableId'>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;First Name:</td><td><input type='text' size='24' name='firstname'></td><td align='right'><font color='red'>*</font>&nbsp;&nbsp;List Name:</td><td><input type='text' size='24' name='firstname'/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;Contact Phone:</td><td ><input type='text' size='18' name='PhoneNumber1'><td align='right'>Second Phone:</td><td ><input type='text' size='18' name='PhoneNumber2'/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;Pickup Address:</td><td><input type='text' size='40' name='PickUpAddress'></td><td align='right'>Unit/Suite/Apt:</td><td><input type='text' size='8' name='postCode'/></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;City:</td><td>{$selectCityHtml}</td><td align='right'>Postcode:</td><td><input type='text' size='8' name='postcode'></td></tr>
				<tr><td align='right'><font color='red'>*</font>&nbsp;&nbsp;Contact email:</td><td ><input type='text' size='40' name='emailAddress'><td colspan="2" align='left'>British Columbia of Canada</td></tr>
				<tr><td align='right' valign='top'>Comment:</td><td colspan='3'><textarea cols='60' rows='5' name='comment'></textarea></td></tr>
			</table>
		</div>
	</div>
</div>
{$submitHtml|default:''}
