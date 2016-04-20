<?php

namespace App\Http\Controllers\Modulos\Busqueda;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Session;
use \Illuminate\Support\Collection;
//use App\Http\Controllers\Modulos\Usuarios\Input;
use DB;

class Cleaner {
		
	var $stopwords = array(" find ", " about ", " me ", " ever ", " each ");//you need to extend this big time.

	var $symbols = array('/','\\','\'','"',',','.','<','>','?',';',':','[',']','{','}','|','=','+','-','_',')','(','*','&','^','%','$','#','@','!','~','`'	);//this will remove punctuation

	function parseString($string) {
		$string = ' '.$string.' ';
		$string = $this->removeStopwords($string);
		$string = $this->removeSymbols($string);
		return $string;
	}
	
	function removeStopwords($string) {
		for ($i = 0; $i < sizeof($this->stopwords); $i++) {
			$string = str_replace($this->stopwords[$i],' ',$string);
		}
		
		//$string = str_replace('  ',' ',$string);
		return trim($string);
	}
	
	function removeSymbols($string) {
		for ($i = 0; $i < sizeof($this->symbols); $i++) {
			$string = str_replace($this->symbols[$i],' ',$string);
		}
			
		return trim($string);
	}
}