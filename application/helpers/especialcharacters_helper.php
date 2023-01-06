<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 
function especialCharactersFix($string) { 
    $ci = get_instance();
    $pos = strrpos($string, "ñ");
    if ($pos === false) {
        $string=utf8_decode($string);
    }
    
   
    return $string;
} 