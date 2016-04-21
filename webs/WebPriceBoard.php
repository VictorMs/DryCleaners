<?php

class WebPriceBoard extends WebHomePage {
	
	function __construct($params = null, $deviceDetector=null) {
		
		parent::__construct($params,$deviceDetector);
		
		$this->centerMenuId = WebMenuConfig::CMENU_SERVICECATEGORY;
	}
		
	public function MainAction() {
		//echo "<br /> before verifyActionKey: \n";
		//print_r ($this->postParams);
		$this->verifyActionKey(WebMenuConfig::CMENU_PRICEBOARD);
		
		//echo "<br /> After verifyActionKey: \n";
		//print_r ($this->postParams);
		$display = new DisplayPriceBoardPage($this->postParams);
		
		$display->displayPage();
	}
		
	
}