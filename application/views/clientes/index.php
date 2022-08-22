<section ng-controller="IndexCtrl">
        
    

    <div class="row col-md-12">
    <?php if(isAdmin() or isAdminCXC2011()){ ?>
        <a href="clientes/create" uib-tooltip="Nuevo Cliente" class="btn btn-primary pull-right">Nuevo Cliente</a> 
        <?php }
        else if($_SESSION['id_tipousuario'] == 50){
					?>
                    <a href="clientes/create/elite" uib-tooltip="Nuevo Cliente" class="btn btn-primary pull-right">Nuevo Cliente Elite</a> 
				<?php
				} ?>
            <div class="btn-group pull-right">

                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reportes <span class="caret"></span>
                          </button>
                             <ul class="dropdown-menu">
                             <?php if(isAdmin() or isAdminCXC2011() or $_SESSION[id_usuario] == 491){ ?>

                                <li><a href="http://sistema.difasa.com.mx/reporte_cxc.php">CXC por periodo</a> </li>
                             <?php }?>
                             <?php if(isAdmin() or isAdminCXC2011()){ ?>
                                <li><a href="http://sistema.difasa.com.mx/reporte_ventas_rango.php">Ventas mensuales por vendedor</a> </li>
                                <li><a href="http://sistema.difasa.com.mx/reporte_pagos.php">Pagos por mes y cliente</a> </li>
                                <li><a href="http://sistema.difasa.com.mx/reporte_3.php">Pagos Triple</a> </li>
                                <?php if(count($clientes) > 0){?>

                                    <li><a href="#">Descargar</a> </li>
                                 <?php }
                                 }?>
                            </ul>
            </div>         


   
   
            <h2 class="text-info">Clientes</h2>
            <!--div class="input-group">
                <input type="text" class="form-control" data-ng-model="search_asignados" placeholder="Buscar series, email o nombre" />
                     <span class="input-group-btn">
                        <button class="btn" ng-click="search()"><i class="fa fa-search"></i></button>
                     </span>
                
            </div-->

            <hr />
            <?php echo form_open(''/* $this->uri->uri_string()  */,'class="form-inline" method="get" id="form_search" ') ?>
            
            <div class="row"><!--row -->
                <div class="col-lg-12">
                    <uib-accordion close-others="!oneAtATime" class="ui-accordion">
                            <uib-accordion-group class="panel-default" is-open="true">
                                <uib-accordion-heading >  
                                    <div>
                                           Filtros
                                        <i class="pull-right glyphicon" ng-class="{'fa fa-chevron-down': isopen, 'fa fa-chevron-right': !isopen}"></i>
                                    </div>
                                </uib-accordion-heading>  
                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <label>Por palabra</label>
                                            <input type="text"
                                            placeholder="Buscar..."
                                            class="form-control"
                                            value="<?=$this->input->get('f_keywords')?>"
                                            name="f_keywords"
                                            style="width: 100%;"/>
                                    </div>
                                    <?php if($groups){ ?>
                                    
                                    <div class="form-group col-md-2">
                                        <label>Grupo</label>
                                        <?=form_dropdown('group',count($groups)>1?array(''=>'[ SELECCIONAR GRUPO ]')+$groups:$groups,$this->input->get('group'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                    </div>
                                    <?php }?>
                                    <?php if($estados){ ?>
                                    
                                    <div class="form-group col-md-2">
                                        <label>Estado</label>
                                        <?=form_dropdown('estado',array(''=>'[ SELECCIONAR ESTADO ]')+$estados,$this->input->get('estado'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                    </div>
                                    <?php }?>

                                    <div class="form-group col-md-2">
                                            <label>Estatus</label>
                                            <?=form_dropdown('status',array(''=>'Mostrar todos','0'=>'Activos','1'=>'Inactivos'),$this->input->get('status'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Saldo</label>
                                        <?=form_dropdown('saldo',array(''=>'Mostrar todos','0'=>'Igual a 0 ','1'=>'Mayor a 0'),$this->input->get('saldo'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Vencido</label>
                                        <?=form_dropdown('vencido',array(''=>'Mostrar todos','0'=>'Igual a 0 ','1'=>'Mayor a 0'),$this->input->get('vencido'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                    </div>



                                        <div class="form-group col-md-3">
                                            <label>Ordenar</label>
                                            <?=form_dropdown('ordenar',array(''=>'Mostrar todos','clave'=>'Clave','nombres'=>'Nombre','saldo'=>'Saldo','vencido'=>'Vencido'),$this->input->get('ordenar'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Direccion</label>
                                            <?=form_dropdown('direccion',array('asc'=>'Ascendente','desc'=>'Descendente'),$this->input->get('direccion'),'class="form-control" style="width:100%;" onchange="$(\'#form_search\').submit();" ');?>
                                        </div>

                            
                                </div>
                            </uib-accordion-group>
                     </uib-accordion>
                </div>                                 
            </div><!--/row--->
        

        <hr />
    	<div class="alert alert-info" ng-if="message" ng-bind-html="message"></div>

            
            <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.message}}</uib-alert>

     
            <div ng-if="currentPageClientes.length==0"class="alert alert-danger">No se encontraron resultados</div>
        

            <table class="table table-stripedle" ng-if="currentPageClientes.length>0">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>
                            <a href="#" ng-click="orderByField='nombres'; reverseSort = !reverseSort">
                                Cliente
                            </a>
                            
                        </th>
                        <th>
                            <a href="#" ng-click="orderByField='grupo'; reverseSort = !reverseSort">
                                Grupo
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="orderByField='ciudad'; reverseSort = !reverseSort">
                                Ciudad
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="orderByField='estado'; reverseSort = !reverseSort">
                                Estado
                            </a>
                        </th>
                        <?php if(isAdmin() or isAdminCXC2011() or isVentas2011()) { ?>    
                        <th>
                            <a href="#" ng-click="orderByField='saldo'; reverseSort = !reverseSort">
                                Saldo
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="orderByField='vencido'; reverseSort = !reverseSort">
                                Vencido
                            </a>
                        </th>                                                
                        <th>
                            <a href="#" ng-click="orderByField='tipo_pago'; reverseSort = !reverseSort">
                                Tipo de Pago
                            </a>
                        </th>    
                        <?php } ?>
                    
                        <th width="10%"></th>
                    </tr>
                </thead>

                <tr ng-repeat="cliente in currentPageClientes|filter:searchKeyword" ng-class="{'danger':cliente.estatus==1}">
                    <td>
                            <span class="text-muted">{{cliente.clave}}</span>
                            
                    </td>
                    <td>
                        <a href="#" ng-click="details(chrome)">{{cliente.nombres}}</a><br />
                        <span ng-if="cliente.estatus == 0" class="text-muted">Activo</span>
                        <span ng-if="cliente.estatus == 1" class="text-muted">Inactivo</span>

                    </td>
                    <td>{{cliente.grupo}}</td>
                    <td>{{cliente.ciudad}}</td>
                    <td>{{cliente.estado}}</td>
                    <td>{{cliente.saldo}}</td>
                    <td><a href="http://sistema.difasa.com.mx/reporte_cxc.php?cl&clClave={{cliente.clave}}" target="_blank">{{cliente.vencido}}</a></td>
                    <td>{{cliente.tipo_pago}}</td>
                    <td>

                        	<a uib-tooltip="Facturas del Cliente" target="_blank" href="http://sistema.difasa.com.mx/facturas_cliente.php?clave={{cliente.clave}}" class="btn btn-default ui-wave" ><i class="fa fa-file" aria-hidden="true"></i></a>
                            <?php if(isAdmin() or isAdminCXC2011()){?>
                                <a uib-tooltip="Editar Cliente" href="clientes/edit/{{cliente.clave}}" class="btn btn-primary ui-wave" ><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a ng-if="cliente.estatus == 0" ng-click = "cambiarStatus(cliente, cliente.clave, cliente.estatus)" uib-tooltip="Inactivar" href="#" class="btn btn-success " ><i class="fa fa-check" aria-hidden="true"></i></a>
                                <a ng-if="cliente.estatus == 1" ng-click = "cambiarStatus(cliente, cliente.clave, cliente.estatus)" uib-tooltip="Activar" href="#" class="btn btn-danger " ><i class="fa fa-ban" aria-hidden="true"></i></a>
                            <?php
								}else if($_SESSION[id_tipousuario] == 50 && false){?>
                                <a uib-tooltip="Editar Cliente Elite" href="clientes/edit/elite/{{cliente.clave}}" class="btn btn-default ui-wave" ><i class="fa fa-edit" aria-hidden="true"></i></a>
							
							<?php }	?>
                            
                    </td>
                </tr>
            </table>
            <div class="divider clearfix">
                    
                    <span class="pull-right">Total registros: {{clientes.length}}</span>
                         
                </div>        
            <div ng-if="currentPageClientes.length>0">
                    <uib-pagination class="pagination-sm"
                    ng-model="currentPage"
                    total-items="filteredClientes.length"
                    max-size="6"
                    ng-change="select(currentPage)"
                    items-per-page="numPerPage"
                    rotate="false"
                    previous-text="&lsaquo;" next-text="&rsaquo;"
                    boundary-links="true"></uib-pagination>
        </div>	
        <?php echo form_close();?>

</section>


