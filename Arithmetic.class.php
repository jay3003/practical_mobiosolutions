<?php

/**
 * Do some arithmetic operations
 * PHP Version 7.3.6
 * @category   Arithmetic
 * @package    Arithmetic
 * @author     Jaysukh Sasukiya <jay.sasukiya3003@gmail.com>
 */
 class Arithmetic{
	
	/**
	 * Count the abolute disticnt value
	 * @param    array
	 * @return   numeric count
	 */	
	public static function getAbsoluteDistinctCount($indexArr = []){
		$finalArray = [];
		if(!empty($indexArr)){
			foreach($indexArr as $k=>$v){
			  //Convert	value to absolute
			  $finalArray[] = abs($v); 
			}
			//return disticnt count 
			return count(array_unique($finalArray));
		}
		return 0;
	}
 }
?>
