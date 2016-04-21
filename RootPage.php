<?php

class RootPage {
	
	const PARAM_ISMOBILE  = 'isMobile';
	const PARAM_ISTABLET  = 'isTablet';
	const PARAM_AGANTNAME = 'agentName';
	
	protected $rootDir    = null;
	
	
	
	/*@var $deveicDetecter MobileDetecter */
	protected $deveicDetecter  = null;
	
	protected $postParems      = array();
	
	function __construct() {
		
		$this->rootDir         = CommonFuns::getDocDir();
		
		$this->deveicDetecter  = new MobileDetecter();
		
		$this->postParems      = CommonFuns::getpostparameters();
		
		$this->addExtraParameters($this->postParems);
		
	}
	
	/**
	 * 
	 */
	public function dispatcher() {
		
		$menuConfig    = new WebMenuConfig();
		
		$defController = CommonFuns::getKeyName($menuConfig->getCenterMenu());
		
		
		//print_r ($this->postParems);
		$controller = CommonFuns::getPostValue($this->postParems, CommonFuns::CONTROLLERPOSTKEY, $defController, true);
		
		$defAction  = CommonFuns::getKeyName($menuConfig->getActionList($controller));
		
		$action     = CommonFuns::getPostValue($this->postParems, CommonFuns::ACTIONPOSTKEY, $defAction, true);
		/*
		if ($this->deveicDetecter->isMobile()) {
			//$controller = 'Mobile'.$controller;
			$controller = 'MobileHomePage';
		} else {
			$controller = 'Web'.$controller;
		}
		*/
		$controller = 'Web'.$controller;
		
		$defAction = true;
		if (class_exists($controller)) {
			
			$pageController = new $controller($this->postParems,$this->deveicDetecter);
			
			$action = $action.'Action';
			
			
			if (method_exists($pageController, $action)) {
				$defAction = false;
				$pageController->$action();
			} else {
				$pageController->MainAction();
			}
		}
	}
	
	/**
	 * 
	 * @param array  $parameters
	 */
	protected function addExtraParameters(&$parameters) {
		if (empty($parameters)) {
			$parameters = array();
		}
		
		if (! array_key_exists(self::PARAM_ISMOBILE, $parameters)) {
			$parameters[self::PARAM_ISMOBILE] = $this->deveicDetecter->isMobile();
		}
		
		if (! array_key_exists(self::PARAM_ISTABLET, $parameters)) {
			$parameters[self::PARAM_ISTABLET] = $this->deveicDetecter->isTablet();
		}
		
		if (! array_key_exists(self::PARAM_AGANTNAME, $parameters)) {
			$parameters[self::PARAM_AGANTNAME] = $this->deveicDetecter->getUserAgent();
		}
		
	}
	
}
