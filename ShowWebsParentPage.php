<?php

class ShowWebsParentPage extends ShowSmarty {
	
	const     CMENU_SELECTED        = CommonFuns::CONTROLLERPOSTKEY; //'selectedCenterMenu';
	const     CMENU_FIELDNAME       = 'CenterMenuFieldName';
	const     EVENT_FIELDNAME       = 'EventFieldName';
	const     JAXREQUESTNAME        = 'ajaxRequestName';
	
	protected $overallframe         = 'webs/smarty/temp/overallframe.tpl';
	protected $webpageending        = 'webs/smarty/temp/webpageending.tpl';
	
	protected $leftSiderRows        = 0;
	protected $leftSiderWidth       = 200;
	
	protected $centerMenuKey        = null;
	
	protected $actionKey            = null;
	
	protected $displayFlag           = true;

	public    $encryptedActionKey   = array();
	
	

	/**
	 *  @var  WebMenuConfig 
	 */
	protected $menuConfig           = null;
	
	function __construct( $inpostedParams=array()) {
		
		$this->postFormID    = 'web'.self::SUBMITFORMID;
		
		$this->menuConfig    = new WebMenuConfig();
		
		$this->postParams = $inpostedParams ;
		
		$this->centerMenuKey = $this->menuConfig->getCenterMenuKeyOrName(
						CommonFuns::getPostValue($this->postParams, self::CMENU_SELECTED)
				);
		
		$this->actionKey =  $this->menuConfig->getActionKeyViaCMenu(
				        $this->centerMenuKey,
						CommonFuns::getPostValue($this->postParams,CommonFuns::ACTIONPOSTKEY)
				);
		
		parent::__construct();
		
		$this->defaultMetaFiles();
		
		$this->smarty->setConfigDir( $this->rootDir.'webs/smarty/configs/');
		$this->smarty->setCompileDir( $this->rootDir.'webs/smarty/compiledir/');
		$this->smarty->setTemplateDir($this->rootDir.'webs/smarty/temp/');
		
		
	}
	
	protected function defaultMetaFiles () {
		
		$this->javascripts   = array('webs/javascript/jquery-1.7.2.min.js',
		                             'webs/javascript/jquery-ui-1.8.20.custom.min.js',
				                     'javascript/common.js',
								);
		
		$this->stylesheets   = array(
				                     'webs/css/ui-lightness/jquery-ui-1.8.20.custom.css',
				                     'webs/css/frameStyle.css',
							);
		
	}
	
	public function DisplayHtmlMetaHeader() {
		$this->smarty->clearAllAssign();
		
		$this->smarty->assign(self::JAXREQUESTNAME , WebHomePage::AJAXREQUEST);
		$this->smarty->assign(self::CMENU_SELECTED   , $this->centerMenuKey);
		$this->smarty->assign(self::CMENU_FIELDNAME  , self::CMENU_SELECTED);
		
		$this->smarty->assign(CommonFuns::ACTIONPOSTKEY, $this->actionKey);
		$this->smarty->assign(self::EVENT_FIELDNAME    , CommonFuns::ACTIONPOSTKEY);
		
		$this->htmlheader = $this->rootDir.'webs/smarty/temp/webpageheader.tpl';
		
		$this->smarty->assign('sheetFiles',      $this->stylesheets);
		$this->smarty->assign('javascriptfiles', $this->javascripts);
		$this->smarty->assign('pageTitle',       $this->pageTitle) ;
		
		if ($this->displayFlag) {
			$this->smarty->display($this->htmlheader);
		} else {
			return $this->smarty->fetch($this->htmlheader);
		}
		
	}
	
	
	public function displayPageHead() {
		
		$headFile = 'webs/smarty/temp/webpagehead.tpl';
		
		$imgFile = 'webs/images/hero_earth.jpg';
		
		$this->smarty->assign('imageFile',$imgFile);
		
		if ($this->displayFlag) {
			$this->smarty->display($headFile);
		} else {
			return $this->smarty->fetch($headFile);
		}
		
	}
	
	public function displayCenterMenu() {
	
		$CMenuFile = 'webs/smarty/temp/webcentermenu.tpl';
		
		
		$this->smarty->assign('centermenus',$this->menuConfig->getCenterMenu());
		
		//echo "\n <br /> centerMenuKey:".$this->centerMenuKey."\n <br /> actionkey:".$this->actionKey."\n";
		if ($this->displayFlag) {
			$this->smarty->display($CMenuFile);
		} else {
			return $this->smarty->fetch($CMenuFile);
		}
	
	}
	
