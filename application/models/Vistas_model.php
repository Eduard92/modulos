<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Vistas_model extends MY_Model
{

    public function __construct()
	{
       // $this->_table = 'v_productos';
       //$this->primary_key = 'id';
       // $this->soft_deletes = true;


		parent::__construct();
	}


    function get_DatosCodPostal($cp){

        $where = array(
             'c_CodigoPostal' =>$cp
     );

        $this->db->select('*')
        ->from('cat_Codigos_Postal')
        ->where($where);

        return   $this->db->get()->row_object();


    }

    function get_DatosCodPostalDescripciones($cp){

        $where = array(
             'c_CodigoPostal' =>$cp
     );

        $this->db->select('*')
        ->from('v_CodigosPostasDescripciones')
        ->where($where);

        return   $this->db->get()->row_object();


    }

    function get_Colonias($cp){

        $where = array(
             'c_CodigoPostal' =>$cp
     );

        $this->db->select('c_Colonia, Nombre_asentamiento')
        ->from('cat_Colonia')
        ->where($where);

        return   $this->db->get()->result_array();


    }

    function get_ColoniasNombres($cp){

        $where = array(
             'c_CodigoPostal' =>$cp
     );

        $this->db->select('Nombre_asentamiento')
        ->from('cat_Colonia')
        ->where($where);

        $colonias = array();

        $result =  $this->db->get()->result_object();

        foreach($result as $row){
            $colonias[$row->Nombre_asentamiento] = $row->Nombre_asentamiento;
        }

        return $colonias;

    }
    
    function get_Estados(){

   

        $this->db->select('c_Estado, Nombre_Estado')
        ->from('cat_Estados');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      //  return $data;

        return   $this->db->get()->result_object();


    }
    function get_EstadosNombres(){

   

        $this->db->select('Nombre_Estado');
       // ->from('cat_Estados');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      //  return $data;
        $estados = array();

        $result =    $this->db->get('cat_Estados')->result_object();

        foreach($result as $row){
            $estados[$row->Nombre_Estado] = $row->Nombre_Estado;
        }

        return $estados;

    }
    function get_Municipios($estado){

   
        if(strlen($estado) > 3){
            $_estado = $this->db->select('c_Estado')
            ->from('cat_Estados')
            ->where('Nombre_Estado' ,$estado)
            ->get()->row();

            $where = array(
                'c_Estado' =>$_estado->c_Estado);
        }
        else{
            $where = array(
                'c_Estado' =>$estado);
        }


        $this->db->select('c_Municipio, Descripcion')
        ->from('cat_Municipios')
        ->where($where);

      //  return $data;

        return   $this->db->get()->result_object();


    }

    function get_MunicipiosNombres($estado){

   
        if(strlen($estado) > 3){
            $_estado = $this->db->select('c_Estado')
            ->from('cat_Estados')
            ->where('Nombre_Estado' ,$estado)
            ->get()->row();

            $where = array(
                'c_Estado' =>$_estado->c_Estado);
        }
        else{
            $where = array(
                'c_Estado' =>$estado);
        }


        $this->db->select('Descripcion')
        ->from('cat_Municipios')
        ->where($where);

      //  return $data;
        $municipios = array();

        $result =     $this->db->get()->result_object();

        foreach($result as $row){
            $municipios[$row->Descripcion] = $row->Descripcion;
        }

        return $municipios;


    }

    function get_Localidades($estado){

        if(strlen($estado) > 3){
            $_estado = $this->db->select('c_Estado')
            ->from('cat_Estados')
            ->where('Nombre_Estado' ,$estado)
            ->get()->row();

            $where = array(
                'c_Estado' =>$_estado->c_Estado);
        }
        else{
            $where = array(
                'c_Estado' =>$estado);
        }



        $this->db->select('c_Localidad, Descripcion')
        ->from('cat_Localidad')
        ->where($where);

      //  return $data;

      return   $this->db->get()->result_object();


    }
    function get_LocalidadesNombres($estado){

        if(strlen($estado) > 3){
            $_estado = $this->db->select('c_Estado')
            ->from('cat_Estados')
            ->where('Nombre_Estado' ,$estado)
            ->get()->row();

            $where = array(
                'c_Estado' =>$_estado->c_Estado);
        }
        else{
            $where = array(
                'c_Estado' =>$estado);
        }



        $this->db->select('Descripcion')
        ->from('cat_Localidad')
        ->where($where);

      //  return $data;

      $localidades = array();

      $result =     $this->db->get()->result_object();

      foreach($result as $row){
          $localidades[$row->Descripcion] = $row->Descripcion;
      }

      return $localidades;


    }

    public function _dropdown($data, $key, $value){

        $options = array();
        foreach ($data as $row)
        {
            $options[$row->{$key}] = $row->{$value};
        }

        return $options;

    }

    function getUsoCfdi(){

   

        $this->db->select('c_UsoCFDI, CONCAT(c_UsoCFDI, " - ", Descripcion) AS Descripcion', FALSE)
        ->from('c_UsoCFDI');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      //  return $data;

        return   $this->db->get()->result_object();


    }

    function getREgimenFiscal(){

   

        $this->db->select('c_RegimenFiscal, CONCAT(c_RegimenFiscal, " - ", Descripcion) AS Descripcion', FALSE)
        ->from('c_RegimenFiscal');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      //  return $data;

        return   $this->db->get()->result_object();


    }
    function getFormaPago(){

   

        $this->db->select('c_FormaPago, CONCAT(c_FormaPago, " - ", Descripcion) AS Descripcion', FALSE)
        ->from('c_FormaPago');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      //  return $data;

        return   $this->db->get()->result_object();


    }
    
    function getAlmacenes($where=''){



       $query= $this->db->select('id_almacen, REPLACE(descripcion, "ALMACEN","")  AS Descripcion', FALSE)
        ->from('almacenes')
        ->order_by('Descripcion','ASC');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      if($where != ''){
        $where = array(
            'descripcion' =>$where
         );
         $query->where($where);

        }
        return   $query->get()->result_object();


    }

    function getVendedores($tipo = ''){

        
        if($tipo == ''){
            $this->db->select('id_usuario, concat(nombres," ",apellidop," ",apellidom) AS nombres', false)
            ->from('usuarios')
            ->where("id_tipoestadousuario = 1 and(id_tipousuario = '3' OR id_tipousuario = '1' OR id_tipousuario = '12' OR id_tipousuario = '19' 
            OR id_tipousuario = '34' OR id_tipousuario = '32' OR id_tipousuario = '50')")
            ->order_by('nombres','ASC');
        }
        elseif($tipo == 'elite'){
            $this->db->select('id_usuario, concat(nombres," ",apellidop," ",apellidom) AS nombres', false)
            ->from('usuarios')
            ->where("id_tipoestadousuario = 1 and(id_tipousuario = '50' or  id_usuario IN(1748))")
            ->order_by('nombres','ASC');
        }

       /* $this->db->select('id_usuario, concat(nombres," ",apellidop," ",apellidom) AS nombres', false)
        ->from('usuarios')
        ->where("id_tipousuario = '3' OR id_tipousuario = '1' OR id_tipousuario = '12' OR id_tipousuario = '19' 
        OR id_tipousuario = '34' OR id_tipousuario = '32' OR id_tipousuario = '50'")
        ->order_by('nombres','ASC');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');*/

      //  return $data;

        return   $this->db->get()->result_object();


    }






}

  