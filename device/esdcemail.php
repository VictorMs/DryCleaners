<?php

ini_set('SMTP', 'eaglesquaredrycleane.ipage.com'); 
ini_set('smtp_port',587);

class esdcemail {
	protected $sendto=array(
				'cellphone'=>'17789895839@msg.koodomobile.com',
				'victor ma'=>'isvictorma@gmail.com',
				'Eagle Square Dry Cleaners'=>'info@eaglesquaredrycleaners.com',
			 );
	
	protected $mailSubject =null;
	protected $mailBody =null;
	protected $todaystr=null;
	protected $textMsg=null;
	
	protected $headers=null;
	
	function __construct($sSubject=NULL, $sMsg=NULL) {
	
		$this->mailSubject = ( empty($sSubject) ? 'test subject':$sSubject);
		$this->mailBody    = ( empty($sMsg) ? 'test body':$sMsg);
	}
	
	function __destruct() {
		
	}
	
	public function sendemail($setemails=array()) {
		if (!empty($setemails)) {
			$this->sendto = $setemails;
		}
		$sendtoaddr = '';
		foreach ($this->sendto AS $name=> $emailadr) {
			$sendtoaddr .= ($sendtoaddr ? ',':'').$name.'<'.$emailadr.'>';
		}
		if (!$this->headers) {
			$this->headers = 'From:support@eaglesquaredrycleaners.com'."\r\n".'Content-type: text/html; charset=uft-8'."\r\n";
		}
		
		return mail($sendtoaddr,$this->mailSubject,$this->mailBody, $this->headers);
	}
	
	public function sendTextMsg() {
		//$ret = mail('7789895839@vmobile.ca',"SMS",$this->textMsg);
		//$ret = mail('7789895839@vmobile.ca','',$this->textMsg);
		return mail('7789895839@vmobile.ca',$this->mailSubject,$this->textMsg, $this->headers);
	}
	public function setMailSubject($inSub) {
		if (!empty($inSub)) {
			$this->mailSubject = $inSub;
		}
		
	}
	
	public function setMailBody($inBody) {
		if (!empty($inBody)) {
			$this->mailBody = $inBody;
		}
	}
	
	public function setHtmlHeader($setHeader=null) {
		$headers = null;
		if (empty($setHeader)) {
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			
			// Additional headers
			$headers .= 'From: Support<support@eaglesquaredrycleaners.com>' . "\r\n";
		} else {
			$headers = $setHeader;
		}
		$this->headers = $headers;
	}
	
	public function setTextMsg($setTextMsg) {
		$this->textMsg = $setTextMsg;
	}
}
