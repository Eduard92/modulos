<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Clientes extends BaseController
{
    public $conf;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vistas_model', 'vistas');
        $this->load->model('Cliente_model', 'cliente_m');
        

        //$this->lang->load('traslado');
        $this->load->config('clientes_conf',true);
        $this->conf = $this->config->item('clientes_conf');

        $this->isLoggedIn();   

        $this->rules = array(
			array(
				'field' => 'clave',
				'label' => 'clave',
				'rules' => 'trim'
				),			
			array(
				'field' => 'nombres',
				'label' => 'Nombre',
				'rules' => 'trim|required'
				),
		    array(
				'field' => 'RFC',
				'label' => 'RFC',
				'rules' => 'trim|required'
				),
			array(
				'field' => 'correo',
				'label' => 'Correo Electronico',
				'rules' => 'trim|valid_email'
				),			
            array(
				'field' => 'telefonos',
				'label' => 'Telefonos',
				'rules' => 'trim|required'
				),
            array(
                'field' => 'cp',
                'label' => 'Código Postal',
                'rules' => 'trim|required|numeric|exact_length[5]                '
                ),
            array(
                'field' => 'pais',
                'label' => 'Pais',
                'rules' => 'trim|required'
                ),
            array(
                'field' => 'estado',
                'label' => 'Estado',
                'rules' => 'trim|required'
                ),			
            array(
                'field' => 'municipio',
                'label' => 'Municipio',
                'rules' => 'trim|required'
                ),
            array(
                'field' => 'ciudad',
                'label' => 'Localidad',
                'rules' => 'trim|required'
                ),
            array(
                'field' => 'colonia',
                'label' => 'Colonia',
                'rules' => 'trim|required'
                ),
            array(
                'field' => 'noe',
                'label' => 'Numero Exterior',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'noi',
                'label' => 'Numero Interior',
                'rules' => 'trim'
            ),
            array(
                'field' => 'calle',
                'label' => 'Calle',
                'rules' => 'trim|required'
            ),           
            array(
                'field' => 'direccion',
                'label' => 'Direccion',
                'rules' => 'trim|required'
            ),            
            array(
                'field' => 'tipo_pago',
                'label' => 'Tipo de Pago',
                'rules' => 'trim'
            ),
            array(
                'field' => 'regimenFiscal',
                'label' => 'Regimen Fiscal',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'usoCFDI',
                'label' => 'Uso de CFDI',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'formapago',
                'label' => 'Forma de PAgo',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'bancoFe',
                'label' => 'Banco(FE)',
                'rules' => 'trim'
            ),
            array(
                'field' => 'bancoCta',
                'label' => 'Cuenta Bancaria(FE)',
                'rules' => 'trim'
            ),
            array(
                'field' => 'banco',
                'label' => 'Banco',
                'rules' => 'trim'
            ),
            array(
                'field' => 'almacen',
                'label' => 'Almacen',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'grupo',
                'label' => 'Grupo',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'jurisdiccion',
                'label' => 'Jurisdiccion',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'credito',
                'label' => 'Credito',
                'rules' => 'trim|numeric'
            ),
            array(
                'field' => 'dias_dredito',
                'label' => 'Días de Crédito',
                'rules' => 'trim|numeric'
            ),
            array(
                'field' => 'tolerancia',
                'label' => 'Días de Tolerancia',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'imss',
                'label' => 'Imss',
                'rules' => 'trim'
            ),
            array(
                'field' => 'vendedor',
                'label' => 'Vendedor',
                'rules' => 'trim|required'
            ),            
            array(
                'field' => 'establecimiento',
                'label' => 'Establecimiento',
                'rules' => 'trim'
            ),
            array(
                'field' => 'auditoria',
                'label' => 'Auditoria',
                'rules' => 'trim'
            ),
            array(
                'field' => 'vencimiento',
                'label' => 'Vencimiento',
                'rules' => 'trim'
            ),
            array(
                'field' => 'permitir_surtimiento',
                'label' => 'Permitir Surtimiento',
                'rules' => 'trim'
            ),
            array(
                'field' => 'sector_salud',
                'label' => 'Sector Salud',
                'rules' => 'trim'
            ),
            array(
                'field' => 'permitir_envio_paqueteria',
                'label' => 'Envío por Paquetería',
                'rules' => 'trim'
            ),
            array(
                'field' => 'permitir_envio_refrigerados',
                'label' => 'Envío de Refrigerados',
                'rules' => 'trim'
            ),
            array(
                'field' => 'permisos',
                'label' => 'Permisos',
                'rules' => 'trim'
            ),
        );
    }
    

    
    public function index()
    {

        set_time_limit(0);
        $f_keywords = $this->input->get('f_keywords');
        $group      = $this->input->get('group');
        $estado      = $this->input->get('estado');
        $vencido      = $this->input->get('vencido');
        $saldo      = $this->input->get('saldo');
       
        $activo     = $this->input->get('status');
        $antibiotico     = $this->input->get('antibiotico');
        $ordenar     = $this->input->get('ordenar');
        $direccion     = $this->input->get('direccion');
        
        
        $base_where =  [];
        $orWhere = [];

        if(is_numeric($activo))
        {
            $base_where['estatus'] = $activo;
 

        }        
  
        if($_SESSION['id_tipousuario'] == 50){
            $base_where['grupo'] = 'FARMACIA ELITE';

        }else{
            if($group != "")
            {
                $base_where['grupo'] = $group;
            }   
        }   
        if($estado != "")
        {
            $base_where['estado'] = $estado;
        }
        if(is_numeric($saldo))
        {
            if($saldo == 0){
               // $base_where['saldo'] = '0';
               // $orWhere['saldo'] = '';
               // $orWhere['saldo IS NULL']= null ;
                $base_where['saldo = \'0\'  or saldo = \'\' or vencido IS NULL']= null ;


            }
            if($saldo == 1)
                $base_where['saldo >'] = '0';      
        }   
        if(is_numeric($vencido))
        {
            if($vencido == 0){
                //$base_where['vencido' =] = '0';
              //  $orWhere['vencido'] = '';
                $base_where['vencido = \'0\' or vencido = \'\' or vencido IS NULL']= null ;

            }
            if($vencido == 1)
                $base_where['vencido >'] = '0';      
        }   
        $_clientes = $this->db->select('*');
        if($ordenar)
        {
           // $clientes = $this->db->where($asignacion->group_by,$group)
             //                       ->get($asignacion->table)->result();

            if($direccion)
            $_clientes->order_by($ordenar,$direccion);
            else
            $_clientes->order_by($ordenar,'ASC');
                             
            
        }

        if($f_keywords != ""){
          //  $array = array('clave' => $f_keywords, 'nombres' => $f_keywords);
            $base_where['(clave like \'%'.$f_keywords.'%\' or nombres like \'%'.$f_keywords.'%\')' ]= null ;

          //  $_clientes->like('clave',$f_keywords);
           // $_clientes->like('nombres',$f_keywords);

        }
        $clientes = [];
        if( $f_keywords || $group || $estado || $vencido || $saldo ||  $activo || $antibiotico || $ordenar || $direccion)
        { $clientes = 
            $_clientes->select('clientes.*, 
            IFNULL(saldo, 0) saldo,
            IFNULL(vencido, 0) vencido')
            ->from('clientes')
            ->join('clientes_saldos','clientes_saldos.cliente=clientes.clave','LEFT')
            ->where($base_where)
            ->or_where($orWhere)
            ->get()->result_array();
        }
        

        if($_SESSION['id_tipousuario'] == 50){
            $groups = array('FARMACIA ELITE'=>'FARMACIA ELITE'); 

        }else
          {
            $groups = $this->cliente_m->getGrupos(); 
        }

    $estados = $this->cliente_m->getEstados(); 

		$this->template->append_js('clientes/clientes.controller.js')

        ->set('clientes',$clientes)
        ->set('estados',$estados)
        ->set('groups',$groups)
        ->append_metadata('<script type="text/javascript">var clientes='.json_encode($clientes).';</script>');
        $this->build("clientes/index",null, $this->global, NULL , NULL);
    }
    

    public function create($tipo ='')
    {

        $cliente = new StdClass();
        foreach ($this->rules as $rule)
        {
            $cliente->{$rule['field']} = $this->input->post($rule['field']);
        }
        $estados =  $this->vistas->get_EstadosNombres();

        $paises = $this->conf['paises']; 
       // $i_formas_de_pago = $this->conf['i_formas_de_pago'];
       // $establecimiento = $this->conf['establecimiento'];
        $permisos = $this->conf['permisos'];
        $tipo_cartera = $this->conf['tipo_cartera'];
        $establecimientos = $this->conf['establecimiento'];
        $bancosFe = $this->conf['BancosFe'];
        $jurisdiccion = $this->conf['jurisdiccion'];

        $i_formas_de_pago = $this->vistas->getFormaPago();

        $i_uso_cfdi4 = $this->vistas->getUsoCfdi();
        $regimenFiscal = $this->vistas->getRegimenFiscal();
        if($tipo== "elite"){
        $almacenes = $this->vistas->getAlmacenes('FARMACIA ELITE');
        $vendedores = $this->vistas->getVendedores($tipo);
        $cliente->grupo = 'FARMACIA ELITE';

        }
        else{
            $almacenes = $this->vistas->getAlmacenes();
            $vendedores = $this->vistas->getVendedores();

    }


        $this->template
        ->append_js('clientes/clientes.controller.js')
        ->set('i_formas_de_pago',$i_formas_de_pago)
        ->set('bancosFe',$bancosFe)
        ->set('permisos',$permisos)
        ->set('jurisdiccion',$jurisdiccion)
        ->set('establecimientos',$establecimientos)
        ->set('tipo_cartera',$tipo_cartera)
        ->set('cliente',$cliente)
        ->set('tipo',$tipo)
        //->set('consignatarios',$consignatarios)

       ->append_metadata('<script type="text/javascript">var estados='.json_encode($estados).', paises='.json_encode($paises).', municipios = [],localidades = [],colonias = [];</script>')
       ->append_metadata('<script type="text/javascript">var usoCfdi='.json_encode($i_uso_cfdi4).', regimenFiscal='.json_encode($regimenFiscal).', almacenes='.json_encode($almacenes).', formasPago='.json_encode($i_formas_de_pago).';</script>')
       ->append_metadata('<script type="text/javascript">var vendedores='.json_encode($vendedores).', consignatarios = [];</script>')

       //->append_metadata('<script type="text/javascript">var municipiosDestino = [],localidadesDestino = [],coloniasDestino = [];</script>')

        ->enable_parser(false);

        $this->build("clientes/form",null, $this->global, NULL , NULL);
    }

    function edit($id=0)
	{


        $cliente= $this->cliente_m->getCliente($id);
        $info = $this->cliente_m->getOldDataCliente($id);




		if(!$cliente)
		{		  
			$this->session->set_flashdata('error', lang('global:not_found_edit'));
			redirect('clientes');
		}
		
        $this->form_validation->set_rules($this->rules);
            
        if($this->form_validation->run()){
                unset($_POST['btnAction']);			

                //$this->session->set_flashdata('error','falta traduccion');
     
            $Post = $this->input->post();

			$data_extra=array(
  	             'id_cliente'     => $Post['clave'],
			     'id_regimenFiscal'=> str_replace('string:','', $Post['regimenFiscal'])
                );
            $data_cliente = array(                        
                            'nombres' => $Post['nombres'],
                            'RFC' => $Post['RFC'],
                            'correo' => $Post['correo'],
                            'telefonos' => $Post['telefonos'],
                            'cp' => $Post['cp'],
                            'pais' => $Post['pais'],
                            'estado' => $Post['estado'],
                            'municipio' => $Post['municipio'],
                            'ciudad' => $Post['ciudad'],
                            'colonia' => $Post['colonia'],
                            'noe' => $Post['noe'],
                            'noi' => $Post['noi'],
                            'calle' => $Post['calle'],
                            'direccion' => $Post['direccion'],
                            'tipo_pago' => $Post['tipo_pago'],
                           // 'regimenFiscal' => str_replace('string:','', $Post['regimenFiscal']),
                            'usoCFDI' =>  str_replace('string:','', $Post['usoCFDI']),
                            'formapago' =>  str_replace('string:','', $Post['formapago']),
                            'bancoFe' =>  isset($Post['bancoFe'])?str_replace('string:','', $Post['bancoFe']):null,
                            'bancoCta' => $Post['bancoCta'],
                            'banco' => $Post['banco'],
                            'almacen' =>  str_replace('string:','', $Post['almacen']),
                            'grupo' => $Post['grupo'],
                            'jurisdiccion' => $Post['jurisdiccion'],
                            'credito' => $Post['credito'],
                            'dias_credito' => $Post['dias_credito'],
                            'tolerancia' => $Post['tolerancia'],
                            'vendedor' =>  str_replace('string:','', $Post['vendedor']),
                            'tipoCartera' => $Post['tipoCartera'],
                            'clue' => $Post['clue'],
                            'imss' => isset($Post['imss'])?1:0,
                            'observaciones' => isset($Post['observaciones'])?$Post['observaciones']:null,
                            'establecimiento' => isset($Post['establecimiento'])?$Post['establecimiento']:null, 
                            'auditoria' => ($Post['auditoria']!='-0001-11-30'|| $Post['auditoria']!=null||$Post['auditoria']!= '')?$Post["auditoria"]:"0000-00-00",
                            'vencimiento' => ($Post['vencimiento']!='-0001-11-30'|| $Post['vencimiento']!=null||$Post['vencimiento']!= '')?$Post["vencimiento"]:"0000-00-00", 
                            'permitir_surtimiento' => isset($Post['permitir_surtimiento'])?1:0, 
                            'sector_salud' => isset($Post['sector_salud'])?1:0, 
                            'permitir_envio_paqueteria' => isset($Post['permitir_envio_paqueteria'])?1:0, 
                            'permitir_envio_refrigerados' => isset($Post['permitir_envio_refrigerados'])?1:0, 
                            'permisos' => implode(',',$Post['permisos']),  

                    
                
                 );   
                 
                

			if($this->cliente_m->update($id, $data_cliente))
            {
                $regimen = $this->cliente_m->getRegimenCliente($id);
                $status ;//= true;

                if(isset($regimen->id)){
                    if($this->cliente_m->updateRegimenCliente($regimen->id,$data_extra))
                        $status = true;
                }else{
                    if($this->cliente_m->createRegimenCliente($data_extra))
                        $status = true;
                }

                if($status== true && $info){
                    $d = array_merge($data_cliente, $data_extra);
                    $mod = "";
                    foreach($info as $key => $value)
                    {

                        if($d[$key] != $value)
                        {

                            switch($key)
                            {
                                case "nombres":
                                 $name = "<b>Nombres:</b>";
                                break;
                                case "RFC":
                                 $name = "<b>RFC:</b>";
                                break;
                                case "correo":
                                 $name = "<b>Correo:</b>";
                                break;
                                case "telefonos":
                                 $name = "<b>Telefonos:</b>";
                                break;
                                case "direccion":
                                 $name = "<b>Dirección:</b>";
                                break;
                                case "calle":
                                 $name = "<b>Calle:</b>";
                                break;
                                case "noe":
                                 $name = "<b>Núm. exterior:</b>";
                                break;
                                case "noi":
                                 $name = "<b>Núm. interior:</b>";
                                break;
                                case "colonia":
                                 $name = "<b>Colonia:</b>";
                                break;
                                case "cp":
                                 $name = "<b>Código Postal:</b>";
                                break;
                                case "ciudad":
                                 $name = "<b>Ciudad:</b>";
                                break;
                                case "municipio":
                                 $name = "<b>Municipio:</b>";
                                break;
                                case "estado":
                                 $name = "<b>Estado:</b>";
                                break;
                                case "pais":
                                 $name = "<b>País:</b>";
                                break;
                                case "almacen":
                                 $name = "<b>Almacen:</b>";
                                break;
                                case "vendedor":
                                 $name = "<b>Vendedor:</b>";
                                break;
                                case "grupo":
                                 $name = "<b>Grupo:</b>";
                                break;
                                case "credito":
                                 $name = "<b>Crédito:</b>";
                                break;
                                case "dias_credito":
                                 $name = "<b>Días de crédito:</b>";
                                break;
                                case "tolerancia":
                                 $name = "<b>Días de tolerancia:</b>";
                                break;
                                case "clue":
                                 $name = "<b>CLUE:</b>";
                                break;
                                case "tipoCartera":
                                 $name = "<b>Tipo de cartera:</b>";
                                break;
                                case "imss":
                                 $name = "<b>IMSS:</b>";
                                break;
                                case "banco":
                                 $name = "<b>Banco:</b>";
                                break;
                                case "observaciones":
                                 $name = "<b>Observaciones:</b>";
                                break;
                                case "jurisdiccion":
                                 $name = "<b>Jurisdicción:</b>";
                                break;
                                // case "antibio":
                                 // $name = "<b>Distribuidor Antibióticos:</b>";
                                // break;
                                case "caducidad":
                                 $name = "<b>Mostrar caducidad en factura:</b>";
                                break;
                                case "descuento":
                                 $name = "<b>Descuento:</b>";
                                break;
                                case "cobranza":
                                 $name = "<b>Cobranza:</b>";
                                break;
                                case "metodoPago":
                                 $name = "<b>Método de pago:</b>";
                                break;
                                case "bancoCta":
                                 $name = "<b>Cuenta bancaria (FE):</b>";
                                break;
                                case "bancoFe":
                                 $name = "<b>Banco (FE):</b>";
                                break;
                                case "permisos":
                                 $name = "<b>Permisos:</b>";
                                break;
                                case "auditoria":
                                    $name = "<b>Última auditoría:</b>";	
                                break;
                                case "vencimiento":
                                    $name = "<b>Vencimiento:</b>";	
                                break;
                                case "usoCFDI":
                                    $name = "<b>Uso CFDI:</b>";	
                                break;
                                case "formapago":
                                    $name = "<b>Forma de pago:</b>";	
                                break;                                
                                case "id_regimenFiscal":
                                    $name = "<b>Regimen Fiscal:</b>";	
                                break;
                                                                

                            }
                            $mod .= $name."|".$d[$key]."|".$value."\n";
                        }
                    }

                    if(strlen($mod) > 0)
                    {
                       // print_r($mod);
                       $this->cliente_m->agregarHistorico($id, $mod);
                    }

                    $sdkCliente = $this->cliente_m->getClienteSdk($id);

                    if($sdkCliente){
                        $this->cliente_m->updateClienteSdk($id);
                    }else{
                        $this->cliente_m->insertClienteSdk($id);
                    }
                  //  exit();
                

                }
                
                //$this->session->set_flashdata('success',sprintf(lang('conceptos:save_success'),$input['nombre']));
				redirect('clientes/edit/'.$id);
			}
            else
            {
				//$this->session->set_flashdata('error','falta traduccion');
				redirect('clientes/edit/'.$id);
			}
		}
        
        elseif($_POST){  

          //  print_r((Object)$_POST);
            $cliente=(Object)$_POST;

/*            $cliente->pais = str_replace('string:','', $cliente->pais);
            $cliente->estado = str_replace('string:','', $cliente->estado);
            $cliente->municipio = str_replace('string:','', $cliente->municipio);
            $cliente->ciudad = str_replace('string:','', $cliente->ciudad);
            $cliente->colonia = str_replace('string:','', $cliente->colonia);*/
            $cliente->regimenFiscal = isset($cliente->regimenFiscal)?str_replace('string:','', $cliente->regimenFiscal):null;
            $cliente->usoCFDI = isset($cliente->usoCFDI)?str_replace('string:','', $cliente->usoCFDI):null;
            $cliente->formapago = isset($cliente->formapago)?str_replace('string:','', $cliente->formapago):null;
            $cliente->bancoFe = isset($cliente->bancoFe)?str_replace('string:','', $cliente->bancoFe):null;
            $cliente->vendedor = isset($cliente->vendedor)?str_replace('string:','', $cliente->vendedor):null;
            $cliente->almacen = isset($cliente->almacen)?str_replace('string:','', $cliente->almacen):null;
    

        }

        $estados =  $this->vistas->get_EstadosNombres();
        $municipios = $this->vistas->get_MunicipiosNombres($cliente->estado);
        $localidades = $this->vistas->get_LocalidadesNombres($cliente->estado);
        $colonias = $this->vistas->get_ColoniasNombres($cliente->cp);

        $paises = $this->conf['paises']; 
        //$i_formas_de_pago = $this->conf['i_formas_de_pago'];
       // $establecimiento = $this->conf['establecimiento'];
        $permisos = $this->conf['permisos'];
        $tipo_cartera = $this->conf['tipo_cartera'];
        $establecimientos = $this->conf['establecimiento'];
        $bancosFe = $this->conf['BancosFe'];
        $jurisdiccion = $this->conf['jurisdiccion'];
        
     //   print_r($cliente->permisos);
        $cliente->permisos = is_array($cliente->permisos)?$cliente->permisos:($cliente->permisos?explode(",", $cliente->permisos):[$cliente->permisos]);
      //  $cliente->consignatarios = $this->cliente_m->getConsignatarios($id);
        
        $consignatarios = $this->cliente_m->getConsignatarios($id);
//        print_r($permisos_cliente);

        $i_formas_de_pago = $this->vistas->getFormaPago();
        $i_uso_cfdi4 = $this->vistas->getUsoCfdi();
        $regimenFiscal = $this->vistas->getRegimenFiscal();
        $almacenes = $this->vistas->getAlmacenes();
        $vendedores = $this->vistas->getVendedores();

        //$cliente->regimenFiscal = $this->cliente_m->getRegimenCliente($cliente->clave);




/*
        $_regimenFiscal = isset($cliente->id_regimenFiscal)?$cliente->id_regimenFiscal:'';
        if($_regimenFiscal != "")
            $cliente->regimenFiscal = $_regimenFiscal?$_regimenFiscal:'';
*/


        $this->template
        //->title($this->module_details['name'],'Modificar')
        ->append_js('clientes/clientes.controller.js')
        //->set('i_formas_de_pago',$i_formas_de_pago)
        ->set('bancosFe',$bancosFe)
        ->set('permisos',$permisos)
        ->set('jurisdiccion',$jurisdiccion)
        ->set('establecimientos',$establecimientos)
        ->set('tipo_cartera',$tipo_cartera)
        ->set('cliente',$cliente)

       ->append_metadata('<script type="text/javascript">var estados='.json_encode($estados).', paises='.json_encode($paises).', municipios = '.json_encode($municipios).',localidades = '.json_encode($localidades).',colonias = '.json_encode($colonias).';</script>')
       ->append_metadata('<script type="text/javascript">var usoCfdi='.json_encode($i_uso_cfdi4).', regimenFiscal='.json_encode($regimenFiscal).', almacenes='.json_encode($almacenes).', formasPago='.json_encode($i_formas_de_pago).';</script>')
       ->append_metadata('<script type="text/javascript">var vendedores='.json_encode($vendedores).', consignatarios = '.json_encode($consignatarios).'</script>')
       ->enable_parser(false);

      
       $this->build("clientes/form",null, $this->global, NULL , NULL);
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

                if($data =  $this->vistas->get_DatosCodPostalDescripciones($cp))
                {                        
                    if($colonias = $this->vistas->get_ColoniasNombres($cp))
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

                if($data =  $this->vistas->get_MunicipiosNombres($estado))
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

                if($data =  $this->vistas->get_LocalidadesNombres($estado))
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



    ///////////////////////funciones consignatarios AngularJS///////////////////////
    public function newConsignatario()
    {
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
            $data = $this->input->post('consginatario');
                  
            if($data != '' || $data != null){

                    $insert_data =   
                    array(
                        'cliente' => $data['id_cliente'],
                        'texto' => $data['consignatario']

                    );

                    $consignatario =  $this->cliente_m->insertConsignatarios($insert_data);                   

                    if($consignatario){
                            
                            $result['data'] = $consignatario;
                            $result['message'] = "Se inserto correctamento los datos";
                            $result['status'] = true;   
                    }
                    else{
                        $result['message'] = " Ocurrio un error al guradar el consignatario. Contacte al adminstrador";

                    }
            
        }
        else
        {
                $result['message'] = " Error interno. Comuniquese con el adminsitrador";
        }

        }
        return $this->template->build_json($result);             


    }
    public function updateConsignatario()
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
            $data = $this->input->post('consginatario');
                  
            if($data != '' || $data != null){

                    $insert_data =   
                    array(
                        'texto' => $data['consignatario']
                    );

                    $consignatario =  $this->cliente_m->updateConsignatarios($data['cliente'],$insert_data);                   

                    if($consignatario){
                            
                            $result['data'] = $consignatario;
                            $result['message'] = "Se actualizo correctamento los datos";
                            $result['status'] = true;   
                    }
                    else{
                        $result['message'] = " Ocurrio un error al actualizar el consignatario. Contacte al adminstrador";

                    }
            
        }
        else
        {
                $result['message'] = " Error interno. Comuniquese con el adminsitrador";
        }

        }
        return $this->template->build_json($result);             


    }

    public function deleteConsignatario()
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

            $idConsignatarios = $this->input->post('idConsignatario');
            
            if($idConsignatarios != '' || $idConsignatarios != null){

                if($data =  $this->cliente_m->getConsignatarios($idConsignatarios))
                {                        
                    if($this->cliente_m->deleteConsignatarios())
                        $result['status'] = true;   
                }
                else
                {
                     $result['message'] = "No se encontraro Consignatario";
                } 
            }
            else
            {
                $result['message'] = "Consignatario no definido";
            }

        }

        return $this->template->build_json($result);  
    }

    public function updateStatus()
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
        else {
            if((isAdmin() or isAdminCXC2011())){

                $clave = $this->input->post('clave');
                $estatus = $this->input->post('estatus');
                
                if($clave != '' || $estatus != null){

                    $data=array(
                      'estatus'=> $estatus == '1'?'0':'1'
                     );

                    if($id = $this->cliente_m->update($clave, $data))
                    {                        
                        $result['status'] = true;  
                        $result['data'] = $data;  
                        $result['message'] = "Registro actualizado correctamente";
 
                    }
                }
                else
                {
                     $result['message'] = "Datos no definidos";
                }
            }
            else{
                    $result['message'] = "No cuenta con los permisos necesarios";
    
                }
                

        }

        return $this->template->build_json($result);  
    }

    public function getHistorico()
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
        else {
            if((isAdmin())){

                $clave = $this->input->post('clave');
                
                if($clave != '' || $estatus != null){

                    if($data = $this->cliente_m->getHistorico($clave))
                    {                        

                        foreach($data as $key => $d)
                        {
                          $m = explode("\n",$d['modificacion']);
                            $modif = "";																		
                            for($i = 0; $i < count($m); $i++)
                            {
                                $modi = explode("|",$m[$i]);
                                if(strlen(trim($modi[1])) == 0) $modi[1] = '<i>~Vacío~</i>';
                                if(strlen(trim($modi[2])) == 0) $modi[2] = '<i>~Vacío~</i>';
                                if($modi[0] == "<b>Distribuidor Antibióticos:</b>" || $modi[0] == "<b>Mostrar caducidad en factura:</b>" || $modi[0] == "<b>Vende Controlados:</b>")
                                {
                                    $modi[1] = ($modi[1] == 1) ? 'Si' : 'No';
                                    $modi[2] = ($modi[2] == 1) ? 'Si' : 'No';
                                }
                                if($modi[0] == "<b>Vendedor:</b>")
                                {
                                   // $modi[1] = $db->fetchCell("SELECT concat(nombres,' ',apellidop,' ',apellidom) FROM usuarios WHERE id_usuario = {$modi[1]}");
                                   // $modi[2] = $db->fetchCell("SELECT concat(nombres,' ',apellidop,' ',apellidom) FROM usuarios WHERE id_usuario = {$modi[2]}");
                                }
                                if($modi[0] == "<b>Permisos:</b>")
                                {
                                    $aux1 = explode(',', $modi[1]);
                                    $modi1 = '';
                                    foreach ($aux1 as $key => $value) {
                                        $modi1[] = $permisos[$value];
                                    }
                                    $aux2 = explode(',', $modi[2]);
                                    $modi2 = '';
                                    foreach ($aux2 as $key => $value) {
                                        $modi2[] = $permisos[$value];
                                    }
                                    $modi[1] = trim(implode(', ', $modi1));
                                    $modi[2] = trim(implode(', ', $modi2));
                                }
                                if($modi[0] == "<b>Almacen:</b>")
                                {
                                   // $modi[1] = $db->fetchCell("SELECT descripcion FROM almacenes WHERE id_almacen = {$modi[1]}");
                                   // $modi[2] = $db->fetchCell("SELECT descripcion FROM almacenes WHERE id_almacen = {$modi[2]}");
                                }
                                if($modi[0] == "<b>Método de pago:</b>")
                                {
                                    $modi[1] = ($modi[1] == '0') ? '<i>~Vacío~</i>' : $modi[1];
                                    $modi[2] = ($modi[2] == '0') ? '<i>~Vacío~</i>' : $modi[2];
                                }
                                if($modi[0] == "<b>Uso CFDI:</b>")
                                {
                                    $modi[1] = ($modi[1] == '') ? '<i>~Vacío~</i>' : $i_uso_cfdi[$modi[1]] . " ({$modi[1]})";
                                    $modi[2] = ($modi[2] == '') ? '<i>~Vacío~</i>' : $i_uso_cfdi[$modi[2]] . " ({$modi[2]})";	
                                }
                                if($modi[0] == "<b>Forma de pago:</b>")
                                {
                                    $modi[1] = ($modi[1] == '') ? '<i>~Vacío~</i>' : $i_formas_de_pago[$modi[1]];
                                    $modi[2] = ($modi[2] == '') ? '<i>~Vacío~</i>' : $i_formas_de_pago[$modi[2]];	
                                }
                                if($modi[0] == "<b>IMSS:</b>")
                                {
                                    $modi[1] = ($modi[1] == '0') ? 'NO' : 'SI';
                                    $modi[2] = ($modi[2] == '0') ? 'NO' : 'SI';
                                }
                                if($modi[0] == "<b>Sector Salud:</b>")
                                {
                                    $modi[1] = ($modi[1] == '0') ? 'NO' : 'SI';
                                    $modi[2] = ($modi[2] == '0') ? 'NO' : 'SI';
                                }
                                if($modi[0] == "<b>Permitir Surtimiento sin OC/Pedido:</b>")
                                {
                                    $modi[1] = ($modi[1] == '0') ? 'NO' : 'SI';
                                    $modi[2] = ($modi[2] == '0') ? 'NO' : 'SI';
                                }
                                if($modi[0] == "<b>Permitir Envío por Paquetería:</b>")
                                {
                                    $modi[1] = ($modi[1] == '0') ? 'NO' : 'SI';
                                    $modi[2] = ($modi[2] == '0') ? 'NO' : 'SI';
                                }
                                if($modi[0] == "<b>Permitir Envío de Refrigerados:</b>")
                                {
                                    $modi[1] = ($modi[1] == '0') ? 'NO' : 'SI';
                                    $modi[2] = ($modi[2] == '0') ? 'NO' : 'SI';
                                }
                                if($modi[0] == "<b>Establecimiento:</b>")
                                {
                                    $modi[1] = ($modi[1] == '') ? '<i>~Vacío~</i>' : $modi[1];
                                    $modi[2] = ($modi[2] == '') ? '<i>~Vacío~</i>' : $modi[2];	
                                }
                                $modif .= ($modi[0] == "Creación del cliente")
                                                    ? '<b>'.$modi[0].'</b>'
                                                    : $modi[0]."<table><tr style='background-color:transparent !important'><td class='negritas' style='font-family: monospace'>+</td>
                                                        <td>".$modi[1]."</td></tr>
                                                        <tr style='background-color:transparent !important'><td class='negritas' style='font-family: monospace'>-</td>
                                                        <td> ".$modi[2]."</td></tr></table>";
                               

                            }	
                            $data[$key]['modif'] = $modif;


                        }
                        $result['status'] = true;  
                        $result['data'] = $data;  
 
                    }
                    else{
                        $result['message'] = "No se encontraron modificaciones";

                    }

                }
                else
                {
                     $result['message'] = "Datos no definidos";
                }
            }
            else{
                    $result['message'] = "No cuenta con los permisos necesarios";
    
                }
                

        }

        return $this->template->build_json($result);  
    }
}




?>