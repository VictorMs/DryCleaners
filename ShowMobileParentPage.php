<?php

class ShowMobileParentPage extends ShowParentPage {

	function __construct() {
	
		parent::__construct();
	
		$this->setCompileDir($this->rootDir.'webs/smartyCompWebs/');
		$this->setTemplateDir($this->rootDir.'webs/smartyTemp/');
	}
	
	
}