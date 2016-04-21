<?php


class DisplayMobileHomePage extends ShowMobileParentPage {
	
	
	function __construct(array $parames) {
		parent::__construct();
		
		$this->postParams = $parames;
	}
	
	public function displayBody() {
		$showall = false;
	
	
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
	
		$this->saveAssignMenuContents($menucontentsFile);
	
	}
	
	public function displayNavigate() {
	
	
		$this->smarty->assign('actionName', '');
	
	}
	
}