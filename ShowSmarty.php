<?php

class ShowSmarty {
	
	const SUBMITFORMID        = 'submitfrm';
	
	
	/**
	 * 
	 * @var Smarty
	 */
	protected $smarty         = null;
	
	protected $rootDir        = null;
	protected $javascripts    = null;
	protected $stylesheets    = null;
	protected $htmlheader     = null;
	protected $postParams     = null;
	protected $pageTitle      = 'Eagle Square Dry Cleaners';
	
	public    $exportFormTag  = true;
	
	protected $postFormID     = null;
	
	protected $formHtml = null;
	
	function __construct($inFiles=null) {
		
		$this->smarty  = new Smarty();
		
		$this->rootDir = CommonFuns::getDocDir();
		
	}
	
	public function displayPage() {
		
		$this->DisplayHtmlMetaHeader();
		$this->displayPageHead();
		
		$HostUrl = CommonFuns::getServerURL();
		//echo '$HostUrl:'.$HostUrl.' DIR_SEPARATOR:'.CommonFuns::DIR_SEPARATOR;
		
		$formhtml = ($this->exportFormTag ? (is_null($this->formHtml)? ('<form method="POST" id="'.$this->postFormID.'" action="index.php">'):$this->formHtml) : '');
		$this->smarty->assign('submitfrm',$formhtml);
		$this->smarty->assign('submitfrmending',($this->exportFormTag? '</form>':''));
		$this->displayCenterMenu();
		$this->displayNavigate();
		$this->displayBodyFrame();
		$this->displayPopupWind();
		$this->displayFoot();
	}
	
	public function setFormHtml($formHtml) {
		$this->formHtml = $formHtml;
	}
	
	public function displayPageHead() {
		
	}
	
	public function displayBodyFrame() {
		$this->displayTitle();
		$this->displayLiftSider();
		$this->displayBody();
		$this->displayRightSider();
		
	}
	
	public function displayNavigate() {
	
	}
	
	public function displayBody() {
	
	}
	
	public function displayLiftSider() {
	
	}
	
	
	public function displayRightSider() {
	
	}
	
	public function displayTitle() {
	
	}
	
	
	public function displayFoot() {
	
	}
	
	public function DisplayHtmlMetaHeader() {
		
		
	}
	
	public function displayCenterMenu() {
		
	}
	
	public function displayPopupWind() {
		
	}
}