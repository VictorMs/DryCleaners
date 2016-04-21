<?php

class WebConfirmRequest extends WebHomePage {
	
	function __construct($params = null, $deviceDetector=null) {
		
		parent::__construct($params,$deviceDetector);
		
		$this->centerMenuId = WebMenuConfig::CMENU_SERVICECATEGORY;
	}
		
	public function MainAction() {
		
		if (!array_key_exists(WebMenuConfig::ACTIONPOSTKEY, $this->postParams)) {
			$this->postParams[WebMenuConfig::ACTIONPOSTKEY] = $this->menuConfig->getCenterMenuKeyOrName(1);
		}
		
		$display = new DisplaySendRequestPage($this->postParams);
		
		$display->displayPage();
	}
		
	public function confirmRequestAction() {
	
		$display = new DisplayWebHomePage($this->postParams);
		$display->displayPage();
		//$display->d
	}
	
}