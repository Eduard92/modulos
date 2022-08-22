<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Traslado_model extends MY_Model
{

    public function __construct()
	{
        $this->_table = 'traslado_indice';
       //$this->primary_key = 'id';
       // $this->soft_deletes = true;


		parent::__construct();
	}


    public function saveCFDITraslado($dataIndice, $facturas, $productos){

        $this->db->trans_start();
        
        $this->_table = 'traslado_indice';

        $id = $this->insert($dataIndice);

        foreach($facturas as $factura){

            $dataFacturas = array(
                'factura' => $factura,
                'id_traslado'=> $id
            );


            $this->db->insert('traslado_facturas',$dataFacturas);


        }

        foreach($productos as  $producto){

            $dataProductos = array(
                'id_producto' => $producto['id_producto'],
                'cantidad'=> $producto['cantidad'],
                'VAlorUnitario' => $producto['precio_unitario'],
                'iva' => $producto['impuesto'],
                'Importe' => $this->_getImporte($producto['precio_unitario'], $producto['impuesto'], $producto['cantidad']),
                'ClaveProdServ'=>$producto['claveSAT'],
                'ClaveUnidad' =>$producto['claveUnidad'],
                'Unidad' => $producto['unidad'],
                'PesoEnKg' =>$producto['PesoBruto']?$producto['PesoBruto']:0,
                'Embalaje' => $producto['embalaje']?$producto['embalaje']:NULL,
                'Moneda' => $dataIndice['moneda'],
                'id_traslado' => $id
            );

            
            $this->db->insert('traslado_conceptos',$dataProductos);


        }

        if ($this->db->trans_status() === FALSE){

            $this->db->trans_rollback();
            $this->db->trans_complete();

            return false;
            
        } 
        else {
            
            $this->db->trans_commit();
            $this->db->trans_complete();

            return $id;
            
        }

    }

    public function saveComplemento($DataComplemento, $origen, $destino){

        $this->complemento = $this->config->item('traslado_conf');

        $this->db->trans_start();
        
        $this->_table = 'traslado_carta_porte';

        $idCartaPorte = $this->insert($DataComplemento);

        

        $_dataOrigen = array(
            'TipoUbicacion' => 'Origen',
            'RFCRemitenteDestinatario'=> $this->complemento['Emisor']['Rfc'],
            'NombreRemitenteDestinatario'=> $this->complemento['Emisor']['Nombre'],
            'FechaHoraSalidaLlegada' => date("Y-m-d H:i:s", strtotime($origen['fechaSalida'])) ,
            'DistanciaRecorrida' =>$DataComplemento['TotalDistRec'],
            'Calle' =>$origen['calle'],
            'NumeroExterior' =>$origen['nExterior'],
            'NumeroInterior' =>$origen['nInterior'],
            'Colonia' => $origen['colonia'],
            'Localidad'=>$origen['localidad'],
            'Municipio'=>$origen['municipio'],
            'Estado'=>$origen['estado'],
            'Pais' =>$origen['pais'],
            'id_carta_porte' => $idCartaPorte

        );

        $_dataDestino = array(
            'TipoUbicacion' => 'Destino',
            'RFCRemitenteDestinatario'=> $this->complemento['Receptor']['Rfc'],
            'NombreRemitenteDestinatario'=> $this->complemento['Receptor']['Nombre'],
            'FechaHoraSalidaLlegada' => date("Y-m-d H:i:s", strtotime($destino['fechaLlegada'])) ,
            'DistanciaRecorrida' =>$DataComplemento['TotalDistRec'],
            'Calle' =>$destino['calle'],
            'NumeroExterior' =>$destino['nExterior'],
            'NumeroInterior' =>$destino['nInterior'],
            'Colonia' => $destino['colonia'],
            'Localidad'=>$destino['localidad'],
            'Municipio'=>$destino['municipio'],
            'Estado'=>$destino['estado'],
            'Pais' =>$destino['pais'],
            'id_carta_porte' => $idCartaPorte

        );


        $this->_table = 'traslado_carta_porte_ubicaciones';

         $this->insert($_dataOrigen);
         $this->insert($_dataDestino);


        if ($this->db->trans_status() === FALSE){

            $this->db->trans_rollback();
            $this->db->trans_complete();

            return false;
            
        } 
        else {
            
            $this->db->trans_commit();
            $this->db->trans_complete();

            return true;
            
        }

    }


    public function deleteTraslado($id){


        $this->db->trans_start();
                
		$this->db->where('id_traslado',$id)->delete('traslado_facturas');
		$this->db->where('id_traslado',$id)->delete('traslado_conceptos');

        $this->db->where('id',$id)->delete('traslado_indice');


        if ($this->db->trans_status() === FALSE){

            $this->db->trans_rollback();
            $this->db->trans_complete();

            return false;
            
        } 
        else {
            
            $this->db->trans_commit();
            $this->db->trans_complete();

            return true;
            
        }

    }

    public function saveFacturasTraslado($dataIndice, $facturas, $productos, $id_cfdi){


        foreach($facturas as $factura){

            $dataFacturas = array(
                'factura' => $factura,
                'id_traslado'=> $id_cfdi
            );


            $this->db->insert('traslado_facturas',$dataFacturas);


        }

        foreach($productos as $producto){

            $dataProductos = array(
                'id_producto' => $producto->id_producto,
                'cantidad'=> $producto->cantidad,
                'VAlorUnitario' => $producto->precio_unitario,
                'iva' => $producto->impuesto,
                'Importe' => _getImporte($producto->precio_unitario, $producto->impuesto, $producto->cantidad),
                'ClaveProdServ'=>$producto->claveSAT,
                'ClaveUnidad' =>$producto->claveUnidad,
                'Unidad' => $producto->unidad,
                'PesoEnKg' =>$producto->PesoBruto?$producto->PesoBruto:0,
                'Embalaje' => $producto->embalaje?$producto->embalaje:NULL,
                'Moneda' => $dataIndice['moneda'],
                'id_traslado' => $id_cfdi
            );

            
            $this->db->insert('traslado_conceptos',$dataProductos);


        }

        if ($this->db->trans_status() === FALSE){

            $this->db->trans_rollback();

            return false;
            
        } 
        else {
            
            $this->db->trans_commit();

            return $true;
            
        }

    }

    public function _getImporte($precio, $iva, $cantidad){

    $subTotal = $precio * $cantidad;

    $precio = $subTotal + ($subTotal*$iva/100);

    return number_format($precio, 2);
    }

    public function  getPorductosTraslado($id){

        $where = array(
            'id_traslado' =>$id
    );

       $this->db->select('traslado_conceptos.*, productos.descripcion')
       ->from('traslado_conceptos')
       ->join('productos', 'productos.id_producto = traslado_conceptos.id_producto')
       ->where($where);

       return   $this->db->get()->result_object();


    }


}

  