	public function displayNavigate() {
		
		$actionName = $this->menuConfig->getCenterMenuName($this->centerMenuKey).' : '.
		              $this->menuConfig->getActionMenuName($this->centerMenuKey, $this->actionKey); 
		
		$this->smarty->assign('actionName', $actionName);
		
	}
	
	public function displayBodyFrame() {
		$this->displayLiftSider();
		$this->displayBody();
		$this->displayRightSider();
		
		$bodyFrame = 'webs/smarty/temp/webpagebody.tpl';
		if ($this->displayFlag) {
			$this->smarty->display($bodyFrame);
		} else {
			return $this->smarty->fetch($bodyFrame);
		}
		
	}
	
	public function displayLiftSider() {

		$siderMenu = $this->getSiderHtml($this->menuConfig->getActionList($this->centerMenuKey));
		
		$this->smarty->assign('setrowspan', count($siderMenu));
		
		$this->smarty->assign('leftsider', $siderMenu);
		
	}
	
	public function displayFoot() {
		$this->exportLoadWaitingImage();
		if ($this->displayFlag) {
			$this->smarty->display($this->webpageending);
		} else {
			return $this->smarty->fetch($this->webpageending);
		}
		
	}
	
	public function setLeftSiderWidth($inWidth) {
		$this->leftSiderWidth = $inWidth;
	}
	
	public function setLeftSiderRows($inRows) {
		$this->leftSiderRows = $inRows;
	}
	
	/**
	 * 
	 * @param unknown_type $menuList
	 * @return string
	 */
	public function getSiderHtml($menuList) {
		$retHtml = '';
		
		$buttonList = array(
				'images/greenbutton.png' , 
				'images/lightbluebutton.png',
				'images/lightbrownbutton.png',
				'images/bulebutton.png',
		);
		
		$buttonIndex = 0;
		
		if (is_array($menuList) && count($menuList) > 1) {
			$retHtml = '<table id="leftsideridtab">';
			foreach ($menuList as $actionKey => $actionName) {
				$class = 'class="button'.$buttonIndex.'"';
				if($actionKey == $this->actionKey) {
					$retHtml .= '<tr><td id="'.$actionKey.'" '.$class.' style="color:red;">'.$actionName.'</td></tr>';
				} else {
					$retHtml .= '<tr><td id="'.$actionKey.'" '.$class.' >'.$actionName.'</td></tr>';
				}
				$buttonIndex++;
				$buttonIndex = ($buttonIndex >= count($buttonList)) ? 0: $buttonIndex ; 
			}
			$retHtml .= '</table>';
		}
		
		return $retHtml;
		
	}

	protected function getTempFileForAction($inAction) {
		$menucontentsFile = '';
	
		$actionList = $this->menuConfig->getActionList($this->centerMenuKey);
		
		if (array_key_exists($inAction, $actionList)) {
			$menucontentsFile = 'webs/smarty/temp/'.$this->centerMenuKey.CommonFuns::DIR_SEPARATOR.$inAction.'Page.tpl';
		}
		return $menucontentsFile;
	}
	
	protected function saveAssignMenuContents($menucontentsFile) {
		
		if (file_exists(($this->rootDir.$menucontentsFile))) {
			$this->smarty->assign('menucontents', '');
			$this->smarty->assign('menucontentsFile', $menucontentsFile);
		} else {
			$this->smarty->assign('menucontentsFile', '');
			$this->smarty->assign('menucontents', $menucontentsFile);
		}
		
	}
	
	public function addJavascripts($newJavascriptFile) {
		$existsFlag = in_array($newJavascriptFile, $this->javascripts);
		
		if ($existsFlag===false && is_file($newJavascriptFile)) {
			$this->javascripts[] = $newJavascriptFile;
		}
	}
	
	public function removeJavascripts($newJavascriptFile, $removeAll= false) {
		if ($removeAll === true) {
			$this->javascripts = array();
		} else {
			$existsFlag = in_array($newJavascriptFile, $this->javascripts);
			
			if ($existsFlag===true ) {
				$javascripts = array();
				foreach ($this->javascripts as $vlue) {
					if ($vlue != $newJavascriptFile) {
						$javascripts[] = $vlue ;
					}
				}
				$this->javascripts = $javascripts;
			}
		}
	}
	
	protected function exportLoadWaitingImage() {
		$setHtml = '<div ><img src="webs/images/loading.gif" id="LoadWaitingImage"/></div>';
		$this->smarty->assign('LoadWaitingImage', $setHtml)	;
	}
	
	public function assignItem($params) {
		if (is_array($params)) {
			foreach ($params AS $key=>$value) {
				if (!empty($key)) {
					$this->smarty->assign($key, $value)	;
				}
			}
		}
	}
}