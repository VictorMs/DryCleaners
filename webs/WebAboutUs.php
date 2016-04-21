<?php

class WebAboutUs extends WebHomePage {
	
	function __construct($params = null, $deviceDetector=null) {
		
		parent::__construct($params,$deviceDetector);
		
		$this->centerMenuId = WebMenuConfig::CMENU_SERVICECATEGORY;
	}
		
	public function MainAction() {
		
		$this->verifyActionKey(WebMenuConfig::CMENU_ABOUTUS);
				
		$display = new DisplayAboutUsPage($this->postParams);
		
		$display->displayPage();
	}
		
	
}