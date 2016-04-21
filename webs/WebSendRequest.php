<?php

class WebSendRequest extends WebHomePage {
	
	const CustFirstName = 'firstname';
	const CustLastName  = 'lastname';
	const CustPhone1    = 'PhoneNumber1';
	const CustPhone2    = 'PhoneNumber2';
	const PickUpAddress = 'PickUpAddress';
	const PickUpCity    = 'selectedCity';
	const PickupPostCode      = 'postCode';
	const emailAddress  = 'emailAddress';
	const pickupComment = 'comment';
	const pickupOrders  = 'pickuporder';
	
	function __construct($params = null, $deviceDetector=null) {
		
		parent::__construct($params,$deviceDetector);
		
		$this->centerMenuId = WebMenuConfig::CMENU_SENDREQUEST;
	}
		
	public function pickupRequestAction () {
		
		$display = new DisplayPickUpRequestPage($this->postParams);
		$isSubmit = array_key_exists('doSubmit', $this->postParams) && $this->postParams['doSubmit'];
		$CustFirstName =  CommonFuns::getPostValue($this->postParams,self::CustFirstName);
		$CustPhone1 = CommonFuns::getPostValue($this->postParams,self::CustPhone1);
		if ($isSubmit && !empty($CustPhone1) && strlen($CustPhone1)>6) {
			$esubject = 'esdc from '.$this->postParams[self::CustFirstName].' '.$this->postParams[self::CustPhone1];
			
			$ebody = $this->CreateEmailBody($this->postParams);
			$mailObj = new esdcemail($esubject,$ebody['email']);
			$mailObj->setHtmlHeader();
			$success = $mailObj->sendemail();
			$mailObj->setTextMsg($ebody['textmsg']);
			$mailObj->sendTextMsg();
			$display->assignItem(array('isoksubmit'=>1,'sendemail'=>$success,'submitname'=>'your request has been successfully submitted, our staff will get in touch with you shortly. Thank you,',));

			//$this->success("The submit is successful !",);
		}
		if ($this->ajaxRequest ) {
			echo $display->getAjaxReturnHtml();
		} else {
			$display->displayPage();
		}
		
	}

	public function MainAction() {
		
		if (!array_key_exists(WebMenuConfig::ACTIONPOSTKEY, $this->postParams)) {
		    $this->postParams[WebMenuConfig::ACTIONPOSTKEY] = $this->menuConfig->getCenterMenuKeyOrName(0);
		}
		
		$display = new DisplaySendRequestPage($this->postParams);
		$display->displayPage();
	}
	
	public function doPickupRequestAction() {
		
		$display = new DisplayPickUpRequestPage($this->postParams);
		if ($this->ajaxRequest ) {
			echo $display->getAjaxReturnHtml();
		} else {
			$display->displayPage();
		}
	}
	
	public function deliveryAction () {
	
		$display = new DisplayDeliveryPage($this->postParams);
		if ($this->ajaxRequest ) {
			echo $display->getAjaxReturnHtml();
		} else {
			$display->displayPage();
		}
	}
	
	public function feedbackAction () {
	
		$display = new DisplayFeedbackPage($this->postParams);
		if ($this->ajaxRequest ) {
			echo $display->getAjaxReturnHtml();
		} else {
			$display->displayPage();
		}
	}
	
	public function contractAction () {
	
		$display = new DisplayContractPage($this->postParams);
		if ($this->ajaxRequest ) {
			echo $display->getAjaxReturnHtml();
		} else {
			$display->displayPage();
		}
	}
	protected function CreateEmailBody($params) {
		$textMsg  = 'Request from :'.CommonFuns::getPostValue($params,self::CustFirstName).' '.CommonFuns::getPostValue($params,self::CustLastName)."\n\n";
		$textMsg .= 'Contact Phones '.CommonFuns::getPostValue($params,self::CustPhone1).' , '.CommonFuns::getPostValue($params,self::CustPhone2);
		$textMsg .= 'Comment :'.CommonFuns::getPostValue($params,self::pickupComment);
		
		//.$this->postParams[self::CustFirstName].' '.$this->postParams[self::CustPhone1];
		$returnInofo = '<html><head>Customer Pickup/Dlivery Request</head><body>';
		$returnInofo .='<div><table><tr><td>Request Info</td><td>Content</td></tr>';
		$returnInofo .= '<tr><td>Request from :</td><td>'.CommonFuns::getPostValue($params,self::CustFirstName).' '.CommonFuns::getPostValue($params,self::CustLastName)."</td></tr>";
		$returnInofo .= "<br><br>";
		$returnInofo .= '<tr><td>Pickup Addressest:</td><td>'.CommonFuns::getPostValue($params,self::PickUpAddress).' '.CommonFuns::getPostValue($params,self::PickUpCity).' '.CommonFuns::getPostValue($params,self::PickupPostCode)."</td></tr>";
		$returnInofo .= '<tr><td>Contact Phones :</td><td>'.CommonFuns::getPostValue($params,self::CustPhone1).' , '.CommonFuns::getPostValue($params,self::CustPhone2)."</td></tr>";
		$returnInofo .= '<tr><td>email address :</td><td>'.CommonFuns::getPostValue($params,self::emailAddress)."</td></tr>";
		$returnInofo .= '<tr><td>Comment :</td><td>'.CommonFuns::getPostValue($params,self::pickupComment)."</td></tr>";
		$returnInofo .='</table></div>';
		$orderlist = CommonFuns::getPostValue($params,self::pickupOrders);
		if (!empty($orderlist)) {
			$returnInofo .='<div> <div>Customer Orders</div>';
			$returnInofo .= $orderlist;
			$returnInofo .='</div>';
			$returnInofo .= "<br><br>"."\n\n";
		}
		$returnInofo .= '</body></html>';
		return array ('email'=>$returnInofo, 'textmsg'=>$textMsg);
		
	}
}
