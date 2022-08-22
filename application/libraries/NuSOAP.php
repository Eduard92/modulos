<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class nuSoap{
function Nusoap(){
    require_once(str_replace("\\","/",APPPATH).'libraries/NuSOAP/nusoap.php'); //Por si estamos ejecutando este script en un servidor Windows
}
}
?>