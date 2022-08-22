<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class phpseclib{
function phpseclib(){
    require_once(str_replace("\\","/",APPPATH).'libraries/phpseclib/vendor/autoload.php'); 
    
}
}
?>