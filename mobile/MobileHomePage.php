<?php

class MobileHomePage extends ParentPage {
	const     AJAXREQUEST = 'ajaxRequest';
	
	protected $centerMenuId = null;
	protected $ajaxRequest  = false;
	
	function __construct($params = null, $deviceDetector) {
		
		$this->menuConfig = new MobileMenuConfig();
		parent::__construct($params,$deviceDetector);

		$this->ajaxRequest = CommonFuns::getPostValue($params, self::AJAXREQUEST,false);
	}
	public function MainAction() {
	
		$display = new DisplayMobileHomePage($this->postParams);
		$display->displayPage();
	}
	
	protected function verifyActionKey($keyOfCMenu) {
	
		if (!array_key_exists(MobileMenuConfig::ACTIONPOSTKEY, $this->postParams)) {
			//$defaultIndex = array_search($keyOfCMenu, array_keys($this->menuConfig->getCenterMenu()));
			$defaultIndex = array_search(MobileMenuConfig::CMENU_ABOUTUS, array_keys($this->menuConfig->getCenterMenu()));
			if ($defaultIndex===false) {
				$defaultIndex = count($this->menuConfig->getCenterMenu())-1;
			}
			//echo "<br/> \n".'keyOfCMenu:'.$keyOfCMenu.' , defaultIndex:'.$defaultIndex."\n <br/>";
				
			$this->postParams[MobileMenuConfig::ACTIONPOSTKEY] = $this->menuConfig->getCenterMenuKeyOrName($defaultIndex);
		}
	
	}
	
}