<?php
class DisplayAboutUsPage extends ShowWebsParentPage {
	// define action key list
	
	
	function __construct( $parames ) {
		
		parent::__construct($parames);
		
		//$this->addJavascripts('webs/javascript/jquery.anchor.js');

	}
	
	public function displayBody() {
		$showall = false;
		
		
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		
		$this->saveAssignMenuContents($menucontentsFile);
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see ShowWebsParentPage::displayNavigate()
	 */
	public function displayNavigate() {
		
		
		$this->smarty->assign('actionName', '');
		
	}
}