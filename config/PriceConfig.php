<?php 

class PriceConfig {
	const     PRICESEPARATOR  = ' to ';
	const     PIECESFIELDID   = 'piecesfieldname';
	const     AMOUNTFIELDID   = 'amountfieldname';
	
	protected $nameWidth      = 200;
	protected $tableIdForHtml = 'pricelistId';
	
	protected $DetailPriceList = array (
			'Shirt'                        => array ('regular laundered short-sleeved' => 2.50 ,
					                                 'regular laundered long-sleeved' => 3.00 ,
					                                 'silk, linen, hand pressed, heavy, regular with cuff, dry cleaned,folded' => 4.5,
															),
			'T Shirt'                              =>  4.5,
			'Golf Shirt'                           =>  4.5,
			'Rugby'                                =>  6.0,
			'Tuxedo Shirt'                         =>  6.0,
			'Pant'                                 => array('without lining long or short'           => 6.0,
					                                        'with lining, heavy, corduroy,too hairy' => 7.0,
													  ),
			'Suit'                                 => array('2pc (jacket with pant or skirt)'   => 16.00,
					                                        '3pc (jacket with pant and vest)'   => 22.00,
														),
			'Sweater'                              =>  8.0,
			'Blouse'                               =>  7.0,
			'Dresses '                             => array('long, with pleats,Fancy'   => array(18.5, 25.5),
					                                        'short, with pleats'        => array(14.5,18.5)
													  ),
			'Jump Suit (long, with pleats,Fancy)'  => array(18.0, 25.5),
			'Skirt'                                =>     7.0,
			'Jacket,Blazer'                        =>     11.0,
			'Vest'                                 =>     6.00,
			'Bomber Jacket'                        =>     12.0,
			'Ski Jacket (regular)'                 =>     15.0,
			'Ski Jacket (down filled)'             =>     22.0,
			'Overcoat,Raincoat,Coverall with lining' =>   25.0,
			'Coverall without lining'              =>     15.0,
			'Coat'                                 =>     array(12.5, 15.5),
			'Tie'                                  =>     4.5,
			'Blanket'                              =>     array(35.00, 45.00),
			'Comforter '                           => array('king size'            => 35,
					                                        'queen or double size' => 25,
													  ),
			'Duvet '                               => array('king size'            => 45,
					                                        'queen or double size' => 35,
													  ),
			'Duvet Cover,Bed Sheet,Bed Skirt'      =>     20.00,
			'Pillow Case'                          =>     5.5,
			'Sleeping Bag'                         =>     array(15.00, 25.00),
			'Table Cloth'                          =>     array(15.00, 20.00),
			'Table Runner'                         =>     array(8.50, 10.50),
			'Scarf'                                =>     array(7.50, 10.50),
			'Hat, Cap'                             =>     array(5.5 , 8.5),
			'Kilt'                                 =>     25.5,
			'Regular Gown'                         =>     50.00,
			'Wedding Gown'                         =>     array(80.00, 200.00),
			'Wedding Gown Box'                     =>     50.00,
			'Sari'                                 =>     30.00,
			'Hand Bag No Leather'                  =>     array(25.00, 30.00),
			'Curtains,Drapes by panel (5 pleats) short without lining'
			=>     array(12.5, 'per panel'),
			'Curtains,Drapes by panel (5 pleats) long without lining or short with lining'
			=>     array(15.5, 'per panel'),
			'Curtains,Drapes by panel (5 pleats) long with lining'
			=>     array(17.5, 'per panel'),
	);
	
	protected $PriceList = array (
			'Shirt (regular laundered)'            =>   3.00,
			'Shirt (silk, linen, hand pressed, heavy, regular with cuff, dry cleaned,folded)'
			                                       =>    4.5,
			'T Shirt, Golf Shirt'                  =>    4.5,
			'Rugby,Tuxedo'                         =>    6.5,
			'Pant (without lining long or short)'  =>    6.0,
			'Pant (with lining, heavy, corduroy,too hairy)' => 7.0,
			'Suit 2pc (jacket with pant or skirt)' =>    16.00,
			'3pc (jacket with pant and vest)'      =>    22.00,
			'Sweater'                              =>    8.0,
			'Blouse'                               =>    7.0, 
			'Dresses,Jump Suit (long, with pleats,Fancy)'  => array(18.5, 25.5),
			'Dresses (short, with pleats)'         =>     array(14.5,18.5),
			'Skirt'                                =>     7.5,
	        'Jacket,Blazer'                        =>     11.0,
			'Vest'                                 =>     6.00,
			'Bomber Jacket'                        =>     12.0,
			'Ski Jacket (regular)'                 =>     15.0,
			'Ski Jacket (down filled)'             =>     22.0,
			'Overcoat,Raincoat,Coverall with lining' =>   25.5,
			'Coverall without lining'              =>     15.0,
			'Coat'                                 =>     array(12.5, 15.5),
			'Tie'                                  =>     4.5,
			'Blanket'                              =>     array(35.00, 45.00),
			'Comforter (king size)'                =>     32.00,
			'Comforter (queen or double size)'     =>     25.00,
			'Duvet (king size)'                    =>     40.00,
			'Duvet (queen or double size)'         =>     30.00,
			'Duvet Cover,Bed Sheet,Bed Skirt'      =>     20.00,
			'Pillow Case'                          =>     5.5,
			'Sleeping Bag'                         =>     array(15.00, 25.00),
			'Table Cloth'                          =>     array(15.00, 20.00),
			'Table Runner'                         =>     array(8.50, 10.50),
			'Scarf'                                =>     array(7.50, 10.50),
			'Hat, Cap'                             =>     array(5.5 , 8.5),
			'Kilt'                                 =>     25.5,
			'Regular Gown'                         =>     50.00,
			'Wedding Gown'                         =>     array(80.00, 200.00),
			'Wedding Gown Box'                     =>     50.00,
			'Sari'                                 =>     30.00,
			'Hand Bag No Leather'                  =>     array(25.00, 30.00),
			'Curtains,Drapes by panel (5 pleats) short without lining'
			                                       =>     array(12.5, 'per panel'),
			'Curtains,Drapes by panel (5 pleats) long without lining or short with lining'
			                                       =>     array(15.5, 'per panel'),
			'Curtains,Drapes by panel (5 pleats) long with lining'
			                                       =>     array(17.5, 'per panel'),
	);
	
