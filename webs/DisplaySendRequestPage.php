<?php
class DisplaySendRequestPage extends ShowWebsParentPage {
	// define action key list
	
	
	protected $actionList = null;
	
	function __construct( $parames ) {
		
		$this->leftSiderRows = 20;
		
		parent::__construct($parames);

		$this->addJavascripts('webs/javascript/checkFormSubmit.js');
		$this->actionList = $this->menuConfig->getActionList($this->centerMenuKey);
		
		$this->setFormHtml('<form method="POST" id="'.$this->postFormID.'" action="index.php" onsubmit="return checkOrderData();" >');
	}
	
	public function displayNavigate() {
	
		$actionName ='<font size=\'4\' color=\'OrangeRed\'>'.
				      $this->menuConfig->getCenterMenuName($this->centerMenuKey).' for <font color=\'Darkbule\'>'.
			          $this->menuConfig->getActionMenuName($this->centerMenuKey, $this->actionKey).'</font>'.
			         '</font>';
		
		$this->smarty->assign('actionName', $actionName);
		
		return $actionName;
	
	}
	
	
	public function displayBody() {
		
		$this->smarty->assign('selectCityHtml', $this->getSelectCityHtml());
		$menucontentsFile = $this->getTempFileForAction($this->actionKey);	//'webs/smarty/temp/sendRequestPage.tpl';
		
		$this->saveAssignMenuContents($menucontentsFile);
	}
	
	public static function getinputFieldsHtml($selAction) {
		$rethtml = '';
		
	}


	protected function getSelectCityHtml($selectedCityIndex=0) {
		
		$selectedCity  = CommonFuns::getPostValue($this->postParams, CommonFuns::SELECTCITYFIELDNAME,$selectedCityIndex);
		
		return CommonFuns::getCitysHtml($selectedCity);
		
	}
	
	public function getSubmitHtml() {
		$rethtml =
		' <div id="forSubmitArea" align="center">
		<input type ="button" name="doSubmit" id ="doSubmit" value ="Submit">
		</div>
		';
		$this->smarty->assign('submitHtml', $rethtml);
	}
	
}