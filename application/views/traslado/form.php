<section ng-controller="InputCtrl" >
    <div ng-if="send == false">
         <a href="#" ng-if="'<?=$this->method?>'== 'create'" ng-click="buscaFactura()" uib-tooltip="Reporte" class="btn btn-primary pull-right">Buscar Factura</a>    

         <div class="lead text-success"><?=lang('traslado:'.$this->method)?></div>
    </div>

    <?php echo form_open('','name="form" id="form"');?>
    <div class="row">
        <div class="col-md-12" ng-if="productosFactura.length > 0 || '<?=$this->method?>'== 'details' " id="area_productos">
                <?php if($this->method =='create'):?>
                <div class="input-group ">
                    <?=form_checkbox(array(                                      
                                     'name'     => 'check_complemento',
                                     'ng-false-value'    => 'false',
                                     'ng-true-value' => 'true',
                                     'ng-init'  => 'complemento = false',
                                     'ng-model' => 'form.complemento',
                                     'ng-change' => 'checkAll(check)'

                                ));?>
                    <label>Carta Porte</label>
                </div><!-- /input-group -->
                <?php endif;?>

                <uib-accordion ng-if="productosFactura.length > 0 || '<?=$this->method?>'== 'details'" close-others="!oneAtATime" class="ui-accordion">

                <uib-accordion-group class="panel-default" is-open="true" ng-if="form.complemento == true || '<?=$this->method?>'== 'details'">
                <!--div class="panel panel-default" ng-if="complemento == true"-->
                        <!--div class="panel-heading">Complemento Carta Porte</div-->
                        <uib-accordion-heading >  
                                <div>
                                    Datos del Complemento Carta Porte

                                    <i class="pull-right glyphicon" ng-class="{'fa fa-chevron-down': isopen, 'fa fa-chevron-right': !isopen}"></i>
                                </div>
                            </uib-accordion-heading>  
                        <!--div class="panel-body"-->
                                <h4>Generales</h4>

                                <div class="row"><!--row-->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Versión</label>
                                                    <input type="text" name="version" class="form-control" ng-required="form.complemento" ng-model="version" ng-readonly="true" ng-value="'<?=$this->complemento['complemento']['Version']?>'"/>
                                        </div>
                                    </div>  
                                        
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Transporte Internacional</label>
                                                <input type="text"  class="form-control"  ng-disabled="'<?=$this->method?>'!= 'create'" ng-model="TranspInternac" ng-value="'<?=$this->complemento['complemento']['TranspInternac']?> '"/>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Total de la distancia recorrida</label>
                                            <input type="text" name="distanciaRecorrida" class="form-control " ng-disabled="'<?=$this->method?>'!= 'create'"  ng-required="form.complemento"  ng-model="distanciaRecorrida" >

                                        </div>
                                    </div>
                                </div><!--/row-->
                                
                                <div class="row"><!--row fechas-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha de Salida</label>
                                            <?php if($this->method!='details'):?>

                                            <div class="input-group ">
                                                <?=form_input('fechaSalida',NULL,'class="form-control" selector="form-control" datetime-picker="MM/dd/yyyy HH:mm" 
                                                                    ng-model="fechaSalida.value"
                                                                    ng-required="form.complemento" 
                                                                    is-open="fechaSalida.showFlag"
                                                                    close-text="Cerrar"
                                                                    date-text="Fecha"
                                                                    clear-text="Borrar"
                                                                    time-text="Hora"
                                                                    now-text="Ahora"
                                                                    today-text="Hoy"
                                                                    disabled
                                                    ')?>
                                                <span class="input-group-btn" ng-click="fechaSalida.showFlag = true;">                    
                                                    <button type="button" class="btn btn-default" ng-click="fechaSalida.showFlag = true"><i class="fa fa-calendar"></i></button>
                                                </span>
                                                <!--  g-init="fecha_deposito=\''.$deposito->fecha_deposito.'\'"-->
                                            </div>
                                            <?php endif; ?>                                            
                                            <input type="text" ng-if="'<?=$this->method?>'== 'details'"  name="fechaSalida" class="form-control "   ng-model="fechaSalida.value" ng-disabled="'<?=$this->method?>'!= 'create'"  >


                                        </div>
                                    </div> 

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha de Llegada</label>
                                            <?php if($this->method!='details'):?>
                                                <div class="input-group ">
                                                <?=form_input('fechaLlegada',NULL,'class="form-control" selector="form-control" datetime-picker="MM/dd/yyyy HH:mm" 
                                                                    ng-model="fechaLlegada.value"
                                                                    ng-required="form.complemento" 
                                                                    is-open="fechaLlegada.showFlag"
                                                                    close-text="Cerrar"
                                                                    date-text="Fecha"
                                                                    clear-text="Borrar"
                                                                    time-text="Hora"
                                                                    now-text="Ahora"
                                                                    today-text="Hoy"
                                                                    disabled
                                                    ')?>
                                                <span class="input-group-btn" ng-click="fechaLlegada.showFlag = true;">                    
                                                    <button type="button" class="btn btn-default" ng-click="fechaLlegada.showFlag = true"><i class="fa fa-calendar"></i></button>
                                                </span>                                                
                                                <!--  g-init="fecha_deposito=\''.$deposito->fecha_deposito.'\'"-->
                                            </div>
                                            <?php endif; ?>
                                            <input type="text" ng-if="'<?=$this->method?>'== 'details'"  name="fechaLlegada" class="form-control "   ng-model="fechaLlegada.value" ng-disabled="'<?=$this->method?>'!= 'create'"  >

                                        </div>
                                    </div> 

                                </div><!--/row-fechas-->
                            
                                <hr>
                                <!-- origen --> 
                                <h4>Origen</h4>
                                    <div class="row"><!-- row -->
                                        <input type="hidden"  ng-model="TipoUbicacionOrigen" ng-value="'<?=$this->complemento['TipoUbicacionOrigen']?>'">
                                        <input type="hidden"  ng-model="paisOrigen" ng-value="'<?=$this->complemento['paisOrigen']?>'">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Codigo Postal</label>
                                                        <input type="text" name="cpOrigen" class="form-control" ng-required="form.complemento"  ng-disabled="'<?=$this->method?>'!= 'create'"  ng-model="cpOrigen" ng-blur ="getCP(cpOrigen,'origen')" >
                                            </div>
                                        </div> 
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Pais</label>
                                                        <input type="text" name="paisOrigen" class="form-control" ng-required="form.complemento"  ng-disabled="'<?=$this->method?>'!= 'create'"  ng-model="paisOrigen" ng-init="paisOrigen='<?=$this->complemento['paisOrigen']?>'" disabled/>
                                            </div>
                                        </div>  
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                        <select name="EstadoOrigen"  class="form-control" ng-required="form.complemento"    ng-options="f_estado.c_Estado as f_estado.Nombre_Estado for f_estado in estados"  ng-model="f_estado" ng-change="f_estado_Change(f_estado, 'origen')" ng-disabled="cpOrigen || '<?=$this->method?>'!= 'create'">

                                                        <option value=""> [ Elegir ] </option>

                                                        </select>
                                            </div>
                                        </div> 

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Municipio</label>
                                                        <select name="MunicipioOrigen"  class="form-control" ng-required="form.complemento"   ng-options="f_municipio.c_Municipio as f_municipio.Descripcion for f_municipio in municipios"   ng-model="f_municipio" ng-disabled="cpOrigen || '<?=$this->method?>'!= 'create'">
                                                        <option value=""> [ Elegir ] </option>

                                                        </select>

                                            </div>
                                        </div> 


                                    </div><!--/row -->

                                    <div class="divider"></div>

                                    <div class="row"><!-- row-->

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Localidad</label>
                                                        <select name="localidadOrigen"  class="form-control"  ng-required="form.complemento"  ng-disabled="'<?=$this->method?>'!= 'create'"  ng-options="f_localidad.c_Localidad as f_localidad.Descripcion for f_localidad in localidades"  ng-model="f_localidad" >
                                                                <option value=""> [ Elegir ] </option>
                                                        </select>
                                            </div>
                                        </div>  
                                            
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>Colonia</label>
                                                        <select name="coloniaOrigen"  class="form-control"  ng-required="form.complemento" ng-disabled="'<?=$this->method?>'!= 'create'"  ng-options="f_colonia.c_Colonia as f_colonia.Nombre_asentamiento for f_colonia in colonias"  ng-model="f_colonia" >
                                                        <option value=""> [ Elegir ] </option>
                                                        </select>
                                            </div>
                                        </div> 

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>N° Exterior</label>
                                                        <input type="text" name="NExteriorOrigen" class="form-control"  ng-model="NExteriorOrigen" ng-disabled="'<?=$this->method?>'!= 'create'" >
                                            </div>
                                        </div> 

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>N° Interior</label>
                                                        <input type="text" name="NInteriorOrigen" class="form-control"  ng-model="NInteriorOrigen" ng-disabled="'<?=$this->method?>'!= 'create'" >
                                            </div>
                                        </div> 

                                    </div><!-- /row-->

                                    <div class="divider"></div>
                                    <div class="row"><!--row-->

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Calle</label>
                                                        <input type="text" name="CalleOrigen" class="form-control " ng-required="form.complemento"  ng-model="CalleOrigen" ng-disabled="'<?=$this->method?>'!= 'create'" >
                                            </div>            
                                        </div>                      
                                    </div><!--row-->

                                <!-- /origen --> 
                                <hr>

                                <!-- destino --> 
                                <h4>Destino</h4>
                                <div class="row">
                                    <input type="hidden"  ng-model="TipoUbicacionDestino" ng-value="'<?=$this->complemento['TipoUbicacionDestino']?>'">
                                    <input type="hidden"  ng-model="paisDestino" ng-value="'<?=$this->complemento['paisDestino']?>'">



                                        
                                    <div class="col-lg-3">
                                        <label>Codigo Postal</label>
                                                <input type="text" name="cpDestino" class="form-control" ng-required="form.complemento"  ng-model="cpDestino" ng-blur ="getCP(cpDestino,'destino')" ng-disabled="'<?=$this->method?>'!= 'create'" >

                                    </div> 
                                    <div class="col-lg-3">
                                        <label>Pais</label>
                                                <input type="text" name="paisDestino" class="form-control" ng-required="form.complemento"   ng-model="paisDestino"  ng-init="paisDestino='<?=$this->complemento['paisDestino']?>'" disabled/>
                                    </div>  
                                    <div class="col-lg-3">
                                        <label>Estado</label>
                                                <select name="EstadoDestino"  class="form-control" ng-required="form.complemento" ng-options="f_estadoDestino.c_Estado as f_estadoDestino.Nombre_Estado for f_estadoDestino in estados"  ng-model="f_estadoDestino" ng-change="f_estado_Change(f_estadoDestino,'destino')" ng-disabled="cpDestino || '<?=$this->method?>'!= 'create'">

                                                <option value=""> [ Elegir ] </option>

                                                </select>
                                    </div> 
                                    <div class="col-lg-3">
                                        <label>Municipio</label>
                                                <select name="MunicipioDestino"  class="form-control" ng-required="form.complemento"  ng-options="f_municipioDestino.c_Municipio as f_municipioDestino.Descripcion for f_municipioDestino in municipiosDestino"   ng-model="f_municipioDestino" ng-disabled="cpDestino || '<?=$this->method?>'!= 'create'">
                                                        <option value=""> [ Elegir ] </option>

                                                        </select>
                                    </div> 

                                </div>

                                <div class="divider"></div>
                                <div class="row">

                                    <div class="col-lg-3">
                                    <div class="form-group">

                                        <label>Localidad</label>
                                                <select name="localidadDestino"  class="form-control" ng-required="form.complemento" ng-disabled="'<?=$this->method?>'!= 'create'" ng-options="f_localidadDestino.c_Localidad as f_localidadDestino.Descripcion for f_localidadDestino in localidadesDestino"  ng-model="f_localidadDestino" >
                                                       <option value=""> [ Elegir ] </option>
                                                 </select>
                                    </div>
                                    </div>  
                                        
                                    <div class="col-lg-3">
                                        <label>Colonia</label>
                                        <select name="coloniaDestino"  class="form-control" ng-required="form.complemento" ng-disabled="'<?=$this->method?>'!= 'create'" ng-options="f_coloniaDestino.c_Colonia as f_coloniaDestino.Nombre_asentamiento for f_coloniaDestino in coloniasDestino"  ng-model="f_coloniaDestino" >
                                                        <option value=""> [ Elegir ] </option>
                                                </select>
                                    </div> 

                                    <div class="col-lg-3">
                                        <label>N° Exterior</label>
                                                <input type="text" name="NExteriorDestino" class="form-control"  ng-model="NExteriorDestino" ng-disabled="'<?=$this->method?>'!= 'create'" >
                                    </div> 

                                    <div class="col-lg-3">
                                        <label>N° Interior</label>
                                                <input type="text" name="NInteriorDestino" class="form-control"  ng-model="NInteriorDestino" ng-disabled="'<?=$this->method?>'!= 'create'" >
                                    </div> 

                                </div>

                                <div class="divider"></div>
                                <div class="row">

                                    <div class="col-lg-12">
                                            <div class="form-group">
                                            <label>Calle</label>

                                            <input type="text" name="CalleDestino" class="form-control " ng-required="form.complemento"  ng-model="CalleDestino" ng-disabled="'<?=$this->method?>'!= 'create'">
                                            </div>
                                    </div>                                  
                                </div>
                                <!-- /Destino --> 
                                
                                <hr>
                                <h4>Trasporte</h4>

                                <div class="row"><!--row figura de transporte-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Figura de Trasporte</label>
                                                    <?=form_dropdown('figuraTrasporte',array('0'=>'Seleccione Trasportista')+$figurasTrasporte,false,'class="form-control"  ng-model="figuraTrasporte" ng-required="form.complemento"  ng-init="figuraTrasporte=\'0\'" "  '.($this->method!= 'create'?'disabled':'') )?>
                                        </div>
                                    </div> 

                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Autotrasporte</label>
                                                 <?=form_dropdown('autotrasporte',array('0'=>'Seleccione Autotrasporte')+$autotrasporte,false,'class="form-control"  ng-model="autotrasporte" ng-required="form.complemento"  ng-init="autotrasporte=\'0\'" " '.($this->method!= 'create'?'disabled':'') )?>
                                    </div>
                                    </div> 

                                </div><!--/row-fechas-->
                       

                                <br>
                                <hr>
                            
                        <!--/div--><!-- /panel-body --> 
                        <!--/div-->
                </uib-accordion-group>  

                        <uib-accordion-group class="panel-default" is-open="false">
                            <uib-accordion-heading >  
                                <div>
                                    Productos ({{productosFactura.length}})

                                    <i class="pull-right glyphicon" ng-class="{'fa fa-chevron-down': isopen, 'fa fa-chevron-right': !isopen}"></i>
                                </div>
                            </uib-accordion-heading>  
                            <div class="clearfix">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Producto</th> 
                                        <th>Unidad</th>    
                                        <th>Precio</th>
                                        <th>Iva</th>
                                        <th>Total</th>
                                        <th>Peso</th>
                                        <th>Embalaje</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="producto in productosFactura ">
                                        <td>{{producto.cantidad}}</td>
                                        <td>{{producto.descripcion}} - {{producto.claveSAT?producto.claveSAT:producto.ClaveProdServ}}</td>
                                        <td>{{producto.claveUnidad?producto.claveUnidad:producto.ClaveUnidad}} - {{producto.unidad?producto.unidad:producto.Unidad}}</td>
                                        <td>$ {{producto.precio_unitario?producto.precio_unitario:producto.ValorUnitario}}</td>
                                        <td>{{producto.impuesto?producto.impuesto:producto.iva | number:0}} %</td>
                                        <td>$ {{producto.impuesto?(producto.precio_unitario*producto.cantidad)+((producto.precio_unitario*producto.cantidad)*producto.impuesto/100):(producto.ValorUnitario*producto.cantidad)+((producto.ValorUnitario*producto.cantidad)*producto.iva/100)| number:2}}</td>
                                        <td>{{producto.PesoBruto?producto.PesoBruto:producto.PesoEnKg}} Kg</td>
                                        <td>{{producto.Embalaje}}</td>


                        
                                    </tr>
                                </tbody>
                            </table>

                            </div>
                        </uib-accordion-group>
                </uib-accordion>
                
        </div><!-- /col-md-12 -->

    </div>     <!-- /row -->
    <div ng-if="productosFactura.length == 0  && '<?=$this->method?>'== 'create' " class="alert alert-info text-center">Seleccione una factura para generar el CFDI de Traslado</div>

         <div class="form-actions">
            <?php if($this->method!='details'):?>


                <a href="#" ng-if="productosFactura.length > 0"   ng-click="saveCFDI()" class="btn btn-w-md ui-wave btn-primary "><?=lang('buttons:save')?></a>    

            <?php endif;?>
            <?php if($this->method=='details'):?>
                <a href="#" ng-if="productosFactura.length > 0"   ng-click="xml()" class="btn btn-w-md ui-wave btn-primary ">Generar XML</a>    
            <?php endif;?>

            <a href="<?=base_url('/traslado')?>"  class="btn btn-w-md ui-wave btn-danger">Cancelar</a>
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
    <script type="text/ng-template" id="buscaFacturas.html">
        <div class="modal-header" >
            <!--h3>Buscar Factura</h3-->
            <h4 class="text-success">Buscar Factura</h4>

            <div class="input-group">
                <input type="text" class="form-control"  ng-blur="searchFactura()" data-ng-model="folio" placeholder="Ingrese folio de factura" id="search" autofocus />
                    <span class="input-group-btn">
                        <button class="btn"  ng-click="searchFactura()" ><i class="fa fa-search"></i></button>
                    </span>
                
            </div>

        </div>

        <div class="modal-body">

            <div ng-bind-html="message" ng-if="message" class="alert alert-danger"></div>

                <table class="table" ng-if="facturas.length > 0">
                        <thead>
                            <tr>
                                <th>Folio</th>
                                <th>Cliente</th>    
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="factura in facturas" >
                                <td>{{factura.folio}}</td>
                                <td>{{factura.clave}} - {{factura.nombres}}</td>
                                <td>
                                    <button href="#" ng-click="getProdutosFactura(factura.folio)"  class="btn btn-default btn-success ui-wave pull-right" id="getProductos">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                </table>   
            </div>

            <div class="modal-footer">                 
                <button type="button" ui-wave class="btn btn-flat" ng-click="cancel()">Cancelar</button>
                <!--button type="button" ui-wave class="btn btn-flat btn-primary" ng-click="save()" ng-disabled="!report.estatus || !report.org ">Aceptar</button-->
            </div>    
        </div>
    </script>
<!----fin modal--->
