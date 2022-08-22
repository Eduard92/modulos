<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class v_Autotransporte_model extends MY_Model
{

    public function __construct()
	{
       $this->_table = 'v_Autotransporte';
       //$this->primary_key = 'id';
       // $this->soft_deletes = true;


		parent::__construct();
	}



}

  