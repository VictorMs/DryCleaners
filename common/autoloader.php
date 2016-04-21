<?php

include_once __ROOT__.'common/commonfun.php';

class ClassAutoloader {
	
	
	public function __construct() {
		spl_autoload_register(array($this, 'loader'));
		spl_autoload_register(array($this, 'WebsLoader'));
		spl_autoload_register(array($this, 'MobileLoader'));
		spl_autoload_register(array($this, 'DeviceLoader'));
		spl_autoload_register(array($this, 'SmartyLoader'));
		spl_autoload_register(array($this, 'ConfigLoader'));
		
	}
	
	public static function loader($className) {
		
		$file = __ROOT__.$className . '.php';
		
		return self::includeFile($file,$className);
	}
	
	public static function WebsLoader($className) {
		
		$file = __ROOT__.'webs/'.$className . '.php';
		return self::includeFile($file,$className);
	}
	
	public static function MobileLoader($className) {
		
		$file = __ROOT__.'mobile/'.$className . '.php';
		return self::includeFile($file,$className);
	}
	
	public static function DeviceLoader($className) {
	
		$file = __ROOT__.'device/'.$className . '.php';
		return self::includeFile($file,$className);
	}
	
	public static function SmartyLoader($className) {
	
		$file = __ROOT__.'libs/smarty/'.$className . '.class.php';
		return self::includeFile($file,$className);
	}
	
	public static function SmartyPluginsLoader($className) {
	
		$file = __ROOT__.'libs/smarty/plugins/'.$className . '.php';
		return self::includeFile($file,$className);
	}
	
	public static function SmartySysPluginsLoader($className) {
	
		$file = __ROOT__.'libs/smarty/sysplugins/'.strtolower($className). '.php';
		return self::includeFile($file,$className);
	}
	
	public static function ConfigLoader($className) {
	
		$file = __ROOT__.'config/'.($className). '.php';
		//echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n".$file."<br>";
		return self::includeFile($file,$className);
	}
	
	public static function includeFile($fullFile, $className) {
		if (file_exists($fullFile)) {
			include $fullFile;
		} else {
			return false;
		}
		
		// does the class requested actually exist now?
		return (class_exists($className)) ;
		
	}
}

class AutoloadException extends Exception { }

/*** specify extensions that may be loaded ***/
spl_autoload_extensions('.php, .web.php, .mobile.php, .class.php');

new ClassAutoloader();

