<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Gravatar helper for CodeIgniter.
 *
 * @author      PyroCMS Dev Team
 * @copyright   Copyright (c) 2012, PyroCMS LLC
 * @package 	PyroCMS\Core\Helpers
 */

function isAdmin($url = ""){
	if(isTemporal($url)){ return true; }
	if($url == "")
		if(isset($_SESSION['id_tipousuario']) && $_SESSION['id_tipousuario'] == "1"){
			return true;
		} else {
			return false;
		}
	else {
		if(isset($_SESSION['id_tipousuario']) && $_SESSION['id_tipousuario'] == "1"){
			return true;
		} else {
			header("location: ".$url);
		}
	}
}

function isCoordinador($url = ""){
	if(isTemporal($url)){ return true; }
	if($url == "")
		if(isset($_SESSION['id_tipousuario']) && ($_SESSION['id_tipousuario'] == "1" || $_SESSION['id_tipousuario'] == "2" || $_SESSION['id_tipousuario'] == "23" || $_SESSION['id_tipousuario'] == "26" || $_SESSION['id_tipousuario'] == "17")){
			return true;
		} else {
			return false;
		}
	else {
		if(isset($_SESSION['id_tipousuario']) && ($_SESSION['id_tipousuario'] == "1" || $_SESSION['id_tipousuario'] == "2" || $_SESSION['id_tipousuario'] == "23" || $_SESSION['id_tipousuario'] == "26" || $_SESSION['id_tipousuario'] == "17")){
			return true;
		} else {
			header("location: ".$url);
		}
	}
}

function isVendedor($url = ""){
	if($url == "")
		if(isset($_SESSION['id_tipousuario']) && $_SESSION['id_tipousuario'] == "1" || $_SESSION['id_tipousuario'] == "2"  || $_SESSION['id_tipousuario'] == "3" || $_SESSION['id_tipousuario'] == "26" || $_SESSION['id_tipousuario'] == "23"|| ($_SESSION['id_tipousuario'] == "6")|| ($_SESSION['id_tipousuario'] == "7" || $_SESSION['id_tipousuario'] == "17")){
			return true;
		} else {
			return false;
		}
	else {
		if(isset($_SESSION['id_tipousuario']) && $_SESSION['id_tipousuario'] == "1" || $_SESSION['id_tipousuario'] == "2"  || $_SESSION['id_tipousuario'] == "3" || $_SESSION['id_tipousuario'] == "26" || $_SESSION['id_tipousuario'] == "23" || ($_SESSION['id_tipousuario'] == "6")|| ($_SESSION['id_tipousuario'] == "7" || $_SESSION['id_tipousuario'] == "17")){
			return true;
		} else {
			header("location: ".$url);
		}
	}
}
function isHospitales(){

		if(isset($_SESSION['id_tipousuario']) && ($_SESSION['id_tipousuario'] == "6")){
			return true;
		} 
		else
		{  return false;}
}	
function isQuintanaRoo(){

		if(isset($_SESSION['id_tipousuario']) && ($_SESSION['id_tipousuario'] == "7")){
			return true;
		} 
		else
		{  return false;}
}		
function isFacturista($url = "")
{
	if(isTemporal($url)){ return true; }
	if($url == "")
	{
		if(isset($_SESSION['id_tipousuario']) && ($_SESSION['id_tipousuario'] == "1" || $_SESSION['id_tipousuario'] == "4" || $_SESSION['id_tipousuario'] == "28" || $_SESSION['id_tipousuario'] == "36" || $_SESSION['id_tipousuario'] == 12 || $_SESSION['id_usuario'] == 89 || $_SESSION['id_usuario'] == 492 || $_SESSION['id_usuario'] == 88 || $_SESSION['id_usuario'] == 1411 || $_SESSION['id_usuario'] == 641 || $_SESSION['id_usuario'] == 266 || $_SESSION['id_usuario'] == 734))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		if(isset($_SESSION['id_tipousuario']) && ($_SESSION['id_tipousuario'] == "1" || $_SESSION['id_tipousuario'] == "4" || $_SESSION['id_tipousuario'] == "28" || $_SESSION['id_tipousuario'] == "36" || $_SESSION['id_tipousuario'] == 12 || $_SESSION['id_usuario'] == 89 || $_SESSION['id_usuario'] == 492 || $_SESSION['id_usuario'] == 88 || $_SESSION['id_usuario'] == 1411 || $_SESSION['id_usuario'] == 641 || $_SESSION['id_usuario'] == 266 || $_SESSION['id_usuario'] == 734))
		{
			return true;
		}
		else
		{
			header("location: ".$url);
		}
	}
}

function isAlmacenista($url = "")
{
	if(isTemporal($url)){ return true; }
	$u = $_SESSION['id_tipousuario'];
	if($url == "")
	{		
		if($u == "1" || $u == "5" || $u == "2" || $u == "26" || $u == "23" || $u == "27" || $u == "17" || $u == '36')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		if(isset($u) && ($u == "1" || $u == "5" || $u == "2" || $u == "26" || $u == "23" || $u == "27" || $u == "17") || $u == '36')
		{
			return true;
		}
		else
		{
			header("location: ".$url);
		}
	}
}

