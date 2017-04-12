<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 4/12/17
 * Time: 12:24 PM
 */
function tr($txt){
    	static $trans = false;

 	if(LANG_ID == DEFAULT_LANG){
        +		return $txt;
 	}

 	if($trans === false){
        		$fn = LANG_DIR.'lang_'.$lang_id.'.php';
        		if(file_exists($fn) and is_file($fn) and is_readable($fn)){
            			require_once $fn;
            			$trans = $_trans;
            		} else {
            			$trans = array();
            		}
 		if(isset($trans[$txt])){
            			return $trans[$txt];
 		}
 	}
 	return $txt;
 }