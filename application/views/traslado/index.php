<section ng-controller="IndexCtrl">
        
    
    <a href="<?=site_url()?>traslado/create" uib-tooltip="Reporte" class="btn btn-primary pull-right">Nuevo CFDI Traslado</a>    

    <div class="row col-md-12">
            <h4 class="text-success">Asignados</h4>
            <div class="input-group">
                <input type="text" class="form-control" data-ng-model="search_asignados" placeholder="Buscar series, email o nombre" />
                     <span class="input-group-btn">
                        <button class="btn" ng-click="search()"><i class="fa fa-search"></i></button>
                     </span>
                
            </div>

            <hr />
            
            
            <uib-alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">{{alert.message}}</uib-alert>
            <p class="text-right">Total registros:{{pagination.total_rows}}</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>SERIAL</th>
                        <th width="30%"></th>
                    </tr>
                </thead>
                <tr ng-repeat="chrome in asignaciones">
                    <td>
                        <a href="#" ng-click="details(chrome)">{{chrome.id_chromebook}}</a><br />
                        <span class="text-muted">{{chrome.email}}</span>
                    </td>
                    <td><!--a href="#" ng-click="remove(chrome)">Remover</a-->
                        	<button uib-tooltip="Remover chromebook" href="#" ng-click="add(chrome)" class="btn btn-danger ui-wave" ><i class="fa fa-user-times" aria-hidden="true"></i></button>
                        	<button uib-tooltip="Nuevo comodato" href="#" ng-click="comodato(chrome)" class="btn btn-info ui-wave" ><i class="fa fa-print" aria-hidden="true"></i></button>
                    </td>
                </tr>
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


