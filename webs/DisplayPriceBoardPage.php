<?php
class DisplayPriceBoardPage extends ShowWebsParentPage {
	// define action key list
	
	
	function __construct( $parames ) {
		
		parent::__construct($parames);

	}
	
	public function displayBody() {
		$showall = false;
		
		
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		$priceConfig = new PriceConfig();
		$priceConfig->setNameWidth(400);
		$this->smarty->assign(
						'PriceBoardHtml',
						$priceConfig->getPriceListHtml()
				);
		
		$this->saveAssignMenuContents($menucontentsFile);
		
	}
	
}