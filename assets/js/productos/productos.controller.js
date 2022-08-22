(function () {
    'use strict';
    
    angular.module('app')
    .controller('IndexCtrl',['$scope','$http','$rootScope','$uibModal','logger', IndexCtrl])

    .controller('ProductosCtrl', ['$scope','$http','$uibModalInstance','$timeout','$cookies','productos','catEmbalaje','logger', ProductosCtrl])


   
  function ProductosCtrl($scope, $http, $uibModalInstance,$timeout,$cookies, productos,catEmbalaje,logger) {

    $scope.productos = productos;
    $scope.selccionado = false;
    $scope.encontrado = false;
    $scope.producto;
    $scope.productosEncotrados;
    $scope.cSAT;
    $scope.materialPeligroso;
    $scope.catEmbalaje = catEmbalaje;
    $scope.dispose = true;



    $scope.cancel = function() {
      $uibModalInstance.dismiss("cancel");
    }

        $scope.searchProductos = function(cb)
        {
          $scope.selccionado = false;
          $scope.encontrado = false;
          $scope.productosEncotrados = [];

          $scope.message = false;

             var data = {
              codigoBarras: cb
            };

            $scope.dispose = false;

            $http.post(SITE_URL+'Productos/getProductos/',data).then(function(response){
                    $scope.dispose = true;

                    var result = response.data;
                          data = result.data;


                    if(result.status == true)
                    {
                      $scope.productosEncotrados = data;

                        logger.logSuccess(result.message);

                        if($scope.productosEncotrados.length == 1)
                            $scope.getProducto($scope.productosEncotrados[0].id_producto);
   
                    }
                    else
                    {
                        $scope.message = result.message;

                        //logger.logError(data.message);
                    }


                      },true);



        }


        $scope.getProducto = function(id)
        {
          $scope.message = false;
          $scope.dispose = false;

             var post = 
             {
              id_producto: id
            };
            $scope.selccionado = true
                        
            if( $scope.selccionado && id){

            $scope.dispose = false;

            
              $http.post(SITE_URL+'Productos/getInfoProducto/',post).then(function(response){
                
                $scope.dispose = true;
   
                var result = response.data,
                      data = result.data;

                      if(result.status == true)
                      {
                          $scope.producto = data;
                          $scope.encontrado = true;
                          $scope.message = result.message;

                          $scope.cSAT = data.claveSAT;
                          $scope.materialPeligroso = result.claveSAT;

                          //logger.logSuccess(result.message);
                      }
                      else
                      {
                          $scope.message = result.message;

                          //logger.logError(data.message);
                      }


                        },true);

             // $uibModalInstance.close();

            }
  }
  
      $scope.checkClaveSAT = function(clave){
        $scope.message = false;

          var post = {clave: clave};
                          
            $http.post(SITE_URL+'Productos/checkClaveSAT/',post).then(function(response){
                            
              var result = response.data,
                    data = result.data;

                    if(result.status == true)
                    {

                        $scope.cSAT = data.clave;
                        $scope.materialPeligroso = data.materialPeligroso;

                        //logger.logSuccess(result.message);
                    }
                    else
                    {
                      $scope.producto.claveSAT = "";
                      $scope.message = result.message;

                        //logger.logError(data.message);
                    }

                      },true);


          }

      
      $scope.save = function(p,materialPeligroso){

            $scope.message = false;

            p.materialPeligroso = materialPeligroso;

            var post = {producto: p};

            $scope.dispose = false;

                            
              $http.post(SITE_URL+'Productos/save/',post).then(function(response){

                $scope.dispose = true;

                              
                var result = response.data,
                      data = result.data;
  
                      if(result.status == true)
                      {
                        var insert = {
                            id: data,
                            id_producto: p.id_producto,
                            descripcion: p.descripcion,
                            codigo_barras: p.codigo_barras,
                            PesoBruto: p.peso,
                            materialPeligroso: p.materialPeligroso,
                            emabalaje: p.emabalaje?p.emabalaje:null

                        }

                          $scope.productos.push(insert);
                          logger.logSuccess(result.message);
                      }
                      else
                      {
                       // $scope.message = result.message;
  
                          logger.logError(result.message);
                      }
  
                        },true);
  
                        $uibModalInstance.dismiss();


          }
        
          $scope.valid_form = function (p,materialPeligroso) {
            
              if(materialPeligroso == 1){
                if(!p.claveSAT || !p.peso || !p.embalaje)
                return false;
                else
                return true;           
              }        
              else{
                if(!p.claveSAT || !p.peso )
                  return false;
                  else
                  return true;   
              }

          }
        
   }



    function IndexCtrl($scope,$http,$rootScope,$uibModal,logger)
    {

      $scope.productos = productos?productos:[];
      $scope.catEmbalaje = catEmbalaje?catEmbalaje:[];


        $scope.buscaFactura = function()
        {
                var modalInstance = $uibModal.open({
                            animation: true,
                            templateUrl: 'buscaProductos.html',
                            controller: 'ProductosCtrl',
                            backdrop: 'static',
                            size: 'lg',
                            resolve: {
                              productos:function()
                              {
                                  return $scope.productos;

                              },
                              catEmbalaje:function()
                              {
                                  return $scope.catEmbalaje;

                              }
                            
                             

                          }


            });
          }

          $scope.delete = function(index,id)
          {
  
            $http.post(SITE_URL+'productos/delete',{'id':id}).then(function(response){
  
                  var result = response.data;
  
                      if(result.status)
                      {

                          $scope.productos.splice(index,1);
                        
                          
                          logger.logSuccess(result.message);
                      }
                      else
                      {
                          logger.logError(result.message);
                      }
  
                        },true);
  
              
             
          }
  
    }
    
       

})();