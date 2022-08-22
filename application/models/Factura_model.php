<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Factura_model extends MY_Model
{

    public function __construct()
	{
        $this->_table = 'facturas_indice';
        $this->primary_key = 'folio';
       // $this->soft_deletes = true;


		parent::__construct();
	}

    function get_facturas($search="") 
    {
        $where = array(
            // 'folio' => $folio,
             'cancelada' =>1,
             'timbrado'=>1,
                          'tipo'=>1

     );
        $this->db->select('facturas_indice.folio, clientes.nombres, clientes.clave')->from($this->_table)->join('clientes', 'clientes.clave = facturas_indice.cliente')->where($where)->order_by('folio','ASC');

        if($search){

            $this->db->like('folio',$search);
            //->or_like('sustancia_activa',$search);
        }       

        return   $this->db->limit(50)->get()->result_object();
    }

    function get_infoFactura($folio){
        $this->db->select('facturas_indice.folio, clientes.nombres, clientes.clave')
        ->from($this->_table)
        ->join('clientes', 'clientes.clave = facturas_indice.cliente')
        ->where($where)->order_by('folio','ASC');



    }

    function get_productosFactura($folio){

        $where = array(
             'factura' =>$folio
     );

        $this->db->select('*')
        ->from('v_x')
        ->where($where)->order_by('factura','ASC');

        return   $this->db->get()->result_object();


    }

}
