<?php
class DisplayPickUpRequestPage extends DisplaySendRequestPage {
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
		
		$this->smarty->assign('inputOrderButton', $this->getInputOrderHtml());
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
	
	protected function getInputOrderHtml() {
		$retHtml ='<div id="InputOrderAreaId"><img src="webs/images/orderflash.gif" /><div id="inputOrderButton">Input Your Order</div></div>';
		return $retHtml;
	}
}