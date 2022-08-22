<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends MY_Model
{

    public function __construct()
	{
        $this->_table = 'productos';
        $this->primary_key = 'id_productos';
       // $this->soft_deletes = true;


		parent::__construct();
	}

    function get_Productos($search="") 
    {
        $where = array(
             'eliminado' =>0,

     );
        $this->db->select('productos.id_producto, productos.descripcion, productos.presentacion, productos.sustancia_activa,productos.codigo_barras')
        ->from($this->_table)
        //->join('productos_Extras', 'productos_Extras.id_producto = productos.id_producto','lefth')
        ->where($where)->order_by('codigo_barras','ASC');

        if($search){

            $this->db->like('codigo_barras',$search);
            //->or_like('sustancia_activa',$search);
        }       

        return   $this->db->limit(50)->get()->result_object();
    }

    function get_infoProducto($id){

        $where = array(
            'id_producto' =>$id
    );

        $this->db->select('*')
        ->from('v_datosProdcuctosCP')
        ->where($where);

        return   $this->db->get()->row();

    }

    
    function get_infoProductoSinClaveSAT($id){

        $where = array(
            'id_producto' =>$id
    );

        $this->db->select('	id_producto, descripcion, codigo_barras, presentacion, sustancia_activa, productos_clave_sat.claveSAT')
        ->from('productos')
        ->join('productos_clave_sat','productos_clave_sat.producto_id = productos.id_producto','left')
        ->where($where);

        return   $this->db->get()->row();

    } 

    function getClaveSAT($id){

        $where = array(
            'producto_id' =>$id
    );

        $this->db->select('*')
        ->from('productos_clave_sat')
        ->where($where);

        return   $this->db->get()->row();


    }

    function getMaterialPeligroso($clave){

        $where = array(
            'clave' =>$clave
    );

        $this->db->select('*')
        ->from('traslado_c_ClaveProdServCP')
        ->where($where);

        return   $this->db->get()->row();

    } 

    function catEmbalaje(){


        $this->db->select('*')
        ->from('traslado_c_TipoEmbalaje');

        return   $this->db->get()->result_object();

    } 


    function saveClave($id_producto,$clave,$method = 'insert'){


        $data = array(
          //  'producto_id' => $id_producto,
            'claveSAT' => $clave,
        );

        if($method == 'insert'){
            $data['producto_id'] =$id_producto;
            if(    $this->db->insert('productos_clave_sat', $data))
                return true;
        }

        else if($method == 'update'){
            $this->db->where('producto_id', $id_producto);

            if($this->db->update('productos_clave_sat', $data))
                return true;

        }

        return false;


    }



    

}
