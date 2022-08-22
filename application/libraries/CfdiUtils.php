<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class cfdiutils{
function cfdiutils(){
    //require_once(str_replace("\\","/",APPPATH).'libraries/NuSOAP/nusoap.php'); //Por si estamos ejecutando este script en un servidor Windows
    require str_replace("\\","/",APPPATH).'libraries/cfdiutils/vendor/autoload.php';

}
}
?>