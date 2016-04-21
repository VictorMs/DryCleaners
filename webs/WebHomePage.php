<?php

class WebHomePage extends ParentPage {
	const     AJAXREQUEST = 'ajaxRequest';
	
	protected $centerMenuId = null;
	protected $ajaxRequest  = false;
	
	
	/**
	 *  @var WebMenuConfig 
	 */
	protected $menuConfig   = null;
	
	function __construct($params = null, $deviceDetector=null) {
		
		$this->menuConfig = new WebMenuConfig();
		
		parent::__construct($params,$deviceDetector);
		
		$this->ajaxRequest = CommonFuns::getPostValue($params, self::AJAXREQUEST,false);
		
	}
		
	public function MainAction() {
		
		$display = new DisplayWebHomePage($this->postParams);
		$display->displayPage();
	}
	
	protected function verifyActionKey($keyOfCMenu) {
		$retIndex = 0;
		
		if (!array_key_exists(WebMenuConfig::ACTIONPOSTKEY, $this->postParams)) {
			$defaultIndex = array_search($keyOfCMenu, array_keys($this->menuConfig->getCenterMenu()));
			if ($defaultIndex===false) {
				$defaultIndex = 0;
			}
			echo "<br/> \n".'keyOfCMenu:'.$keyOfCMenu.' , defaultIndex:'.$defaultIndex."\n <br/>";
			
			$this->postParams[WebMenuConfig::ACTIONPOSTKEY] = $this->menuConfig->getCenterMenuKeyOrName($defaultIndex);
		}
		
	}
	
	/**
	 *
	 * 成功提示程序
	 *
	 * 应用程序的控制器类可以覆盖该函数以使用自定义的成功提示
	 *
	 * @param $msg   成功提示需要的相关信息
	 * @param $url   跳转地址
	 */
	public function success($msg, $url = '',$top=0){
		if($top){
			$url = empty($url) ? "window.history.back();" : "top.location.href=\"{$url}\";";
		}else{
			$url = empty($url) ? "window.history.back();" : "location.href=\"{$url}\";";
		}
		echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>function sptips(){alert(\"{$msg}\");{$url}}</script></head><body onload=\"sptips()\"></body></html>";
		exit;
	}
	
}