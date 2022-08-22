<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Inyector extends BaseController
{
    public $conf;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model', 'cliente_m');
        
    }
    

    public function clientes()
    {
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
            $result['message'] = "Bad request";
		}
        else{
                if($data =  $this->cliente_m->clientesSDK())
                {                        
                    foreach ($data as $cliente):
                     //  print_r($cliente);			        
                            $response[] = array(
                                "ID" => $cliente->clave,
                                "Nombre" => $cliente->nombres,
                                "RFC" => (strlen(str_replace(' ', '', $cliente->RFC)) > 5) ? str_replace(' ', '', $cliente->RFC) : "XAXX010101000",
                                "UsoCFDI" => (string)$cliente->usoCFDI,
                                "TipoPago"=> $cliente->tipo_pago?$cliente->tipo_pago:"",
                                "RegimenFiscal"=> $cliente->regimenFiscal?$cliente->regimenFiscal:"",
                                "Direccion" => array(
                                    "Calle" => $cliente->calle,
                                    "NoExterior" => $cliente->noe,
                                    "NoInterior" => (strlen($cliente->noi)==0) ? "" : $cliente->noi,
                                    "Colonia" => $cliente->colonia,
                                    "CodigoPostal" => $cliente->cp,
                                    "Ciudad" => $cliente->ciudad,
                                    "Municipio" => $cliente->municipio,
                                    "Estado" => $cliente->estado,
                                    "Pais" => $cliente->pais,
                                )
                            );
                    endforeach;
                }

        }
        echo json_encode($response, JSON_UNESCAPED_UNICODE); exit;


    }
}

?>