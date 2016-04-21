<?php


class DisplayWebHomePage extends ShowWebsParentPage {
	
	
	function __construct(array $parames) {
		parent::__construct();
		
		$this->postParams = $parames;
	}
	
	
}