<?php

class ParentPage {
	
	const      MOBILE_DEVICE = 1;
	const      PC_DEVICE     = 0;
	
	protected  $deviceType      = self::PC_DEVICE;
	
	protected  $postParams      = array();
	
	protected  $postType        = null;
	
	protected  $clientIP   	    = null;
	
	protected  $deviceDetector  = null;
	
	function __construct($params=null, $deviceDetector=null) {
		
		if (is_null($params)) {
			$this->postParams = CommonFuns::getpostparameters();
		} else {
			$this->postParams = $params;
		}
		
		$this->clientIP = CommonFuns::getClientIP();
		
		if (is_null($deviceDetector)) {
			$this->deviceDetector = new MobileDetect();
		} else {
			$this->deviceDetector = $deviceDetector;
		}
		
		if ($this->deviceDetector->isMobile()) {
		    $this->deviceType = self::MOBILE_DEVICE;
		}
	}
	
}