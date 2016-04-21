<?php
class DisplayServiceCategoryPage extends ShowWebsParentPage {
	// define action key list
	
	
	function __construct( $parames ) {
		
		parent::__construct($parames);

	}
	
	public function displayBody() {
		$showall = false;
		
		
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		
		$fdir = rtrim(dirname($menucontentsFile),'/ \\').CommonFuns::DIR_SEPARATOR;
		
		$this->smarty->assign('ServiceCategoryFolder', $fdir);
		
		$this->saveAssignMenuContents($menucontentsFile);
		
	}
	
	protected function getTempFileForAction($inAction) {
		$menucontentsFile = '';
	
		$menucontentsFile = 'webs/smarty/temp/'.$this->centerMenuKey.CommonFuns::DIR_SEPARATOR.'ServiceSummary.tpl';
		
		return $menucontentsFile;
	}
	
	public function displayNavigate() {
	
		/*
		$actionName ='<font size=\'4\' color=\'OrangeRed\'>'.
				$this->menuConfig->getCenterMenuName($this->centerMenuKey).' : <font color=\'Darkbule\'>'.
				$this->menuConfig->getActionMenuName($this->centerMenuKey, $this->actionKey).'</font>'.
				'</font>';
		*/
		
		$actionName ='<font size=\'4\' color=\'OrangeRed\'>'.
				$this->menuConfig->getCenterMenuName($this->centerMenuKey).
				'</font>';
		
		
		$this->smarty->assign('actionName', $actionName);
	
		return $actionName;
	
	}
	
	public function getAjaxReturnHtml() {
		
		$this->smarty->assign('selectCityHtml', $this->getSelectCityHtml());
		
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		return $this->smarty->fetch($menucontentsFile);
	}
	
	public function displayPopupWind($evlFlag = true) {
		$priceConfig = new PriceConfig();
		
		$this->smarty->assign(
				'PriceListHtml', 
				($evlFlag ? $priceConfig->getPriceListWithEvaHtml() : $priceConfig->getPriceListHtml())
			);
		
		$popupWindFile = 'webs/smarty/temp/PriceListWindow.tpl';
		
		$this->smarty->display($popupWindFile);
		
	}
	
}