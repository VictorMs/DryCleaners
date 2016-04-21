<?php
class CommonFuns {
	const      REQUEST_METHOD_POST = 1;
	const      REQUEST_METHOD_GET  = 0;
	
	const      DIR_SEPARATOR       = '/';	//DIRECTORY_SEPARATOR;
	
	const      ACTIONPOSTKEY       ='action';
	const      CONTROLLERPOSTKEY   ='controller';

	const      SELECTCITYFIELDNAME = 'selectedCity';
	
	public static $CITYS = array (
			    0     => 'Select...',
				1     => 'Coquitlam',
				2     => 'Port Moody',
				3     => 'Port Coquitlam',
				4     => 'Burnaby',
				5     => 'New Westminster',
				6     => 'North Surrey',
				7     => 'Vancouver',
				8     => 'Pitt Meadows',
				9     => 'Maple Ridge',
	);
	
	public static function getpostparameters(){
		$retArray = array();
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$postType = self::REQUEST_METHOD_POST ;
			$postInfo = $_POST;
		} else {
			$postType = self::REQUEST_METHOD_GET ;
			$postInfo = $_GET;
		}
		
		if (!is_array($postInfo) ) {
			$postInfo = array();
		}
		
		if (!array_key_exists('postType', $postInfo)) {
			$postInfo['postType'] = $postType;
		}
		
		$retArray = self::makefilterForInput($postInfo);
		
		return $retArray;
		
	}
	
	public static function makefilterForInput($inParams) {
		if (is_array($inParams)) {
	
			foreach ($inParams as $feldName => $postValue ) {
	
				$inParams[$feldName] = self::filterInput($postValue);
			}
		}
		return $inParams;
		
	}
	
	public static function filterInput($inData) {
	
		return $inData;
	}
	
	public static function getPostValue(&$postArray, $fieldName, $defValue ='', $setup=false) {
		
		if (is_array($postArray)) {
			if (array_key_exists($fieldName, $postArray)) {
				return $postArray[$fieldName];
			} elseif ($setup) {
				$postArray[$fieldName] = $defValue;
			}
		}
		return $defValue;
	}
	
	public static function getClientIP() {
		$retip='';
		if ( isset($_SERVER["REMOTE_ADDR"]) )    {
			$retip = $_SERVER["REMOTE_ADDR"];
		} else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    {
			$retip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		} else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    {
			$retip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		}
		if (empty($retip)) {
			if (getenv("HTTP_CLIENT_IP"))
				$retip = getenv("HTTP_CLIENT_IP");
			else if(getenv("HTTP_X_FORWARDED_FOR"))
				$retip = getenv("HTTP_X_FORWARDED_FOR");
			else if(getenv("REMOTE_ADDR"))
				$retip = getenv("REMOTE_ADDR");
			else
				$retip = "UNKNOWN";
		}
		return $retip;
	}
	
	public static function getDocDir($useDefRoot = true) {
		if ($useDefRoot) {
			return __ROOT__;
		}
			
		$dir = rtrim($_SERVER['DOCUMENT_ROOT'],'/ \\');
	
		return (str_replace("\\", self::DIR_SEPARATOR, $dir)) ;		
	}
	
	public static function getServerURL() {
		
		
		$dir = rtrim($_SERVER['SERVER_NAME'],'/ \\').self::DIR_SEPARATOR.ltrim(rtrim($_SERVER['REQUEST_URI'],'/ \\'),'/ \\').self::DIR_SEPARATOR;

		$dir = (str_replace("\\", self::DIR_SEPARATOR, $dir));
		$dir = (str_replace("//", self::DIR_SEPARATOR, $dir));
		
		return $dir;
	}
	
	/**
	 * get key associated with the index or value from array
	 * 
	 * @param unknown_type $inArray
	 * @param unknown_type $indexValue
	 * @return null/string
	 */
	public static function getKeyName($inArray, $indexValue = 0) {
		$retKey = null;
		
		if (is_array($inArray) ) {
			if (empty($indexValue) || !isset($indexValue)) {
				$indexValue = 0;
			} else {
			
				if (array_key_exists($indexValue, $inArray)) {
					return $indexValue;
				}
				
				$retkey = array_search($indexValue, $inArray);
				if ($retkey !== false) {
					return $retkey;
				} 
			
			}
			
			if (is_numeric($indexValue) && count($inArray) > $indexValue) {
				$keys = array_keys($inArray);
				return $keys[$indexValue];
			} else {
				$retkey = null;
			}
		}
		return $retKey;
	}
	
	public static function getCitysHtml($selCityKey=0) {
		
		$retHtml ='<select name=\''.self::SELECTCITYFIELDNAME.'\' id=\''.self::SELECTCITYFIELDNAME.'\'>';
		
		foreach (self::$CITYS as $key => $cityName) {
			$retHtml .= '<option value='.$key.($selCityKey==$key ? ' selected ':' ').'>'.$cityName.'</option>';
		}
		$retHtml .='</select>';
		
		return $retHtml;
		
	}
	
	public static function getJosnData(array $inArray) {
		
		$retJosn ='[{';
		foreach ($inArray as $key => $value) {
			//$retJosn .= '"'.$key.'":"'.str_replace('"', '\\\"', $value).'",';
			$retJosn .= '"'.$key.'":"'.$value.'",';
		}
		$retJosn = rtrim($retJosn, ',').'}]';
		self::exportLog($retJosn);
		return $retJosn;
	}
	
	public static function exportLog($exportData) {
		$logfile =  __ROOT__.self::DIR_SEPARATOR.'accesslog'.self::DIR_SEPARATOR.(date('y-m-d', time()).'.log');
		
		$fhandle = fopen($logfile, 'a');
		if ($fhandle) {
			$loghead = CommonFuns::getClientIP().' '.date('y-m-d hh:mm:ss', time()).' ';
			
			fputs($fhandle, ($loghead.$exportData."\n"));
			fclose($fhandle);
			return true;
		}
		return false;
	}

}