	function __construct() {
		$this->nameWidth       = 200;
		$this->tableIdForHtml  = 'PriceListId';
	}
	
	public function getPriceList() {
		return $this->PriceList;
	}
	
	public function setNameWidth($width) {
		$this->nameWidth = $width;
	}
	
	public function getPriceListHtml() {
		$fields   = array('Garment', 'Price', 'Unit');
		$retHtml  = '<table id="'.$this->tableIdForHtml.'">';
		$retHtml .= '<tr>';
		
		$firstColwith = ' width="'.$this->nameWidth.'" ';
		foreach ($fields as $fieldName) {
			$retHtml .= '<th '.$firstColwith.'>'.$fieldName.'</th>';
			$firstColwith = '';
		}
		$retHtml .= '</tr>';
		
		foreach ($this->PriceList as $itemName => $itemValue) {
			$avgPrice =0;
			$fields = $this->getFieldsArray($itemName,$itemValue,$avgPrice);
			$retHtml .= '<tr>';
			foreach ($fields as $field) {
				$retHtml .= '<td>'.$field.'</td>';
			}
			$retHtml .= '</tr>';
		}
		$retHtml .= '</table>';
		
		return $retHtml;
	}
	
	public function getPriceListWithEvaHtml() {
		$fields   = array('Garment Name', 'Price', 'Unit','Pieces','Amount');
		$retHtml  = '<table id="'.$this->tableIdForHtml.'">';
		$retHtml .= '<tr>';
		
		$firstColwith = ' width="'.$this->nameWidth.'" ';
		foreach ($fields as $fieldName) {
			$retHtml .= '<th '.$firstColwith.'>'.$fieldName.'</th>';
			$firstColwith = '';
		}
		$retHtml .= '</tr>';
		
		$index = 1;
		foreach ($this->PriceList as $itemName => $itemValue) {
			$avgPrice = 0;
			$fields = $this->getFieldsArray($itemName,$itemValue,$avgPrice);
			$retHtml .= '<tr>';
			foreach ($fields as $field) {
				$retHtml .= '<td>'.$field.'</td>';
			}
			$fpicecsid = self::PIECESFIELDID.sprintf("%02d", $index);
			$famountid = self::AMOUNTFIELDID.sprintf("%02d", $index);
			$retHtml .= '<td><input type="text" name="inputPicecsField" id="'.$fpicecsid.'" size="4" >
			             <input type="hidden" name="'.$fpicecsid.'" value="'.$avgPrice.'" >
			             </td>';
			$retHtml .= '<td id="'.$famountid.'">&nbsp;</td>';
			$retHtml .= '</tr>';
			$index++;
		}
		$retHtml .= '</table>';
		
		return $retHtml;
	}
	
	protected function getFieldsArray($fName, $fValue, &$avgPrice) {
		$retArray  = array($fName);
	
		$priceStr = 0 ;
		$unitStr  = '&nbsp;';
		if (is_array($fValue)) {
			$index = 0;
			foreach ($fValue as $price) {
				if ($index == 0) {
					$priceStr = $price;
					$avgPrice = $price;
				} else {
					if (is_numeric($price)) {
						$priceStr .= self::PRICESEPARATOR.$price;
						$avgPrice = ($price + $avgPrice)/2.0;
					} else {
						$unitStr = $price;
					}
				}
				$index++;
			}
		} else {
			$priceStr = $fValue;
			$avgPrice = $fValue;
		}
		return array($fName, $priceStr, $unitStr);
	}
	
	public function getDetailPriceListHtml() {
		$fields   = array('Garment Name', 'Price', 'Unit');
		$retHtml  = '<table id="'.$this->tableIdForHtml.'">';
		$retHtml .= '<tr>';
	
		$firstColwith = ' width="'.$this->nameWidth.'" ';
		foreach ($fields as $fieldName) {
			$retHtml .= '<th '.$firstColwith.'>'.$fieldName.'</th>';
			$firstColwith = '';
		}
		$retHtml .= '</tr>';
	
		foreach ($this->PriceList as $itemName => $itemValue) {
			$avgPrice =0;
			$fields = $this->getFieldsArray($itemName,$itemValue,$avgPrice);
			$retHtml .= '<tr>';
			foreach ($fields as $field) {
				$retHtml .= '<td>'.$field.'</td>';
			}
			$retHtml .= '</tr>';
		}
		$retHtml .= '</table>';
	
		return $retHtml;
	}
	
	/**
	 * Convert price array to
	 * Garment description unit  price  [average price]  [Amount] 
	 */
	protected function convertPriceList() {
		$retArray =array();
		
		foreach ($this->DetailPriceList as $name => $nameValue) {
			$description = '';
			$unit        = '';
			$price       = 0;
			$avgPrice    = 0;
			if (is_array($nameValue)) {
				foreach ($nameValue as $desc => $prices) {
					if (is_array($prices)) {
						
					}
				}
			} else {
				$price    = $nameValue;
				$avgPrice = $price;
			}
			$retArray[] = array($name,$description, $unit,$price, $avgPrice );
		}
	}
	
	protected function getPricees($inPrices, &$avgPrice) {
		
	}
	
}
