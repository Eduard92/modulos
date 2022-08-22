<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_model extends MY_Model
{

    public function __construct()
	{
        $this->_table = 'clientes';
        $this->primary_key = 'clave';
       // $this->soft_deletes = true;


		parent::__construct();
	}

    function clientesIndex(){

    }

    function getEstados(){

 
        $query =  $this->db->distinct()
       -> select('estado')
        ->where('estado is NOT NULL',null,false)
        ->order_by('estado','ASC')
        ->from('clientes')->get()->result();
        $data = $this->_dropdown($query,'estado', 'estado');

       return $data;

       // return   $this->db->get()->result_object();

    }
    function getGrupos(){

 
        $query =  $this->db->distinct()
       -> select('grupo')
        ->where('grupo is NOT NULL',null,false)
        ->order_by('grupo','ASC')
        ->from('clientes')->get()->result();
        $data = $this->_dropdown($query,'grupo', 'grupo');

       return $data;

       // return   $this->db->get()->result_object();

    }

    function clientesSDK(){

        $where = array(
            'sdk_fe_cliente.contpaq' => 1,
            'clientes.clave' => 5522
        );
            

        $this->db->select('clientes.*, clientes_datosExtra.id_regimenFiscal as regimenFiscal')
        ->from('clientes')
        ->join('clientes_datosExtra','clientes_datosExtra.id_cliente=clientes.clave','LEFT')
        ->join('sdk_fe_cliente','sdk_fe_cliente.id=clientes.clave')
        ->limit(4)
        ->where($where);

        return   $this->db->get()->result_object();


    }

    function getCliente($id_cliente){

        $where = array(
            'clientes.clave' =>$id_cliente);

        $this->db->select('clientes.*, clientes_datosExtra.id_regimenFiscal as regimenFiscal')
        ->from('clientes')
        ->join('clientes_datosExtra','clientes_datosExtra.id_cliente=clientes.clave','LEFT')
        ->where($where);

        return   $this->db->get()->row();


    }


    function getOldDataCliente($id_cliente){

        $where = array(
            'clientes.clave' =>$id_cliente);

        $this->db->select('nombres,RFC,correo,telefonos,direccion,calle,noe,noi,colonia,cp,ciudad,municipio,estado,pais,almacen,vendedor,grupo,credito,dias_credito,tolerancia,clue,tipoCartera,imss,banco,observaciones,jurisdiccion,bancoCta,bancoFe,auditoria,vencimiento,permisos,usoCFDI,formapago, clientes_datosExtra.id_regimenFiscal')
        ->from('clientes')
        ->join('clientes_datosExtra','clientes_datosExtra.id_cliente=clientes.clave','LEFT')
        ->where($where);

        return   $this->db->get()->row();


    }



    function agregarHistorico($id, $mod){
        $data = array(
            'cliente' =>$id,
            'fecha' => now(),
            'usuario' => $_SESSION['id_usuario'],
            'modificacion' => str_replace("\r\n", '<br>',substr($mod, 0, -1))
        );

        return $this->db->insert('clientes_historico',$data);

    }

    function getHistorico($id){
        $where = array(
            'cliente' =>$id,
        );

        $this->db->select('clientes_historico.*, CONCAT(usuarios.nombres," ",usuarios.apellidoP," ",usuarios.apellidoM)user')
        ->from('clientes_historico')
        ->join('usuarios','usuarios.id_usuario=clientes_historico.usuario')
        ->order_by('fecha','DESC')
        ->where($where);

     //   return $this->db->insert('clientes_historico',$data);
        return   $this->db->get()->result_array();

    }



    function getRegimenCliente($id_cliente){

        $where = array(
            'id_cliente' =>$id_cliente);

        $this->db->select('*')
        ->from('clientes_datosExtra')
        ->where($where);

        return   $this->db->get()->row();


    }
    /*Querys Consignatarios */

    function getConsignatarios($id_cliente){

        $where = array(
            'cliente' =>$id_cliente);

        $this->db->select('id, texto', FALSE)
        ->from('clientes_consignatarios')
        ->where($where)
        ->order_by('id','ASC');//->result();
       // $data = $this->_dropdown($query,'c_Estado', 'Nombre_Estado');

      //  return $data;

        return   $this->db->get()->result_array();


    }
    function insertConsignatarios($data){

        return $this->db->insert('clientes_consignatarios',$data);         

    }
    function updateConsignatarios($id, $data){

        return $this->db->where('id', $id)
        ->set($data)
        ->update('clientes_consignatarios');

    }

    function deleteConsignatarios($idConsignatario){

        if($this->db->delete('clientes_consignatarios',array('id' =>$idConsignatario)))
            return true;

		return false;
    }
    /* Fin Querys Consignatarios */


    function updateRegimenCliente($id, $data){

        return $this->db->where('id', $id)
        ->set($data)
        ->update('clientes_datosExtra');

          


    }

    function createRegimenCliente($data){

        return $this->db->insert('clientes_datosExtra',$data);         


    }

    function getClienteSdk($id_cliente){

        $where = array(
            'cliente_id' =>$id_cliente);

        $this->db->select('id')
        ->from('sdk_fe_cliente')
        ->where($where);

        return   $this->db->get()->row();


    }
    function insertClienteSdk($id_cliente){

        $data = array(
            'cliente_id' =>$id_cliente,
            'contpaq'    =>0 );

        return $this->db->insert('sdk_fe_cliente',$data);         



    }

    function updateClienteSdk($id_cliente){

    $data = array('contpaq'=>0 );

        
        return $this->db->where('cliente_id', $id_cliente)
        ->set($data)
        ->update('sdk_fe_cliente');



    }


    public function _dropdown($data, $key, $value){

        $options = array();
        foreach ($data as $row)
        {
            $options[$row->{$key}] = $row->{$value};
        }

        return $options;

    }

}
