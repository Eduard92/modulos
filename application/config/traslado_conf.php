<?php defined('BASEPATH') OR exit('No direct script access allowed');

// define all custom fields that a new installation should have
$config['moneda'] = 'MXN';  
$config['Exportacion'] = '01';                  



$config['versionCFDI'] = array('3.3','4.0');


$config['TipoDeComprobante']= 'T';

$config['Emisor'] = array(
    'Rfc' =>'xxx',
    'Nombre' => 'DISTRIBUIDORA DE FARMACOS Y FRAGANCIAS, S.A. DE C.V.',
    'RegimenFiscalReceptor' =>'601',
    "NoCertificado" => '00001000000412016948'
);

$config['Receptor'] = array(
    'Rfc' =>'xxx',
    'UsoCFDI4' => 'S01', /// pare version 4.0
    'UsoCFDI3' => 'P01', /// pare version 3.3
    'Nombre' => 'DISTRIBUIDORA DE FARMACOS Y FRAGANCIAS, S.A. DE C.V.',
    'DomicilioFiscalReceptor' => '45069',/// Atributo requerido para registrar el código postal del domicilio fiscal del receptor del comprobante
    'RegimenFiscalReceptor' =>'601'
);

$config['complemento'] = array(
    'Version' =>'2.0',
    'TranspInternac' =>'No',

);

$config['TipoUbicacionOrigen'] = 'Origen';
$config['paisOrigen'] = 'MEX';

$config['TipoUbicacionDestino'] = 'Destino';
$config['paisDestino'] = 'MEX';


$config['paises'] = array(
    'MEX' => 'México'
);

?>