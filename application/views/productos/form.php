<section ng-controller="InputCtrl" >
    <div ng-if="send == false">
         <a href="#" ng-click="buscaFactura()" uib-tooltip="Reporte" class="btn btn-primary pull-right">Buscar Factura</a>    

         <div class="lead text-success"><?=lang('traslado:'.$this->method)?></div>

         <?php echo form_open('','name="frm" id="frm"');?>
    <div class="row">
        <div class="col-md-12">
            <div ng-if="productosFactura.length > 0" id="area_productos">
                <?php if($this->method =='create'):?>
                <div class="input-group ">
                    <?=form_checkbox(array(                                      
                                     'name'     => 'check_complemento',
                                     'ng-false-value'    => 'false',
                                     'ng-true-value' => 'true',
                                     'ng-init'  => 'complemento = false',
                                     'ng-model' => 'complemento',
                                     'ng-change' => 'checkAll(check)'

                                ));?>
                    <label>Carta Porte</label>
                </div><!-- /input-group -->
                <?php endif;?>


                <uib-accordion ng-if="productosFactura.length > 0" close-others="!oneAtATime" class="ui-accordion">

                <uib-accordion-group class="panel-default" is-open="isopen">
                    <uib-accordion-heading >  
                        <div>
                            Productos ({{productosFactura.length}})
                            <input type="hidden" name="productos[]" value="{{productosFactura}}"/>
                            <input type="hidden" name="facturas[]" value="{{facturas}}"/>


                             <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
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
                                <td>{{producto.descripcion}} - {{producto.claveSAT}}</td>
                                <td>{{producto.claveUnidad}} - {{producto.unidad}}</td>
                                <td>{{producto.precio_unitario}}</td>
                                <td>{{producto.impuesto}}</td>
                                <td>{{producto.precio_unitario}}</td>
                
                            </tr>
                        </tbody>
                    </table>

                     </div>
                  </uib-accordion-group>
              </uib-accordion>
                </uib-accordion>

            </div><!-- /area_productos -->
            <div ng-if="productosFactura.length == 0" class="alert alert-info text-center">Seleccione una factura para generar el CFDI de Traslado</div>
                
        </div><!-- /col-md-12 -->
    </div>     <!-- /row -->
    

         <div class="form-actions">
            <?php if($this->method!='details'):?>

                <button href="#" ng-if="productosFactura.length > 0"   class="btn btn-w-md ui-wave btn-success "><?=lang('buttons:save')?></button>    

                <a href="#" ng-if="productosFactura.length > 0"   ng-click="x()" class="btn btn-w-md ui-wave btn-primary "><?=lang('buttons:save')?></a>    

            <?php endif;?>
            <a href="<?=base_url('/traslado')?>"  class="btn btn-w-md ui-wave btn-danger">Cancelar</a>
         </div>

 
    <?php echo form_close();?>
    </div>
    <div ng-if="send == true">
    <div class="row">
        <div class="col-md-12">
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
                <input type="text" class="form-control" data-ng-model="folio" placeholder="Ingrese folio de factura" id="search" />
                    <span class="input-group-btn">
                        <button class="btn" ng-click="searchFactura()" ><i class="fa fa-search"></i></button>
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
