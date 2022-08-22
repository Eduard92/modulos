<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
include(APPPATH . '/libraries/phpseclib/vendor/autoload.php');



class Traslado extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public $complemento;
    private $key_advans;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('traslado_model');
        $this->load->model('figuratrasporte_model', 'trasportista');
        $this->load->model('v_Autotransporte_model', 'autotrasporte');
        $this->load->model('Vistas_model', 'vistas');


        
        $this->load->model('factura_model');
        $this->lang->load('traslado');
        $this->load->config('traslado_conf',TRUE);
        $this->load->library('cfdi');
        $this->load->library("nuSoap");



        $this->complemento = $this->config->item('traslado_conf');
        $this->key_advans = $this->config->item('API_KEY_ADVANS');
       // $this->config['base_url']

    //    $this->isLoggedIn();   
        
        $this->validation_rules = array(
            'cfdi'=>array(                

            ),
            'carta_porte' => array(
            
                array(
                    'field' => 'fecha_ini',
                    'label' => 'Inicio',
                    'rules' => 'trim|required'
                    ),
                
                array(
                    'field' => 'fecha_fin',
                    'label' => 'Fin',
                    'rules' => 'trim|required'
                    ),
            )
        );
    

    }
    

    
    public function index()
    {

        $traslados =  $this->traslado_model->get_all();
                 

//        $almacenes = Traslado
		$this->template->append_js('traslado.controller.js')
        ->set('traslados',$traslados);

        /* ->enable_parser(false);/*
        ->append_js('module::radio.controller.js')
        ->append_metadata('<script type="text/javascript">var listAlt='.json_encode($listAlt).';</script>')
        ->append_metadata('<script type="text/javascript">var playlists = '.json_encode($playlists).';</script>') */
        $this->build("traslado/index",null, $this->global, NULL , NULL);
    }
    

    public function create()
    {
        $cfdi = new StdClass();
      //  $input = $this->input->post();

       // print_r($input);
       //exit();
        //$ExisteCFDIfactura = validaFactura($input['facturas']);
        $figurasTrasporte =  $this->trasportista->dropdown('id','NombreFigura');
        $autotrasporte =  $this->autotrasporte->dropdown('id','descripcion');
        $estados =  $this->vistas->get_Estados();

      //  exit();
        $this->template->append_js('traslado.controller.js')
        ->set('figurasTrasporte',$figurasTrasporte)
        ->set('autotrasporte',$autotrasporte)
        //->set('estados',$estados)
        ->append_metadata('<script type="text/javascript">var productosFactura=[];</script>')

       ->append_metadata('<script type="text/javascript">var estados='.json_encode($estados).', municipios = [],localidades = [],colonias = [];</script>')
       ->append_metadata('<script type="text/javascript">var municipiosDestino = [],localidadesDestino = [],coloniasDestino = [];</script>')

        ->enable_parser(false);


        $this->build("traslado/form",null, $this->global, NULL , NULL);
    }
    public function timbrar2(){
        $this->load->library("CfdiUtils");

    }
    public function timbrar(){
        
        //Datos generales de factura
        $datosFactura["version"] = "4.0";
        $datosFactura["serie"] = "T";
        $datosFactura["folio"] = "1";
        $datosFactura["fecha"] = date('YmdHis');
        //$datosFactura["formaPago"] = "01";
        $datosFactura["noCertificado"] = "30001000000300023708";
       // $datosFactura["noCertificado"] = "00001000000412016948";

        $datosFactura["subTotal"] = "0.00";
        $datosFactura["descuento"] = "0.00";
        $datosFactura["moneda"] = "MXN";
        $datosFactura["total"] = "0.00";
        $datosFactura["tipoDeComprobante"] = "T";
        //$datosFactura["metodoPago"] = "PUE";
        $datosFactura["lugarExpedicion"] = "97000";
        $datosFactura["Exportacion"] = "01";

        //Datos del emisor
        $datosFactura['emisor']['rfc'] = 'AAA010101AAA';//DFF000601IQ0';//'EKU9003173C9';
        $datosFactura['emisor']['nombre'] = 'ACCEM SERVICIOS EMPRESARIALES SC';//'DISTRIBUIDORA DE FARMACOS Y FRAGANCIAS SA DE CV';/'ESCUELA KEMPER URGATE SA DE CV';
        $datosFactura['emisor']['regimen'] = '601';
        
        //Datos del receptor
        $datosFactura['receptor']['rfc'] = 'AAA010101AAA';
        $datosFactura['receptor']['nombre'] = 'ACCEM SERVICIOS EMPRESARIALES SC';
        $datosFactura['receptor']['usocfdi'] = 'S01';
        $datosFactura['receptor']['domFiscal'] = '97000';
        $datosFactura['receptor']['regimen'] = '601';
        
        
        $datosFactura["conceptos"][] = array("clave" => "01010101", "sku" => "75654123", 
        "descripcion" =>"Venta de productos", "cantidad" => "1", "claveUnidad" => "H87", "unidad" => "Pieza",
         "precio" => "0.00", "importe" => "0.00", "descuento" => "0.00", "iBase" => "0.00", "iImpuesto" => "002",
         "iTipoFactor" => "Tasa", "iTasaOCuota" => "0.", "iImporte" => "0.00 ", "ObjetoImp" =>"01");
        
        $datosFactura['traslados']['impuesto'] = "002";
        $datosFactura['traslados']['tasa'] = "0.0";
        $datosFactura['traslados']['importe'] = "0.00";

        $this->cfdi->_set($datosFactura);

        $xmlBase=  $this->cfdi->generar();

        
/*
        $cfdi = $timbra->enviar(
            $usuario =   "UsuarioPruebasWS"
            $password = "b9ec2afa3361a59af4b4d102d3f704eabdf097d4"
            rfc"TCM970625MB1";*/
           // $this->load->helper('file');

            $xml = read_file('files/CFDI/tmp/T1.xml');
          //  print_r($xmlBase);

        $url = 'https://dev40.advans.mx/ws/awscfdi.php?wsdl';
        //    $url ='https://ws33.advans.mx/ws/awscfdi.php?wsdl';
        //$ini = ini_set("soap.wsdl_cache_enabled","1");
        
        
     //   try {
        $client = new nusoap_client($url,TRUE);
        //$client->setUseCURL(true);
        $client->setCurlOption(CURLOPT_SSLVERSION, '6'); // TLS 1.2

        
     //   $headers = array('Authorization'=>$key_advans);

            //Si ocurrió algún error 
                $err = $client->getError(); 
                if ($err) { 
                die('error'); 
                } 

                //Ejecutamos la llamada al método 
                $result = $client->call('timbrar', array( 
                    'credential' => $this->key_advans, 
                    'cfdi' => $xml));            
                /* $result = $client->call('timbrar', array( 
                        'credential' => $key_advans, 
                        'cfdi' => $xml, 
                        ), null, null,$headers ); */
   
                //Si ocurrió algún fallo 
                if ($client->fault) { 
                die('fault'); 
                } 
                //Volcamos el resultado 
                var_dump($result);      

    }
    public function save(){
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

            $data = $this->input->post();
            //$result['data'] = $data;
            //$result['status'] = true;
           // return $this->template->build_json($result);  

            exit();
            if($data != '' || $data != null){


                $dataIndice = 
                array( 'Serie' => 'T',
                       'folio' => '0001',
                       'fecha' => date("Y-m-d"),
                       'moneda' =>   $this->complemento['moneda'],
                       'estado' => 1
    
                    );
    
                    $productos = $this->input->post('productos');
                    $peso = 0;
                    $cantidad = 0 ;

                    if($productos > 0){
                        foreach($productos as $producto){
                         //   print_r($producto);
                            $_peso = $producto['PesoBruto']==null|| $producto['PesoBruto']==''?0:$producto['PesoBruto'];
                            $peso = $peso + $_peso;
                            $cantidad = $cantidad +  $producto['cantidad'];

                           $productos[] = $producto;
    
                        } 
                    }
    
                   /* if(count($data['facturas']) > 0){
                        foreach($data['facturas'] as $factura){

                            $producto =  $this->factura_model->get_productosFactura($factura);
                            
                            $_peso = $producto->peso==null|| $producto->peso==''?0:$producto->peso;
                            $peso = $peso + $_peso;
                            $cantidad = $cantidad +  $producto->cantidad;

                           $productos[] = $producto;
    
                        } 
                    }*/
    
              $cfdi =  $this->traslado_model->saveCFDITraslado($dataIndice, $data['facturas'], $productos);         
              

                if($cfdi != false && $data['complemento'] == false){//
                    $result['data'] = $cfdi;
                    $result['message'] = " CFDI Traslado genereado";
                    $result['status'] = true;   
                  }
                else if($cfdi != false &&  $data['complemento'] == true){ 
                                
                    $dataComplemetno = array(
                        'version'=> $this->complemento['complemento']['Version'],
                        'TranspInternac' =>$this->complemento['complemento']['TranspInternac'],
                        'TotalDistRec'=> $data['dataComplemento']['distancia'],
                        'Mercancias_PesoBrutoTotal'=> $peso, //calcular peso de los productos
                        'Mercancias_UnidadPeso' => 'KGM',
                        'Mercancias_NumTotalMercancias' => $cantidad, // conteo de total de mercancias
                        'id_traslado'=> $cfdi,
                        'id_Figura'=> $data['dataComplemento']['figuraTrasporte'],
                        'id_Autotransporte' => $data['dataComplemento']['autotrasporte'],
                    );
                    

                    $complemento =  $this->traslado_model->saveComplemento($dataComplemetno, $data['origen'], $data['destino']);         

                    if($complemento){
                        $result['data'] = $cfdi;
                        $result['message'] = " CFDI Traslado genereado";
                        $result['status'] = true;   
                      }
                      else{
                        $delete = $this->traslado_model->deleteTraslado($id);
                        if($delete == true)
                            $result['message'] = "Error al generar el complemeto. No se guradaron cambios";
                        else
                        $result['message'] = "Error al generar el complemeto. No logro deshacer los cambios. Contacte a su administrador de sistema";

                      }
                }

            }
            else
            {
                $result['message'] = "Error";
            }
        }


    }
    
    public function details($id = 0){

        print_r($id);

        $cfdi = new StdClass();

        $figurasTrasporte =  $this->trasportista->dropdown('id','NombreFigura');
        $autotrasporte =  $this->autotrasporte->dropdown('id','descripcion');
        $estados =  $this->vistas->get_Estados();

        $productos =  $this->traslado_model->getPorductosTraslado($id);


      //  exit();
        $this->template->append_js('traslado.controller.js')
        ->set('figurasTrasporte',$figurasTrasporte)
        ->set('autotrasporte',$autotrasporte)
        //->set('estados',$estados)

        ->append_metadata('<script type="text/javascript">var productosFactura='.json_encode($productos).';</script>')
       ->append_metadata('<script type="text/javascript">var estados='.json_encode($estados).', municipios = [],localidades = [],colonias = [];</script>')
       ->append_metadata('<script type="text/javascript">var municipiosDestino = [],localidadesDestino = [],coloniasDestino = [];</script>')

        ->enable_parser(false);


        $this->build("traslado/form",null, $this->global, NULL , NULL);

    }
    
    
    public function getFacturas()
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

            $folio = $this->input->post('factura');
            
            
            if($folio != '' || $folio != null){
              /*  $where = array(
                       // 'folio' => $folio,
                        'cancelada' =>1,
                        'timbrado'=>1
                );*/

                //$facturas = $this->factura_model->where('folio','like', $folio)->get_all($where);

                if( $facturas = $this->factura_model->get_facturas($folio))
                {
                   // print_r($facturas);
                 //   exit();
                               
                     $result['data'] = $facturas;
                     $result['message'] = count($facturas) . " Facturas Encontrada";
                     $result['status'] = true;   
                }
                else
                {
                     $result['message'] = "No se encontraron facturas verifique que el folio este correcto";
                } 

            }
            else
            {
                $result['message'] = "Folio no definido";
            }

        }



        return $this->template->build_json($result);  
    }

    public function getProductosFacturas()
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

            $folio = $this->input->post('factura');
            
            
            if($folio != '' || $folio != null){

                if($productosFactura =  $this->factura_model->get_productosFactura($folio))
                {                        
                     $result['data'] = $productosFactura;
                     $result['message'] = count($productosFactura) . " productos agregados";
                     $result['status'] = true;   
                }
                else
                {
                     $result['message'] = "No se encontraron produtos verifique que el folio este correcto";
                } 

            }
            else
            {
                $result['message'] = "Folio no definido";
            }

        }



        return $this->template->build_json($result);  
    }

    function _validaFacturas($facturas)
    {
        $facturasCFDI = [];

    }

    public function getDataCodPostal()
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

            $cp = $this->input->post('cp');
            
            
            if($cp != '' || $cp != null){

                if($data =  $this->vistas->get_DatosCodPostal($cp))
                {                        
                    if($colonias = $this->vistas->get_Colonias($cp))
                    {
                        $data->colonias = $colonias;
                        $result['data'] = $data;
                        //$result['message'] = count($data) . " productos agregados";
                        $result['status'] = true;   
                    }

                }
                else
                {
                     $result['message'] = "No se encontro el Código Postal verifique que sea correcto";
                } 

            }
            else
            {
                $result['message'] = "Código Postal no definido";
            }

        }



        return $this->template->build_json($result);  
    }

    public function getMunicipios()
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

            $estado = $this->input->post('estado');
            
            
            if($estado != '' || $estado != null){

                if($data =  $this->vistas->get_Municipios($estado))
                {                        
                    
                    
                     $result['data'] = $data;
                     //$result['message'] = count($data) . " productos agregados";
                     $result['status'] = true;   
                }
                else
                {
                     $result['message'] = "No se encontraron registros";
                } 

            }
            else
            {
                $result['message'] = "Estado no definido";
            }

        }



        return $this->template->build_json($result);  
    }

    public function getLocalidades()
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

            $estado = $this->input->post('estado');
            
            
            if($estado != '' || $estado != null){

                if($data =  $this->vistas->get_Localidades($estado))
                {                        
                    
                    
                     $result['data'] = $data;
                     //$result['message'] = count($data) . " productos agregados";
                     $result['status'] = true;   
                }
                else
                {
                     $result['message'] = "No se encontraron registros";
                } 

            }
            else
            {
                $result['message'] = "Estado no definido";
            }

        }



        return $this->template->build_json($result);  
    }


}

?>