<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi {

  	function validasiInput($input){
  		// $reCaptcha = $this->regReCaptha($input);
  		// if($reCaptcha['status']){
  			$arInput = $input;
  			foreach($arInput as $key => $value){
  				if($key == 'g-recaptcha-response' && empty($value)){
  					return ['status'=>false, 'msg'=>'Captcha tidak benar'];
  				}else if($key == 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL) ){
  					return ['status'=>false, 'msg'=>'Format '.$key.' ('.$value.') tidak benar.'];
  				}else if($key == 'name' && (trim($value) == '' || !preg_match('/^[a-zA-Z ]*$/',$value))){
  					return ['status'=>false, 'msg'=>'Format '.$key.' ('.$value.') tidak benar.'];
  				}else	if($key == 'telephone' && !preg_match('/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/', $value)){
  					return ['status'=>false, 'msg'=>'Format '.$key.' ('.$value.') tidak benar'];
  				}
  			}
  			return ['status'=>true, 'msg'=>'input terisi'];
  		// }else{
  		// 	return $reCaptcha;
  		// }
  	}

    function validasiInput2($input, $templates){
  			foreach($templates as $template){
          $name = $template['name'];
          $label = $template['label'];
          $required = $template['required'];
          $type = $template['type'];
          $value=null;
          if(isset($input[$name])){
            $value = $input[$name];
          }
          if($required){
            if(!isset($value)){
              return ['status'=>false, 'msg'=>$label.' tidak benar'];
            }else if($type == 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)){
              return ['status'=>false, 'msg'=>'Format Email ('.$value.') tidak benar.'];
    				}else	if($type == 'tel' && !preg_match('/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/', $value)){
    					return ['status'=>false, 'msg'=>'Format Telepon ('.$value.') tidak benar'];
    				}
          }
  			}
  			return ['status'=>true, 'msg'=>'input terisi'];
  	}
}

?>
