<section ng-controller="IndexCtrl">
<h3>Datos Extra de Productos</h3>
<p >Para generación de CFDI Traslado</p>



    <a href="#" ng-click="buscaFactura()" uib-tooltip="Ingresar nuevo producto" class="btn btn-primary pull-right">Nuevo</a>    

    
    <div class="row col-lg-12" style="top: 25px" ng-if="productos.length == 0">
        <div class="row" >
        </hr>

            <div class="alert alert-info text-center">No se encotraron registros. User el boton "Nuevo" para ingresar datos de los productos.</div>
        </div>
    </div>

    <div class="row col-md-12" ng-if="productos.length > 0">
            <h4 class="">Buscar</h4>
            <div class="input-group">
                <input type="text" class="form-control" ng-model="search_p" placeholder="Buscar por nombre, codigo de barras." />
                     <span class="input-group-btn">
                        <button class="btn"><i class="fa fa-search"></i></button>
                     </span>

            </div>
            <hr />
                <p class="text-right">Total registros: {{(productos|filter:search_p).length}}</p>  

            
            
            <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.message}}</uib-alert>
            <!--p class="text-right">Total registros:{{productos.length}}</p-->
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th >Peso</th>
                        <th style="text-align: center;" width="15%">Material Peligroso</th>

                        <th width="20%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="producto in productos  | filter:search_p|limitTo:20">
                        <td><a href="#" ng-click="details(producto)">{{producto.descripcion}}</a><br />
                            <span class="text-muted">{{producto.codigo_barras}}</span>
                        </td>

                        <td>{{producto.PesoBruto}} KG </td>
                        <td style="text-align: center;">
                                <i style='color:#009638' ng-if="producto.materialPeligroso == 1" class="fa fa-check" aria-hidden="true"></i>
                                <i style='color:#F44336' ng-if="!producto.materialPeligroso" class="fa fa-times" aria-hidden="true"></i>
                                
                        </td>

                        <td><!--a href="#" ng-click="remove(chrome)">Remover</a-->
                                <button uib-tooltip="Eliminar Datos" href="#" ng-click="delete($index,producto.id)" confirm-action class="btn btn-default btn-danger ui-wave pull-right" ><i class="fa  fa-trash" aria-hidden="true"></i></button>

                            </td>
                    </tr>
                </tbody>
            </table>
            
             <uib-pagination class="pagination-sm"
                    ng-model="currentPage"
                    total-items="pagination.total_rows"
                    max-size="4"
                    ng-change="select(currentPage)"
                    items-per-page="numPerPage"
                    rotate="false"
                    previous-text="&lsaquo;" next-text="&rsaquo;"
                    boundary-links="true"></uib-pagination>
        
        </div>
</section>


<!----inicia modal--->
<script type="text/ng-template" id="buscaProductos.html">

        <div class="modal-header"  >
            <!--h3>Buscar Factura</h3-->
            <h4 class="text-success">Buscar Producto</h4>

            <div class="input-group" ng-if="dispose">
                <input type="text" class="form-control" ng-blur="searchProductos(codigoBarras)" data-ng-model="codigoBarras" placeholder="Ingrese codigo de barras" id="search" />
                    <span class="input-group-btn">
                        <button class="btn" ><i class="fa fa-search"></i></button>
                    </span>
                
            </div>

        </div>
        <div class="row" ng-if="!dispose">
            <h4 style="text-align: center;">Espere..</h4>
            <div class="divider"></div>
            <div class="col-md-10 col-xs-offset-1">
            <md-progress-linear md-mode="indeterminate"></md-progress-linear>
            </div>

            
        </div>

        <div class="modal-body" ng-if="dispose">
        <div ng-if="encontrado == true">
                    <h4>{{producto.descripcion}}</h4>
        </div>
            <div ng-bind-html="message" ng-if="message" class="alert alert-danger"></div>

                <table class="table" ng-if="productosEncotrados.length > 0 && encontrado == false">
                        <thead>
                            <tr>
                                <th>Codigo de Barras</th>
                                <th>Producto</th>    
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="producto in productosEncotrados" >
                                <td>{{producto.codigo_barras}}</td>
                                <td>{{producto.descripcion}}<br>
                                    <sub>{{producto.sustancia_activa}} - {{producto.presentacion}}</sub>
                                </td>
                                <td>
                                    <button href="#" ng-click="getProducto(producto.id_producto)"  class="btn btn-default btn-success ui-wave pull-right" id="getDatos">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                </table>  
                <div ng-if="encontrado == true" class="row">

                    <div class=col-md-6>
                        <div class="form-group">
                                <label>Codigo de Barras</label>
                                <input type="text" class="form-control" ng-readonly="producto.codigo_barras" ng-model="producto.codigo_barras" ng-disabled="true"/>
                        </div>  

                        <div class="form-group">
                                <label>Presentacion</label>
                                <input type="text" class="form-control" ng-readonly="producto.presentacion" ng-model="producto.presentacion"ng-disabled="true"/>
                        </div>  
                    </div>

                    <div class=col-md-6>
                        <div class="form-group">
                                <label>Sustancia Activa</label>
                                <input type="text" class="form-control" ng-readonly="producto.sustancia_activa" ng-model="producto.sustancia_activa" ng-disabled="true"/>
                        </div>  
                        <div class="form-group">
                                <label>Clave SAT</label>

                                <input type="text" class="form-control" ng-blur="checkClaveSAT(producto.claveSAT)" ng-readonly='cSAT'  ng-model="producto.claveSAT"/>

                        </div>  
                    </div>
                </div>
                <div ng-if="encontrado == true" class="row">
                    <div class=col-md-6>
                        <div class="form-group">
                                <label>Peso</label>
                                <input type="number" class="form-control" ng-model="producto.peso"/>
                        </div>  


                    </div>

                    <div class=col-md-6>
 
                    <div class="form-group" ng-if="materialPeligroso == 1">
                                <label>Embalaje</label>
                                <!--input type="text" class="form-control"  ng-model="producto.embalaje" /-->
                                <select class="form-control" ng-model="producto.embalaje" ng-options="option.claveEmbalaje as option.Descripcion for option in catEmbalaje "  required>
                                 <option value=""> [ Elegir ] </option>
                                 </select>


                        </div>
                    </div>
                </div>
                
            </div>

            <div class="modal-footer" ng-if="dispose">                 
                <button type="button" ui-wave class="btn  btn-success" ng-click="save(producto,materialPeligroso)" ng-if="encontrado == true" ng-disabled="!valid_form(producto,materialPeligroso)">Guardar</button>
                <button type="button" ui-wave class="btn btn-danger" ng-click="cancel()">Cancelar</button>
                <!--button type="button" ui-wave class="btn btn-flat btn-primary" ng-click="save()" ng-disabled="!report.estatus || !report.org ">Aceptar</button-->
            </div>    
        </div>

    </script>
<!----fin modal--->