function isLoggin($url = ""){
	if($url == ""){
		return isset($_SESSION['id_tipousuario']);
	} else {
		if(isset($_SESSION['id_tipousuario'])){
			return true;
		} else {
			header("location: index.php");
		}
	}
}

function isTemporal($url = ""){
	if($url == ""){
		if(isset($_SESSION['temporal']) && $_SESSION['temporal'] == "1"){
			return true;
		} else {
			return false;
		}	
	} else {
		if(isset($_SESSION['temporal']) && $_SESSION['temporal'] == "1"){
			header("location: ".$url);
		} else {
			return false;
		}
	}
}

function isCoordinador2011()
{
	return ($_SESSION['id_tipousuario'] == 2) ? true : false;
}

function isCXP2011()
{
	return ($_SESSION['id_tipousuario'] == 10) ? true : false;
}

function isTesorero2011()
{
	return ($_SESSION['id_tipousuario'] == 11) ? true : false;
}

function isAdminCXC2011()
{
	print_r($_SESSION);
	return ($_SESSION['id_tipousuario'] == 13) ? true : false;
}

function isContabilidad2011()
{
	return ($_SESSION['id_tipousuario'] == 29) ? true : false;
}

function isChofer2011()
{
	return ($_SESSION['id_tipousuario'] == 35 || $_SESSION['id_tipousuario'] == 30 || $_SESSION['id_tipousuario'] == 22) ? true : false;
}

function isGuias2011()
{
	return ($_SESSION['id_tipousuario'] == 31) ? true : false;
}

function isCoordinadorMaster2011()
{
	return ($_SESSION['id_tipousuario'] == 15) ? true : false;
}

function isOperacionesMaster2011()
{
	return ($_SESSION['id_tipousuario'] == 22) ? true : false;
}

function isAdministradorSucursal2011()
{
	return ($_SESSION['id_tipousuario'] == 12) ? true : false;
}

function isRox2011()
{
	//Para gasolinas (Rox y Bety Padilla)
	return ($_SESSION[id_usuario] == 89 || $_SESSION[id_usuario] == 734) ? true : false;	
}

function isVentas2011()
{
	return ($_SESSION['id_tipousuario'] == 19 || $_SESSION['id_tipousuario'] == 32 || $_SESSION['id_tipousuario'] == 34) ? true : false;
}

function isGerenteVentas2011()
{
	return ($_SESSION['id_tipousuario'] == 32) ? true : false;
}

function isAlmacenista2011()
{
	//Almacenistas y Aida
	return ($_SESSION['id_tipousuario'] == 33 || $_SESSION[id_usuario] == 447  || $_SESSION['id_tipousuario'] == 20 || $_SESSION['id_tipousuario'] == 36) ? true : false;
}

function isSurteGobierno()
{
	//Capacidad de surtir un pedido de gobierno. Almacenistas, algunos administradores de sucursales, pedro y sistemas.
	$x = $_SESSION[id_usuario];
	return (isAlmacenista2011() or $x == 326 or $x == 91 or $x == 902 or $x == 753 or $x == 564 or $x == 499 or $x == 301 or $x == 709 or $x == 730 or $_SESSION['id_tipousuario'] == 19) ? true : false;
}

//Perfil para usuarios que surten pedidos
function isFacturistaPedidos()
{
	return ($_SESSION['id_tipousuario'] == "36" || $_SESSION['id_tipousuario'] == "28") ? true : false;
}

//Para crear pedidos de gobierno
function isCrearPedidosGob()
{
	if(	isAdmin() or
			isAdministradorSucursal2011() or
			$_SESSION['id_tipousuario'] == 13 or
			$_SESSION['id_tipousuario'] == 19 or		
			$_SESSION['id_tipousuario'] == 16 or
			$_SESSION['id_tipousuario'] == 32 or
			$_SESSION['id_tipousuario'] == 34 or
			$_SESSION[id_usuario] == 736 or
			$_SESSION[id_usuario] == 270
	)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function isCompras()
{
	return ($_SESSION['id_tipousuario'] == 9 or $_SESSION['id_tipousuario'] == 39 or isComprasIMSS() or isComprasMaster()) ? true : false;
}

function isComprasMaster()
{
	return ($_SESSION['id_tipousuario'] == 16) ? true : false;
}

function ppagos()
{
	return ($_SESSION['id_tipousuario'] == 39) ? true : false;
}

function isComprasIMSS()
{
	return ($_SESSION['id_tipousuario'] == 38) ? true : false;
}

//Pueden solicitar suministros
function isSuministros()
{
	if(isAdmin() or $_SESSION[id_usuario] == 734) //Admin o Viridiana
	{
		return true;
	}
	else
	{
		return false;
	}
}

function isComprasMerida() {
	if (isCompras() AND $_SESSION[id_entidad] == 30){
	return true;
	}
	return false;
}

function isMedico() {
	if ($_SESSION['id_tipousuario'] == 42){
	return true;
	}
	return false;
}

function isRacks() {
	$usuarios = array(
	);

	if (in_array($_SESSION[id_usuario], $usuarios) OR isRacksAdministrador())
		return true;
	return false;
}

function isRacksAdministrador() {
	$usuarios = array(
		'Segio Lagunes' => '1002'
	);

	if (in_array($_SESSION[id_usuario], $usuarios))
		return true;
	return false;
}
