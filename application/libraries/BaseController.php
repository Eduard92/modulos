<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 
session_start();
/**
 * Class : BaseController
 * Base Class to control over all the classes
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class BaseController extends CI_Controller {







	protected $global = array ();
	public $controller;
	public $method;
	public $userCurrent = array();

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('admin');
		$this->lang->load('buttons');
		$this->load->library('form_validation');
		$this->load->helper('permisos');

		//ci()->module = $this->module = $this->router->fetch_module();
		$this->controller = $this->controller = $this->router->fetch_class();
		$this->method = $this->method = $this->router->fetch_method();
	}
	public function response($data = NULL) {
		$this->output->set_status_header ( 200 )->set_content_type ( 'application/json', 'utf-8' )->set_output ( json_encode ( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) )->_display ();
		exit ();
	}
	
	/**
	 * This function used to check the user is logged in or not
	 */
	function isLoggedIn() {

		//$isLoggedIn = $this->session->userdata ( 'isLoggedIn' );

		if (!isset($_SESSION['id_usuario'])) {
		redirect ( 'login' );
		} 
		
		else {

			$this->userCurrent['role'] ="role";//$this->session->userdata ( 'role' );
			$this->userCurrent['id'] = $_SESSION['id_usuario'];
			$this->userCurrent['name'] = $_SESSION['nombres'];
			$this->userCurrent['roleText'] = $_SESSION['id_usuario'];
			$this->userCurrent['lastLogin'] = "";//$this->session->userdata ( 'lastLogin' );
			$this->userCurrent['isAdmin'] ="";//$this->session->userdata ( 'isAdmin' );
			$this->userCurrent['accessInfo'] ="";// $this->session->userdata ( 'accessInfo' );
			
			$this->global ['name'] = "nombre";;
			$this->global ['role'] = "role";//$this->role;
			$this->global ['role_text'] ="roletext"; //$this->roleText;
			$this->global ['last_login'] = "today";//$this->lastLogin;

	}
		
	}
	
	/**
	 * This function is used to check the access
	 */
	function isAdmin1() {
		if ($this->role == SYSTEM_ADMIN) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * This function is used to check the access
	 */
	function isTicketter() {
		if ($this->role != ROLE_ADMIN || $this->role != ROLE_MANAGER) {
			return true;
		} else {
			return false;
		}
	}
	
/*
	function logout() {
		$this->session->sess_destroy ();
		
		redirect ( 'login' );
	}
	*/
    function build($viewName = "", $data = null , $headerInfo = NULL, $pageInfo = NULL, $footerInfo = NULL){

		//$this->template->append_js('radio.controller.js');

		$this->template->set_partial('metadata', 'layouts/material/partials/metadata',$this->userCurrent);
		$this->template->set_partial('header', 'layouts/material/partials/header');
		$this->template->set_partial('sidebar', 'layouts/material/partials/sidebar');
		$this->template->set_partial('shortcuts', 'layouts/material/partials/shortcuts');
		$this->template->set_partial('navigation', 'layouts/material/partials/navigation');

		//$this->template->set_layout('default');
		$this->template->build($viewName,$data);
    }

	
}