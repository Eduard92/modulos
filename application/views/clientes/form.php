<section ng-controller="InputCtrl" >
        <?php if(isAdmin() && $this->method != 'create'){ ?>
              <a href="#" uib-tooltip="Ver Historico de Cambios" ng-click="historico('<?=$cliente->clave?>')" class="btn btn-primary pull-right">Historico</a> 
        <?php } ?>

    <?php $hidden = array('clave' => $cliente->clave);

    echo form_open('','name="form" id="form"',$hidden);?>
    <div class="row">
        <div class="col-md-12" id="">




                                <h3>Datos Generales</h3>
                                <div class="divider"></div>
                                <div class="row"><!--row datos generales-->

                                <?php if(validation_errors()){?>
                                       <div class="alert alert-danger"><?=validation_errors()?></div>
                                <?php }?>
                                           
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre Completo *</label>
                                                <?=form_input('nombres',NULL,'class="form-control"  ng-required="form.nombres"  ng-model="nombres"   ng-init="nombres=\''.$cliente->nombres.'\'"  ')?>      
                                                    
                                                    
                                        </div>

                                    </div> 

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>RFC *</label>
                                            <?=form_input('RFC',NULL,'class="form-control"  ng-required="form.rfc"  ng-model="rfc"  ng-blur="validaRFC(rfc)"  ng-init="rfc=\''.$cliente->RFC.'\'" ')?>    
                                            <div class="alert alert-danger alert-dismissible" role="alert" ng-show="errorMsg">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong>Error: </strong> {{errorMsg}}.
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Correo Electronico</label>
                                            <?=form_input('correo',NULL,'class="form-control"  ng-model="correo"   ng-init="correo=\''.$cliente->correo.'\'"  ')?>                                                    
                                        </div>
                                    </div> 

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefonos *</label>
                                            <?=form_input('telefonos',NULL,'class="form-control"  ng-required="form.telefonos"  ng-model="telefonos"   ng-init="telefonos=\''.$cliente->telefonos.'\'"  ')?>                                                    
                                        </div>
                                    </div> 

                                </div><!--/row-datos generales-->
                            
                                <hr>
                                <!-- Direccion --> 
                                <h3>Domicilio</h3>
                                <div class="divider"></div>

                                    <div class="row"><!-- row -->

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Codigo Postal *</label>
                                                
                                                        <?=form_input(array('name'=>'cp', 'min'=>'0'),NULL,'class="form-control"    ng-blur ="getCP(codigoPostal)" ng-required="form.codigoPostal"  ng-model="codigoPostal"   ng-init="codigoPostal=\''.$cliente->cp.'\'"  '.($this->method=='details'?'readonly':''))?>                                                    

                                            </div>
                                        </div> 
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Pais *</label>
                                                <select name="pais"  class="form-control"    ng-required="form.f_pais"  ng-options="f_pais  for f_pais in paises track by f_pais"  ng-model="f_pais"  ng-readonly=" '<?=$this->method?>'== 'details'"  <?= $this->method!='create'?'ng-init="f_pais=\''.$cliente->pais.'\'"':''?>>>

                                                <option value=""> [ Elegir ] </option>

                                                </select>                                            
                                            </div>
                                        </div>  
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Estado *</label>
                                                        <select name="estado"  class="form-control"   ng-required="form.f_estado"  ng-options="f_estado for f_estado in estados track by f_estado"  ng-model="f_estado" ng-change="f_estado_Change(f_estado)" ng-readonly="'<?=$this->method?>'== 'details'" <?= $this->method!='create'?'ng-init="f_estado=estados[\''.$cliente->estado.'\']"':''?>>

                                                        <option value=""> [ Elegir ] </option>

                                                        </select>
                                            </div>
                                        </div> 
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Municipio *</label>
                                                        <select name="municipio"  class="form-control" required  ng-required="form.f_municipio"  ng-options="f_municipio for f_municipio in municipios track by f_municipio"   ng-model="f_municipio" ng-readonly="municipioEncontrado == true && codigoPostal || '<?=$this->method?>'== 'details'" <?= $cliente->municipio!='' || $cliente->municipio!=NULL ?'ng-init="f_municipio=municipios[\''.$cliente->municipio.'\']"':''?>>
                                                        <option value=""> [ Elegir ] </option>

                                                        </select>

                                            </div>
                                        </div> 
                                        <?php //print_r($cliente->municipio!)
                                        //print_r($cliente->municipio!='' || $cliente->municipio!=NULL ?'no null':'null');?>

                                    </div><!--/row -->

                                    <div class="row"><!-- row-->

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Localidad (Antes Ciudad) *</label>
                                                        <select name="ciudad"  class="form-control"  ng-required="form.localidad"  ng-readonly="'<?=$this->method?>'== 'details'"  ng-options="f_localidad for f_localidad in localidades track by f_localidad"  ng-model="f_localidad" <?= $this->method!='create'?'ng-init="f_localidad=localidades[\''.$cliente->ciudad.'\']"':''?>>
                                                                <option value=""> [ Elegir ] </option>
                                                        </select>
                                            </div>
                                        </div>  

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Colonia *</label>
                                                        <select name="colonia"  class="form-control"  ng-required="form.f_colonia" ng-readonly="'<?=$this->method?>'== 'details'"  ng-options=" f_colonia for f_colonia in colonias track by f_colonia"  ng-model="f_colonia" <?= $this->method!='create'?'ng-init="f_colonia=colonias[\''.$cliente->colonia.'\']"':''?>>
                                                        <option value=""> [ Elegir ] </option>
                                                        </select>
                                            </div>
                                        </div> 

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>N° Exterior *</label>
                                                        <input type="text" name="noe" ng-required="form.nExterior"  class="form-control"  ng-model="nExterior" ng-readonly="'<?=$this->method?>'== 'details'" <?= $this->method!='create'?'ng-init="nExterior=\''.$cliente->noe.'\'"':''?>>
                                            </div>
                                        </div> 

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>N° Interior</label>
                                                        <input type="text" name="noi" class="form-control"  ng-model="NInterior" ng-readonly="'<?=$this->method?>'== 'details'"  <?= $this->method!='create'?'ng-init="NInterior=\''.$cliente->noi.'\'"':''?>>
                                            </div>
                                        </div> 

                                    </div><!-- /row-->
                                    <div class="row"><!--row-->

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Calle *</label>
                                                        <input type="text" name="calle" class="form-control " ng-required="form.calle"  ng-model="Calle" ng-readonly="'<?=$this->method?>'== 'details'" <?= $this->method!='create'?'ng-init="Calle=\''.$cliente->calle.'\'"':''?>>
                                            </div>            
                                        </div>           
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Direccion * </label>
                                                        <input type="text" name="direccion" class="form-control "  ng-required="form.direccion" ng-model="direccion" ng-readonly="'<?=$this->method?>'== 'details'" <?= $this->method!='create'?'ng-init="direccion=\''.$cliente->direccion.'\'"':''?>>
                                            </div>            
                                        </div>  
                                    </div><!--row-->

                                <!-- /origen --> 
                                <hr>
                                
                                <h3>Datos Adicionales</h3>
                                <div class="divider"></div>
                                    <div class="row"><!--row -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Tipo de pago</label>
                                                    <input type="text" name="tipo_pago" class="form-control"  ng-readonly="'<?=$this->method?>'== 'details'"  ng-model="tipoPago"  <?= $this->method!='create'?'ng-init="tipoPago=\''.$cliente->tipo_pago.'\'"':''?>>
                                        </div>
                                    </div> 
                                    <div class="col-lg-3">                                                                                                                                        
                                        <div class="form-group">
                                            <label>Régimen Fiscal * </label>
                                            <select name="regimenFiscal"  class="form-control"   ng-required="form.f_regimenFiscal"  ng-options="f_regimenFiscal.c_RegimenFiscal as f_regimenFiscal.Descripcion for f_regimenFiscal in regimenFiscal"   ng-model="f_regimenFiscal" ng-readonly=" '<?=$this->method?>'== 'details'"  <?= $this->method!='create'?'ng-init="f_regimenFiscal = f_regimenFiscal.c_RegimenFiscal=\''.$cliente->regimenFiscal.'\'"':''?>>
                                                        <option value=""> [ Elegir ] </option>

                                            </select>                                        </div>
                                    </div> 
                                    <div class="col-lg-3">
                                        <div class="form-group" >
                                            <label>Uso de CFDI * </label>
                                            <select name="usoCFDI"  class="form-control" ng-required="form.f_usoCfdi"   ng-options="f_usoCFDI.c_UsoCFDI as f_usoCFDI.Descripcion for f_usoCFDI in usoCfdi"   ng-model="f_usoCFDI" ng-disabled="'<?=$this->method?>'== 'create' && !f_regimenFiscal "  <?= $this->method!='create'?'ng-init="f_usoCFDI = f_usoCFDI.c_UsoCFDI=\''.$cliente->usoCFDI.'\'"':''?>>
                                                        <option value=""> [ Elegir ] </option>

                                            </select>
                                        </div>
                                         
                                    </div>                                 
                                    <div class="col-lg-3">  
                                        <div class="form-group" >
                                            <label>Forma de Pago *</label>
                                            <select name="formapago"  class="form-control"  ng-required="form.f_formaPago"  ng-options="f_formaPago.c_FormaPago as f_formaPago.Descripcion for f_formaPago in formasPago"  ng-model="f_formaPago" ng-disabled="'<?=$this->method?>'== 'create' && !f_usoCFDI"    <?= $this->method!='create'?'ng-init="f_formaPago=f_formaPago.c_FormaPago = \''.$cliente->formapago.'\'"':''?>>
                                                <option value=""> [ Elegir ] </option>
                                            </select>
                                        </div>

                                    </div> 
                                    
                                </div><!--/row--->

                                <div class="row"><!--row -->   
                                    <div class="col-lg-6"  >
                                        <div class="form-group">
                                            <label>Banco(FE)</label>
                                                <?=form_dropdown('bancoFe',array(''=>'Seleccione Banco')+$bancosFe,false,'class="form-control"  ng-model="bancoFe" ng-required="form.f_formaPago"  ng-disabled="!f_formaPago  || f_formaPago==\'01\' "     '.($this->method== 'details'?'disabled':'').' '.($this->method!='create'?'ng-init="bancoFe = \''.$cliente->bancoFe.'\'"':'') )?>
                                        </div>
                                    </div>          
                                    <div class="col-lg-6" >
                                        <div class="form-group">
                                            <label>Cuenta Bancaria(FE)</label>
                                            <input type="text" min="0" name="bancoCta" maxlength="4" class="form-control" ng-required="form.bancoFe"  ng-disabled="!bancoFe"  ng-model="cuentaBancaria"  <?=$this->method!='create'?'ng-init="cuentaBancaria = \''.$cliente->bancoCta.'\'"':''?>    >
                                        </div>
                                    </div>                                     

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Banco</label>
                                            <textarea  name="banco" class="form-control"  ng-readonly="'<?=$this->method?>'== 'details'"  ng-model="banco" rows="3" <?=$this->method!='create'?'ng-init="banco = \''.$cliente->banco.'\'"':''?>    ></textarea>

                                        </div>
                                    </div>
                                </div><!--/row--->
                                <div class="row"><!--row -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Almacén *</label>
                                            <select name="almacen"  class="form-control"  ng-required="form.f_almacen"  ng-options="f_almacen.id_almacen as f_almacen.Descripcion for f_almacen in almacenes "   ng-model="f_almacen" ng-readonly=" '<?=$this->method?>'== 'details'"  <?= $this->method!='create'?'ng-init="f_almacen=f_almacen.id_almacen = \''.$cliente->almacen.'\'"':''?>>
                                                        <option value=""> [ Elegir ] </option>
                                            </select>                                       
                                         </div>
                                    </div> 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo</label>
                                            <?=form_input('grupo',NULL,'class="form-control"  ng-required="form.grupo"  ng-model="grupo"   ng-init="grupo=\''.$cliente->grupo.'\'"  '.($this->method!='create' || $tipo == 'elite'?'readonly':''))?>    

                                        </div>
                                    </div> 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Jurisdicción</label>
                                                <?=form_dropdown('jurisdiccion',array('0'=>'Seleccione Jurisdicción')+$jurisdiccion,false,'class="form-control"  ng-model="jurisdiccion"  '.($this->method== 'details'?'readonly':'') .' '.($this->method!='create'?'ng-init="jurisdiccion = \''.$cliente->jurisdiccion.'\'"':'') )?>
                                        </div>
                                    </div>          
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Crédito ($)</label>
                                            <input type="number" name="credito" class="form-control"  ng-readonly="'<?=$this->method?>'== 'details'"  step='0.01' ng-model="credito" <?=$this->method!='create'?'ng-init="credito = '.$cliente->credito.'"':''?>>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Días de Crédito</label>
                                            <input type="number" name="dias_credito" class="form-control"   ng-readonly="'<?=$this->method?>'== 'dtails'"  ng-model="diasCredito" <?=$this->method!='create'?'ng-init="diasCredito = '.$cliente->dias_credito.'"':''?>>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Días de Tolerancia</label>
                                            <input type="number" name="tolerancia" class="form-control"  ng-readonly="'<?=$this->method?>'== 'details'"  ng-model="diasTolerancia" <?=$this->method!='create'?'ng-init="diasTolerancia = '.$cliente->tolerancia.'"':''?>>
                                        </div>
                                    </div>     

                                </div><!--/row--->
                                <div class="row"><!--row -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Vendedor *</label>
                                            <select name="vendedor"  class="form-control"   ng-options="f_vendedor.id_usuario as f_vendedor.nombres for f_vendedor in vendedores "   ng-required="form.f_vendedor"  ng-model="f_vendedor" ng-readonly=" '<?=$this->method?>'== 'details'"  <?= $this->method!='create'?'ng-init="f_vendedor=f_vendedor.id_usuario = \''.$cliente->vendedor.'\'"':''?>>
                                                        <option value=""> [ Elegir ] </option>
                                            </select>  
                                        </div>
                                    </div> 
             
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tipo de cartera</label>
                                                <?=form_dropdown('tipoCartera',array('0'=>'Seleccione')+$tipo_cartera,false,'class="form-control"  ng-model="tipoCartera"  '.($this->method== 'details'?'disabled':'') .' '.($this->method!='create'?'ng-init="tipoCartera = \''.$cliente->tipoCartera.'\'"':'') )?>
                                        </div>
                                    </div>          
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Clue</label>
                                            <input type="text" name="clue" class="form-control" size="25"  ng-readonly="'<?=$this->method?>'== 'details'"  ng-model="clue"  <?=$this->method!='create'?'ng-init="clue = \''.$cliente->clue.'\'"':''?>>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>IMSS</label>
                                            <?=$cliente->imss?>
                                            <div class="input-group ">
                                                <!--?=form_checkbox(array(                         
                                                              //'ng-model' =>'IMS',       
                                                                //'value'=>$cliente->imss
                                                            ));?-->
                                                            <input type="checkbox" name="imss" <?=$cliente->imss == 1?'checked':''?> value="<?=$cliente->imss?>" />

                                                        </div>

                                        </div>
                                    </div>


                                </div><!--/row--->
                                <div class="row"><!--row -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Observaciones</label>
                                                <textarea  name="observaciones" class="form-control"  ng-readonly="'<?=$this->method?>'== 'details'"  ng-model="observaciones" rows="6" <?=$this->method!='create'?'ng-init="observaciones = \''.$cliente->observaciones.'\'"':''?>    ></textarea>

                                            </div>
                                        </div>
                                </div><!--/row--->

                                <br>
                                <h3>Permisos</h3>
                                <div class="divider"></div>
                                <div class="alert alert-danger">Se suspenderá la venta de productos biológicos, toxoides, antitoxinas, vacunas, sueros, hemoderivados y controlados al vencer una anualidad a partir de la última auditoría. Toda venta cesará en la fecha de vencimiento.</div>

                                <div class="row"><!--row -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Establecimiento</label>
                                            <?=form_dropdown('establecimiento',array(' '=>'No definido')+$establecimientos,false,'class="form-control"  ng-model="establecimiento"  ng-init="establecimiento=\''.$cliente->establecimiento.'\'" "  '.($this->method== 'details'?'disabled':'') )?>
                                        </div>
                                    </div>                                 
                                </div><!--/row--->

                                <div class="row"><!--row -->
 
                                    <div class="col-lg-6">
                                    <?php $cliente->auditoria=='0000-00-00'?$cliente->auditoria=null:$cliente->auditoria?>    

                                        <div class="form-group">
                                            <label>Última auditoría	</label>
                                            <?php if($this->method!='details'):?>

                                            <div class="input-group ">
                                                <?=form_input('auditoria',$cliente->auditoria,' id="date_a" class="form-control" selector="form-control" uib-datepicker-popup="yyyy-MM-dd" 
                                                                    ng-init="auditoria=\''.$cliente->auditoria.'\'"
                                                                    ng-model="auditoria"
                                                                    is-open="status.auditoria"
                                                                    close-text="Cerrar"
                                                                    clear-text="Borrar"
                                                                    current-text= "Hoy"
                                                                    datepicker-options="dateOptions" 
                                                                    placeholder="Formato yyyy-MM-dd"
                                                                    date-disabled="disabled(date_a, mode)"

                                                    
                                                    ')?>
                                                <!--ng-required="form.complemento" -->

                                                <span class="input-group-btn">                    
                                                    <button type="button" class="btn btn-default" ng-click="status.auditoria = true"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                            <?php endif; ?>                                            
                                            <input type="text" ng-if="'<?=$this->method?>'== 'details'"  name="auditoria" class="form-control "   ng-model="auditoria.value" ng-readonly="'<?=$this->method?>'!= 'create'"  >


                                        </div>
                                     </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Vencimiento</label>
                                            <?php if($this->method!='details'):?>

                                            <?php $cliente->vencimiento=='0000-00-00'?$cliente->vencimiento=null:$cliente->vencimiento?>    
                                            <div class="input-group ui-datepicker ">
                                                <?=form_input('vencimiento',$cliente->vencimiento,' id="date_v" class="form-control" selector="form-control" uib-datepicker-popup="yyyy-MM-dd" 
                                                                    ng-init="vencimiento=\''.$cliente->vencimiento.'\'"
                                                                    ng-model="vencimiento"
                                                                    is-open="status.vencimiento"
                                                                    close-text="Cerrar"
                                                                    clear-text="Borrar"
                                                                    current-text= "Hoy"
                                                                    placeholder="Formato yyyy-MM-dd"
                                                                    datepicker-options="dateOptions" 
                                                                    date-disabled="disabled(date_v, mode)"
                                                    ')?>
                                                    <!--ng-required="form.complemento" -->

                                                <span class="input-group-btn">                    
                                                    <button type="button" class="btn btn-default" ng-click="status.vencimiento = true"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                            <?php endif; ?>                                            
                                            <input type="text" ng-if="'<?=$this->method?>'== 'details'"  name="vencimiento" class="form-control "   ng-model="vencimiento.value" ng-readonly="'<?=$this->method?>'!= 'create'"  >


                                        </div>
                                    </div>                                   
                                </div><!--/row--->


                                <div class="row"><!--row -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <!--?=form_checkbox(array(                                      
                                                                'name'     => 'permitir_surtimiento',
                                                                $cliente->permitir_surtimiento == 1?'checked':'',
                                                                'value'=>$cliente->permitir_surtimiento,
                                                                'ng-model' => "permitirSurtimiento",
                                                                'id'=>"permitir_surtimiento"

                                                            ));?-->
                                                            <input type="checkbox" name="permitir_surtimiento" <?=$cliente->permitir_surtimiento == 1?'checked':''?> value="<?=$cliente->permitir_surtimiento?>" />

                                        <label>Permitir Surtimiento sin OC/Pedido</label>

                                        </div>
                                    </div> 
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <!--?=form_checkbox(array(                                      
                                                                'name'     => 'sector_salud',
                                                                'ng-false-value'    => 'false',
                                                                'ng-true-value' => "1",
                                                                'ng-init'  => 'imms = false',
                                                                'ng-model' => "sectorSalud",
                                                                'id'=>"sector_salud"

                                                            ));?-->
                                           <input type="checkbox" name="sector_salud" <?=$cliente->sector_salud == 1?'checked':''?> value="<?=$cliente->sector_salud?>" />

                                        <label>Sector Salud</label>

                                        </div>
                                    </div> 
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <!--?=form_checkbox(array(                                      
                                                                'name'     => 'permitir_envio_paqueteria',
                                                                'ng-false-value'    => 'false',
                                                                'ng-true-value' => "1",
                                                                'ng-init'  => 'imms = false',
                                                                'ng-model' => "permitirEnvioPaqueteria",
                                                                'id'=>"permitir_envio_paqueteria"

                                                            ));?-->
                                        <input type="checkbox" name="permitir_envio_paqueteria" <?=$cliente->permitir_envio_paqueteria == 1?'checked':''?> value="<?=$cliente->permitir_envio_paqueteria?>" />

                                        <label>Envío por Paquetería</label>

                                        </div>
                                    </div> 
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <!--?=form_checkbox(array(                                      
                                                                'name'     => 'permitir_envio_refrigerados',
                                                                'ng-false-value'    => 'false',
                                                                'ng-true-value' => "1",
                                                                'ng-init'  => 'imms = false',
                                                                'ng-model' => "permitirEnvioRefrigerados",
                                                                'id'=>"permitir_envio_refrigerados"

                                                            ));?-->

                                        <input type="checkbox" name="permitir_envio_refrigerados" <?=$cliente->permitir_envio_refrigerados == 1?'checked':''?> value="<?=$cliente->permitir_envio_refrigerados?>" />

                                        <label>Envío de Refrigerados</label>

                                        </div>
                                    </div> 

                                </div><!--/row--->


                                <div class="row"><!--row -->
                                    <?php foreach($permisos as $i => $p):
                                        if($i != 1){?>								
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                    <!--?=form_checkbox(array(                                      
                                                                    'name'     => 'permisos[]',
                                                                    'ng-false-value'    => 'false',
                                                                    'ng-true-value' => "$i",
                                                                   // 'ng-init'  => 'imms = false',
                                                                    'ng-model' => "form.permisos$i",
                                                                    'id'=>"permisos$i"
                                                                ));?-->
                                                 <input type="checkbox" name="permisos[]" <?=count($cliente->permisos)>0?in_array($i,$cliente->permisos)?'checked':'':''?> value="<?=$i?>" />

                                                <label for="permisos<?=$i?>"><?=$p?></label>
                                             </div>
                                         </div> 
                                    <?php }else{
                                        
                                        }endforeach;?>
                                </div><!--/row--->


                                <a href="#" ng-click="nuevoConfignatario()" uib-tooltip="Ingresar Nuevo Consignatario" class="btn btn-primary pull-right">Nuevo Consignatario</a>    
                                <div class="row" ng-if="consignatarios.length">
                                    <h3>Consignatarios</h3>

                                    <div class="divider"></div>
                                    <div class="row"><!--row -->
                                        <div class="col-lg-12">
                                            <uib-accordion ng-if="consignatarios.length > 0 && '<?=$this->method?>'!= 'details'" close-others="!oneAtATime" class="ui-accordion">
                                                <uib-accordion-group class="panel-default" is-open="true" ng-if="'<?=$this->method?>'!= 'details'"  ng-repeat="cosignatario in consignatarios" ng-scroll="cosignatario in consignatarios">
                                                        <div>
                                                            {{cosignatario.texto}}
                                                            <input type="hidden" name="cosignatarios[]" value="{{cosignatario}}"/>

                                                            <i class="pull-right glyphicon" ng-class="{'fa fa-chevron-down': isopen, 'fa fa-chevron-right': !isopen}"></i>
                                                        </div>
                                                </uib-accordion-group>
                                            </uib-accordion>
                                        </div>                                 
                                    </div><!--/row--->
                                </div><!--/row--->

                        <!--/div--><!-- /panel-body --> 
                        <!--/div-->

        </div><!-- /col-md-12 -->

    </div>     <!-- /row -->

         <div class="form-actions">
            <?php if($this->method!='details'):?>

                <!--a href="#"    ng-click="saveCFDI()" class="btn btn-w-md ui-wave btn-primary "><?=lang('buttons:save')?></a-->    
                <button  type="submit"class="btn btn-w-md ui-wave btn-primary "><?=lang('buttons:save')?></button>    

            <?php endif;?>

            <a href="<?=base_url('/clientes')?>"  class="btn btn-w-md ui-wave btn-danger">Cancelar</a>
         </div>

 
    <?php echo form_close();?>
    <!--/div-->


    <div ng-if="send == true">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>

    </true>

</section>


<!----inicia modal--->
    <script type="text/ng-template" id="consignatario.html">
        <div class="modal-header" >
            <h4 class="text-success">Agregar Consignatario</h4>
        </div>

        <?php  echo form_open('','name="frm" id="frm"');?>
            <div class="modal-body">
        

                    
                            <div ng-bind-html="message" ng-if="message" class="alert alert-info" ng-class="{'alert-success':!form.id && status,'alert-danger':!form.id && !status}"></div>


                            <div class="form-group">
                                    <label>Consignatario</label>
                                    <textarea  name="addConsignatario" class="form-control"   ng-model="consignatario"rows="3"></textarea>
                            </div>  
                            
                            <div class="row"><!--row -->
                                    <?php foreach($permisos as $i => $p):
                                        if($i != 1){?>								
                                        <div class="col-lg-3">
                                            <div class="form-group">

                                                 <input type="checkbox" name="permisosCon[]"  value="<?=$i?>" />

                                                <label for="permisos<?=$i?>"><?=$p?></label>
                                             </div>
                                         </div> 
                                    <?php }else{
                                        
                                        }endforeach;?>
                                </div><!--/row--->
            </div>

            <div class="modal-footer">                 
                <button type="button" ui-wave class="btn btn-flat" ng-click="cancel()">Cancelar</button>
                <button type="button" ui-wave class="btn btn-flat btn-primary" ng-click="save(consignatario)" ng-readonly="!consignatario">Aceptar</button-->
            </div>    
        </div>
        <?php echo form_close(); ?>                       

    </script>
<!----fin modal--->



<!----inicia modal historico--->
<script type="text/ng-template" id="historico.html">
        <div class="modal-header" >
            <h4 class="text-success">Historico de Modificaciones</h4>
        </div>

        <?php  echo form_open('','name="frmH" id="frmH"');?>
            <div class="modal-body">

            <div ng-bind-html="message" ng-if="message" class="alert alert-info" ng-class="{'alert-success':!form.id && status,'alert-danger':!form.id && !status}"></div>
            
                <table class="table-striped" ng-if="historico.length > 0">
                            <thead>
								<tr>
									<th>Usuario</th>
									<th>Fecha</th>
									<th>Modificación</th>
								</tr>
							</thead>

                            <tr ng-repeat="mov in historico">
                                <td> {{mov.user}} </td>
                                <td> {{mov.fecha}} </td>
                                <td ng-bind-html="mov.modif"></td>

                            <tr>

                
                </table>
                            

            </div>

            <div class="modal-footer">                 
                <button type="button" ui-wave class="btn btn-flat" ng-click="cancel()">Cerrar</button>
            </div>    
        </div>
        <?php echo form_close(); ?>                       

    </script>
<!----fin modal historico--->
