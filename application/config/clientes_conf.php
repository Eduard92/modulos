<?php defined('BASEPATH') OR exit('No direct script access allowed');

// define all custom fields that a new installation should have

$config['paises'] = array(
    'MEX' => 'México',
    'BLZ' => 'Belice'

);


$config['i_uso_cfdi33'] = array(
    "G01" => "ADQUISICION DE MERCANCIAS",
    "G02" => "DEVOLUCIONES, DESCUENTOS O BONIFICACIONES",
    "G03" => "GASTOS EN GENERAL",
    "I01" => "CONSTRUCCIONES",
    "I02" => "MOBILARIO Y EQUIPO DE OFICINA POR INVERSIONES",
    "I03" => "EQUIPO DE TRANSPORTE",
    "I04" => "EQUIPO DE COMPUTO Y ACCESORIOS",
    "I05" => "DADOS, TROQUELES, MOLDES, MATRICES Y HERRAMENTAL",
    "I06" => "COMUNICACIONES TELEFONICAS",
    "I07" => "COMUNICACIONES SATELITALES",
    "I08" => "OTRA MAQUINARIA Y EQUIPO",
    "D01" => "HONORARIOS MEDICOS, DENTALES Y GASTOS HOSPITALARIOS.",
    "D02" => "GASTOS MEDICOS POR INCAPACIDAD O DISCAPACIDAD",
    "D03" => "GASTOS FUNERALES.",
    "D04" => "DONATIVOS.",
    "D05" => "INTERESES REALES EFECTIVAMENTE PAGADOS POR CREDITOS HIPOTECARIOS (CASA HABITACION).",
    "D06" => "APORTACIONES VOLUNTARIAS AL SAR.",
    "D07" => "PRIMAS POR SEGUROS DE GASTOS MEDICOS.",
    "D08" => "GASTOS DE TRANSPORTACION ESCOLAR OBLIGATORIA.",
    "D09" => "DEPOSITOS EN CUENTAS PARA EL AHORRO, PRIMAS QUE TENGAN COMO BASE PLANES DE PENSIONES.",
    "D10" => "PAGOS POR SERVICIOS EDUCATIVOS (COLEGIATURAS)",
    "P01" => "POR DEFINIR",
);
$config['permisos'] = array('Normal', 'Controlado', 'Oncológico', 'Antibiótico', 'Biológico', 'Vacuna', 'Toxoide', 'Suero de origen animal', 'Antitoxina de origen animal', 'Hemoderivado', 'Controlado G1', 'Controlado G2', 'Controlado G3');

    
$config['i_formas_de_pago'] = array(
    "01" => "EFECTIVO (01)",
    "02" => "CHEQUE NOMINATIVO (02)",
    "03" => "TRANSFERENCIA ELECTRÓNICA DE FONDOS (03)",
    "04" => "TARJETA DE CRÉDITO (04)",
    "05" => "MONEDERO ELECTRÓNICO (05)",
    "06" => "DINERO ELECTRÓNICO (06)",
    "08" => "VALES DE DESPENSA (08)",
    "12" => "DACIÓN EN PAGO (12)",
    "13" => "PAGO POR SUBROGACIÓN (13)",
    "14" => "PAGO POR CONSIGNACIÓN (14)",
    "15" => "CONDONACIÓN (15)",
    "17" => "COMPENSACIÓN (17)",
    "23" => "NOVACIÓN (23)",
    "24" => "CONFUSIÓN (24)",
    "25" => "REMISIÓN DE DEUDA (25)",
    "26" => "PRESCRIPCIÓN O CADUCIDAD (26)",
    "27" => "A SATISFACCIÓN DEL ACREEDOR (27)",
    "28" => "TARJETA DE DÉBITO (28)",
    "29" => "TARJETA DE SERVICIOS (29)",
    "30" => "APLICACIÓN DE ANTICIPOS (30)",
    "99" => "POR DEFINIR (99)",
);
$config['regimenFiscal']  = array(
'601' =>'General de Ley Personas Morales',
'603' =>'Personas Morales con Fines no Lucrativos',
'605' =>'Sueldos y Salarios e Ingresos Asimilados a Salarios',
'606' =>'Arrendamiento',
'607' =>'Régimen de Enajenación o Adquisición de Bienes',
'608' =>'Demás ingresos',
'610' =>'Residentes en el Extranjero sin Establecimiento Permanente en México',
'611' =>'Ingresos por Dividendos (socios y accionistas)',
'612' =>'Personas Físicas con Actividades Empresariales y Profesionales',
'614' =>'Ingresos por intereses',
'615' =>'Régimen de los ingresos por obtención de premios',
'616' =>'Sin obligaciones fiscales',
'620' =>'Sociedades Cooperativas de Producción que optan por diferir sus ingresos',
'621' =>'Incorporación Fiscal',
'622' =>'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras',
'623' =>'Opcional para Grupos de Sociedades',
'624' =>'Coordinados',
'625' =>'Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas',
'626' =>'Régimen Simplificado de Confianza');


$config['establecimiento']  = array(
   // '' =>'No Definido',
    'FARMACIA' =>'Farmacia',
    'ALMACEN' =>'Almacen');


$config['tipo_cartera']  = array(
        'GOBIERNO' =>'Gobierno',
        'PRIVADO' =>'Privado');

$config['BancosFe']  = array(
    //'' =>'Ninguno',
    'BANAMEX'=>'BANAMEX',
    'BANCA MIFEL'=>'BANCA MIFEL',
    'BANCOMER'=>'BANCOMER',
    'BANORTE'=>'BANORTE',
    'BANCO DEL BAJÍO'=>'BANCO DEL BAJÍO',
    'BANXICO'=>'BANXICO',
    'HSBC'=>'HSBC',
    'INBURSA'=>'INBURSA',
    'SANTANDER'=>'SANTANDER',
    'SCOTIABANK'=>'SCOTIABANK',
);

$config['jurisdiccion']  = array(
    //'' =>'Ninguno',
    '1'=>'1',
    '2'=>'2',
    '3'=>'3'

);

?>

