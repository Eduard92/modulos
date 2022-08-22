<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class ExtraProducto_model extends MY_Model
{

    public function __construct()
	{
        $this->_table = 'productos_Extras';
       $this->primary_key = 'id';
       // $this->soft_deletes = true;


		parent::__construct();
	}


    function existeDatosExtra($id){
        $where = array(
            'id_producto' =>$id
    );

        $this->db->select('*')
        ->from('productos_Extras')
        ->where($where);

        return   $this->db->get()->row();

    }

    function getAll(){


        $this->db->select('productos_Extras.*, productos.codigo_barras,productos.descripcion')
        ->from($this->_table)
        ->join('productos','productos.id_producto = productos_Extras.id_producto');

        return   $this->db->get()->result_object();

    } 



 

}
