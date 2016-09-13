<?php
 class  Hashen
{
	 private $ncol,$nrow,$text;
	 
	 function __construct($text){
		 // got squer num greater than text length
		 $this->text=$text;
	    
	 }
	 
	 function getC () { return $this->text; }
	
}