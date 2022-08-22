<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Productos extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('producto_model');
        $this->load->model('extraproducto_model');

        //$this->lang->load('traslado');
       // $this->load->config('traslado_conf');

        $this->isLoggedIn();   
    }
    

    
    public function index()
    {
        $catEmbalaje = $this->producto_model->catEmbalaje();

        $productos =  $this->extraproducto_model->getAll();


		$this->template->append_js('productos/productos.controller.js')
        ->enable_parser(true)
        ->append_metadata('<script type="text/javascript">var productos='.json_encode($productos).';</script>')
        ->append_metadata('<script type="text/javascript">var catEmbalaje='.json_encode($catEmbalaje).';</script>');


        $this->build("productos/index",null, $this->global, NULL , NULL);
    }
    

    public function save(){
        $result = array(
            'status'  => false,
            'message' => '',
            'data'    => false
        );
    
        $input = $this->input->post();

		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
            $result['message'] = "Bad request";
		}
        else{

            $data = $this->input->post('producto');
                  
            if($data != '' || $data != null){

                if($this->extraproducto_model->existeDatosExtra($data['id_producto'])){
                    $result['message'] = "Ya cuenta con datos extras.";
                }
                else{

                    $insert_data =   
                    array(
                        'id_producto' => $data['id_producto'],
                        'PesoBruto' => $data['peso'],
                        'materialPeligroso' => isset($data['materialPeligroso'])?$data['materialPeligroso']:null,
                        'embalaje' => isset($data['embalaje'])?$data['embalaje']:null,
                        'created_by' => $this->userCurrent['id']


                    );



                    $clave =  $this->producto_model->getClaveSAT($data['id_producto']);

                    $insertC = false;

                    if($clave->producto_id){

                        if($clave->claveSAT == '' || $clave->claveSAT == null){
                            $insertC =  $this->producto_model->saveClave($data['id_producto'],$data['claveSAT'],'update');
                        }else
                            $insertC = true;


                    }
                    else{

                        $insertC =$this->producto_model->saveClave($data['id_producto'],$data['claveSAT']);
                        
                    }
                    

                    if($insertC){

                        if($producto = $this->extraproducto_model->insert($insert_data)){

                                    
                            $result['data'] = $producto;
                            $result['message'] = "Se inserto correctamento los datos";
                            $result['status'] = true;   
    
                        }
                        else
                             {$result['message'] = " Ocurrio un error al insertar los datos";}
                    }
                    else{
                        $result['message'] = " Ocurrio un error al guradar la clave. Contacte al adminstrador";

                    }
            }
        }
        else
        {
                $result['message'] = " Error interno. Comuniquese con el adminsitrador";
        }

        }
        return $this->template->build_json($result);             


    }
    
    function delete()
    {

        $result = array(        
            'status'  => true,
            'message' => '',
            'data'    => false
        );

        $id = $this->input->post('id');

        if($id)
        {
            if($this->extraproducto_model->delete($id))
            {
                $result['message'] = "Los datos se eliminaron correctamente";//lang('radio:delete');            
            }
            else
            {
                $result['message'] = 'Ocurrio un error al eliminar los datos. Contacte al adminstrador';//lang('radio:delete_fail');
                $result['status'] = false;
                    
            }  
        }
        else
        {
             $result['message'] = 'Elemento no encontrado';//lang('radio:not_found');
             $result['status'] = false;
        }



        return $this->template->build_json($result);  
    }
    
    
    public function getProductos()
    {

        $result = array(
            'status'  => false,
            'message' => '',
            'data'    => false
        );

		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
            $result['message'] = "Bad request";
		}
        else{

            $codigoBarras = $this->input->post('codigoBarras');
            
            
            if($codigoBarras != '' || $codigoBarras != null){

                if( $Productos = $this->producto_model->get_Productos($codigoBarras))
                {
 
                     $result['data'] = $Productos;
                     $result['message'] = count($Productos) . " Productos Encontrados";
                     $result['status'] = true;   
                }
                else
                {
                     $result['message'] = "No se encontraron Productos verifique que el codigo de barras este correcto";
                } 

            }
            else
            {
                $result['message'] = "Codigo de Barras no definido";
            }

        }



        return $this->template->build_json($result);  
    }


    public function getInfoProducto()
    {

        $result = array(
            'status'  => false,
            'message' => '',
            'data'    => false
        );

		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
            $result['message'] = "Bad request";
		}
        else{

            $id_producto = $this->input->post('id_producto');
            print_r($this->input->post());
            exit();
            if($id_producto != '' || $id_producto != null){
                $claveSAT = null;
                $clave =  $this->producto_model->getClaveSAT($id_producto);

                if($clave)
                    $claveSAT = $clave->claveSAT;



                if($claveSAT){

                    $materialPeligroso = $this->_materialPeligroso($claveSAT);

                    if($producto =  $this->producto_model->get_infoProducto($id_producto))
                    {                        
                        $result['data'] = $producto;
                        $result['message'] = "";
                        $result['status'] = true;   
                        $result['materialPeligroso'] = $materialPeligroso->materialPeligroso;
                    }
                    else
                    {
                        $result['message'] = "Error al intentar obtener datos del producto. Comuniquese con el Administrador";
                    } 
                }else{
                    if($producto =  $this->producto_model->get_infoProductoSinClaveSAT($id_producto)){
                        $result['data'] = $producto;
                        $result['status'] = true;   
                        $result['message'] = "El producto no tiene clave SAT. Es necesario registrarlo";
                }
                }

            }
            else
            {
                $result['message'] = "Error al intentar obtener datos del producto. Comuniquese con el Administrador";
            }

        }



        return $this->template->build_json($result);  
    }


    public function checkClaveSAT()
    {

        $result = array(
            'status'  => false,
            'message' => '',
            'data'    => false
        );

		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
            $result['message'] = "Bad request";
		}
        else{

            $input = $this->input->post('clave');
            
            if($input != '' || $input != null){

                    if($clave =  $this->producto_model->getMaterialPeligroso($input))
                    {    
                        $result['data'] = $clave;
                        $result['status'] = true;   

                    }
                    else
                    {
                        $result['message'] = "Clave inexistente en el catalogo. Verifique que sea correcto.";
                    } 
            }
            else{

            $result['message'] = "Error al intentar obtener datos la clave. Comuniquese con el Administrador";
            }

        }


        return $this->template->build_json($result);  
    }


    function _validaFacturas($facturas)
    {
        $facturasCFDI = [];



    }

    function _materialPeligroso($clave)
    {
        if($cSAT = $this->producto_model->getMaterialPeligroso($clave)){
                return $cSAT;
        }
        
        return false;

    }

    public function AddProducto()
    {

        $result = array(
            'status'  => false,
            'message' => '',
            'data'    => false
        );

		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
            $result['message'] = "Bad request";
		}
        else{

            $input = $this->input->post('id');
            
            if($input != '' || $input != null){

                    if($clave =  $this->producto_model->getMaterialPeligroso($input))
                    {    
                        $result['data'] = $clave;
                        $result['status'] = true;   

                    }
                    else
                    {
                        $result['message'] = "Clave inexistente en el catalogo. Verifique que sea correcto.";
                    } 
            }
            else{

            $result['message'] = "Error al intentar obtener datos la clave. Comuniquese con el Administrador";
            }

        }


        return $this->template->build_json($result);  
    }



}

?>