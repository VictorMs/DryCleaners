<?php
class DisplayContractPage extends DisplaySendRequestPage {
	// define action key list
	
	
	function __construct( $parames ) {
		
		parent::__construct($parames);

	}
	
	public function displayBody() {
		$showall = false;
		
		$selectedCity  = CommonFuns::getPostValue($this->postParams, CommonFuns::SELECTCITYFIELDNAME,0);
		
		$selectCityHtml = CommonFuns::getCitysHtml($selectedCity);
		
		$this->smarty->assign('selectCityHtml', $selectCityHtml);
		
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		
		$this->getSubmitHtml();
		$this->saveAssignMenuContents($menucontentsFile);
	}
	
	public function getAjaxReturnHtml() {
		
		$this->smarty->assign('selectCityHtml', $this->getSelectCityHtml());
		
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		
		return $this->smarty->fetch($menucontentsFile);
	}
	
	
}