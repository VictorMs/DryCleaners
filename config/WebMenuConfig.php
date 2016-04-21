<?php

class WebMenuConfig {
	
	const      ACTIONPOSTKEY        ='action';
	const      CONTROLLERPOSTKEY    ='controller';
	
	// menu key(id) list
	const    CMENU_SENDREQUEST      = 'SendRequest';
	const    CMENU_CONFIRMREQUEST   = 'PrintCoupons';
	const    CMENU_SERVICECATEGORY  = 'ServiceCategory';
	const    CMENU_PRICEBOARD       = 'PriceBoard';
	const    CMENU_ABOUTUS          = 'AboutUs';
	
	// senter (main) menu list
	protected $CenterMenuList  = array (
			self::CMENU_SENDREQUEST     => 'Send Request',
			self::CMENU_SERVICECATEGORY => 'Service Category',
			self::CMENU_PRICEBOARD      => 'Price Board',
			self::CMENU_CONFIRMREQUEST  => 'Print Coupons',
			self::CMENU_ABOUTUS         => 'About Us',
	);
	
	// lift side menu list
	protected $MenuActionList  = array (
			self::CMENU_SENDREQUEST     => array(
												'pickupRequest'  =>'Pickup & Delivery',
												//'doPickupRequest'  =>'Pickup & Delivery',
												// 'delivery'       =>'Delivery',
												 'contract'       =>'DropOff Services',
												 'feedback'       =>'Feed Back',
										),
	
			self::CMENU_CONFIRMREQUEST  => array('CheckOrder'     =>'Check done?',
												 'delivery'       =>'Delivery',
												 'contract'       =>'Contract',
												 'feedback'       =>'Feed Back',
										),
	
			self::CMENU_SERVICECATEGORY => array('pickupDelivery' => 'Pickup & Delivery',
											 	 'alteration'     => 'Alteration',
												 'areaRug'        => 'Area Rug',
												 'bedding'        => 'Bedding',
												 'drapes'         => 'Drapes',
												 'weddingGowns'   => 'Wedding Gowns',
												 'onedayService'  => 'One Day Service',
										),
	
			self::CMENU_PRICEBOARD      => array('priceBoard'     => 'Price Board',
												 'Comment'        => 'Comment',
										),
	
			self::CMENU_ABOUTUS         => array('aboutUs'        => 'About Us',
												 'location'       => 'Location',
												 'openHours'      => 'Open Hours',
												 'contactUs'      => 'Contact Us',
										),
	);
	
	
	function __construct() {
		
		$this->generateEncryptedActionKey();
		
	}
	
	public function getCenterMenuKeyOrName($selectedCMENU) {
		
		return CommonFuns::getKeyName($this->CenterMenuList,$selectedCMENU);		
	}
	
	public function getActionKeyViaCMenu($selectedCMENU, $actionKey) {
	
		$actionList = array();
		
		if (!array_key_exists($selectedCMENU, $this->MenuActionList)) {
			
			$selectedCMENU = $this->getCenterMenuKeyOrName($selectedCMENU);
			
		}
		$actionList = $this->MenuActionList[$selectedCMENU];
		
		return CommonFuns::getKeyName($actionList,$actionKey);
	}
	
	/**
	 *
	 */
	protected function generateEncryptedActionKey() {
		foreach($this->CenterMenuList as $actionKey => $ActionName) {
			$this->encryptedActionKey[$actionKey] = md5($actionKey);
		}
	
	}
	
	/**
	 *
	 */
	public function getEncryptedActionKey($inActionKey) {
	
		if (array_key_exists($inActionKey, $this->encryptedActionKey)) {
			return $this->encryptedActionKey[$inActionKey] ;
		}
		return null;
	}
	
	/**
	 *
	 * @param unknown_type $inEncryptedActionKey
	 * @return Ambigous <mixed, null/string, unknown_type, number, NULL>
	 */
	public function getActionKey($inEncryptedActionKey) {
	
		$retKey = array_search($inEncryptedActionKey, $this->encryptedActionKey);
		if ($retKey === false) {
			$retKey = CommonFuns::getKeyName($this->CenterMenuList);
		}
	
		return $retKey;
	}
	
	
	public function getCenterMenu() {
		
		return $this->CenterMenuList;
	}
	
	public function getCenterMenuName($centerMenuKey) {
		if (array_key_exists($centerMenuKey, $this->CenterMenuList)) {
			return $this->CenterMenuList[$centerMenuKey];			
		}
		return $this->getCenterMenuKeyOrName(0);
	}
	
	public function getActionMenuName($centerMenuKey, $actionKey) {
		
		$retName ='';
		if (array_key_exists($centerMenuKey, $this->MenuActionList)) {
			
			$actionList =  $this->MenuActionList[$centerMenuKey];
			
			if (is_array($actionList)) {
				if (array_key_exists($actionKey, $actionList)) {
					return $actionList[$actionKey];
				}
			} else {
				$retName = $actionList;
			}
		}
		return $retName;
	}
	
	public function getActionList($centerMenuKey) {
		
		if (array_key_exists($centerMenuKey, $this->MenuActionList)) {
		
			return $this->MenuActionList[$centerMenuKey];
		}
		
		return array();
	}
}