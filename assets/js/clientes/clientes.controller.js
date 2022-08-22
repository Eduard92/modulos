(function () {
    'use strict';

    angular.module('app')
    .controller('IndexCtrl',['$scope','$filter','$http','$uibModal','logger', IndexCtrl])
    .controller('InputCtrl',['$scope','$http','$rootScope','$templateCache','$uibModal' ,'logger', InputCtrl])
    .controller('consignatarioCtrl', ['$scope','$http','$uibModalInstance','$timeout','$cookies','consignatarios','logger', consignatarioCtrl])
    .controller('historicoCtrl', ['$scope','$http','$uibModalInstance','$timeout','$cookies','cliente','logger', historicoCtrl])


    function historicoCtrl($scope, $http, $uibModalInstance,$timeout,$cookies, cliente,logger) {

      $scope.historico = [];
      $scope.modif ="";
      let  data = {clave : cliente}

      $http.post(SITE_URL+'clientes/getHistorico/',data).then(function(response){
                      
        let result = response.data,
              data = result.data;

              if(result.status == true)
              {
                $scope.historico = data;

              }
              else
              {
                  $scope.message = result.message;
              }


                },true);
    
    
      $scope.cancel = function() {
        $uibModalInstance.dismiss("cancel");
      }  
    
        
          
     }
      
function consignatarioCtrl($scope, $http, $uibModalInstance,$timeout,$cookies, consignatarios,logger) {

  $scope.consignatarios = consignatarios;


  $scope.cancel = function() {
    $uibModalInstance.dismiss("cancel");
  }
/*
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



      }*/


    
    $scope.save = function(consignatario){

          $scope.message = false;
            //$scope.dispose = false;
            //$scope.dispose = true;

                            
            let data = {
              texto:consignatario
            };

 
                        $scope.consignatarios.push(data);
               //         logger.logSuccess(result.message);


                      $uibModalInstance.dismiss();


        }
      /*
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

        }*/
      
 }



    function IndexCtrl($scope,$filter,$http,$uibModal,logger)
    {
      $scope.dispose = true;
      $scope.clientes = clientes;
      $scope.searchKeywords = '';
      $scope.filteredClientes = [];
      $scope.numPerPageOpt = [3, 5, 10, 20];
      $scope.numPerPage = $scope.numPerPageOpt[2];
      $scope.currentPage = 1;
      $scope.row = '';
      $scope.select = select;
      $scope.onFilterChange = onFilterChange;
      $scope.onNumPerPageChange = onNumPerPageChange;
      $scope.onOrderChange = onOrderChange;
      $scope.search = search;
      $scope.order  = order;
      init();
      $scope.reverseSort = false;
      $scope.orderByField = 'clave';
      $scope.stores = [];


function onNumPerPageChange() {
            $scope.select(1);
            return $scope.currentPage = 1;
        };

        function onOrderChange() {
            $scope.select(1);
            return $scope.currentPage = 1;
        };

         function search() {
            $scope.filteredClientes = $filter('filter')($scope.clientes, $scope.searchKeywords);                               
            console.log($scope.searchKeywords);
            return $scope.onFilterChange();
        };

        function order(rowName) {
            if ($scope.row === rowName) {
            return;
            }
            $scope.row = rowName;
            $scope.filteredClientes = $filter('orderBy')($scope.clientes, rowName);
            return $scope.onOrderChange();
        };
        
        function select(page) {
            
            
            var end, start;
            start = (page - 1) * $scope.numPerPage;
            end = start + $scope.numPerPage;
            
            console.log(start);
            console.log(end);
            return $scope.currentPageClientes = $scope.filteredClientes.slice(start, end);
        };
        function onFilterChange() {
            $scope.select(1);
            $scope.currentPage = 1;
            return $scope.row = '';
        };
        function init() {
            
            $scope.search();
            return $scope.select($scope.currentPage);
        };




        $scope.cambiarStatus = function(cliente,clave,estatus){
          var data = {
            clave : clave,
            estatus: estatus

          };

       
  
          $http.post(SITE_URL+'clientes/updateStatus/',data).then(function(response){
                      
              let result = response.data,
                    data = result.data;
  
                    let index = $scope.currentPageClientes.indexOf(cliente);

                    console.log(index);

                    if(result.status == true)
                    {
                      cliente.estatus = data.estatus;
                      $scope.currentPageClientes.splice(index,1,cliente)
                      logger.logSuccess(result.message);

                    }
                    else
                    {
                        $scope.message = result.message;
  
                        logger.logError(result.message);
                    }
  
  
                      },true);
   
        }  
    }
    


    function InputCtrl($scope,$http,$rootScope,$templateCache, $uibModal,logger)
    {
      $scope.send = false;
      //$scope.productosFactura = productosFactura?productosFactura:[];
      $scope.factura_ =[];
      $scope.paises = paises;
      $scope.estados = estados;
      $scope.municipios = municipios;
      $scope.localidades = localidades;
      $scope.colonias = colonias;
      $scope.localidadEncontrado = false;
      $scope.municipioEncontrado = false;
      $scope.form = {};

      $scope.usoCfdi = usoCfdi;
      $scope.regimenFiscal = regimenFiscal;
      $scope.almacenes = almacenes;
      $scope.vendedores = vendedores;

      $scope.consignatarios = consignatarios?consignatarios:[];

      $scope.errorMsg ;
      $scope.formasPago = formasPago;
/*
      $scope.changeItemSelected = function(imms) {
        $scope.itemSelected = imms;
      };*/
let x = 1;
      $scope.checkItem = function(x) {
  
            imms.checked = true;

            
      };

    $scope.saveCFDI = function(){

        var data = {};
        var form = $scope.form;
        var _facturas = $scope.factura_;
        var _productos = $scope.productosFactura;

     

        $http.post(SITE_URL+'Traslado/save/',data).then(function(response){
                    
            var result = response.data,
                  data = result.data;


                  if(result.status == true)
                  {
                    location.href = SITE_URL+'traslado/details/'+$data.id;                    
                  }
                  else
                  {
                      $scope.message = result.message;

                      //logger.logError(data.message);
                  }


                    },true);

    }

    $scope.getCP = function(codigoPostal){
            var data =                  
            {         
                 cp : codigoPostal,
            }

          
          $http.post(SITE_URL+'Clientes/getDataCodPostal/',data).then(function(response){
                    
            var result = response.data,
                  data = result.data;


                  if(result.status == true)
                  {

                        $scope.f_estado = data.Nombre_Estado;
            

                        if(data.c_Municipio != null){
    
                            // $scope.municipios = data.c_Municipio;
                             $scope.f_municipio = data.municipio
                             $scope.MunicipioEncontrado = true;
                         }
                         if(data.c_Localidad != null){
    
                             $scope.f_localidad = data.localidad
                             $scope.localidadEncontrado = true;
                         }
    
                         if(data.colonias){
                             $scope.colonias = data.colonias;
                        }
                    
                     // logger.logSuccess(result.message);
                  }
                  else
                  {
                    $scope.f_estado = "";
                    $scope.f_pais = ""; 
  
                     
                      $scope.message = result.message;

                      //logger.logError(data.message);
                  }


                    },true);

        }

    
  

        $scope.$watch('f_estado',function(newValue,oldValue){
                  
                  
            if(newValue == oldValue) return false;

            
            
            $scope.f_estado = newValue;
            $scope.f_pais = "México"; 

            if( newValue == ""){
                 $scope.f_pais = ""; 
                 $scope.colonia = ""; 
                 $scope.colonias = {};
            }



            $http.post(SITE_URL+'Clientes/getMunicipios',{estado:newValue}).then(function(response){
                var result = response.data,
                  data = result.data;

                $scope.municipios = data;
                
            });

            $http.post(SITE_URL+'Clientes/getLocalidades',{estado:newValue}).then(function(response){
                var result = response.data,
                  data = result.data;

                $scope.localidades = data;
                
            });
          
      });

        $scope.f_estado_Change = function (estado) {
                $scope.f_estado = estado;
 
        }

        $scope.rfcValido = function (rfc , aceptarGenerico = true) {

          const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
          var   validado = rfc.match(re);
      
          if (!validado)  //Coincide con el formato general del regex?
              return false;
      
          //Separar el dígito verificador del resto del RFC
          const digitoVerificador = validado.pop(),
                rfcSinDigito      = validado.slice(1).join(''),
                len               = rfcSinDigito.length,
      
          //Obtener el digito esperado
                diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
                indice            = len + 1;
          var   suma,
                digitoEsperado;
      
          if (len == 12) suma = 0
          else suma = 481; //Ajuste para persona moral
      
          for(var i=0; i<len; i++)
              suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
          digitoEsperado = 11 - suma % 11;
          if (digitoEsperado == 11) digitoEsperado = 0;
          else if (digitoEsperado == 10) digitoEsperado = "A";
      
          //El dígito verificador coincide con el esperado?
          // o es un RFC Genérico (ventas a público general)?
          if ((digitoVerificador != digitoEsperado)
           && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
              return false;
          else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
              return false;
          return rfcSinDigito + digitoVerificador;
        }
        
        $scope.validaRFC = function (rfc) {
          $scope.errorMsg = null;

          var rfcCorrecto = $scope.rfcValido(rfc);  

          console.log(rfcCorrecto);

          if (!rfcCorrecto) {
            $scope.errorMsg ="El RFC ingresado es invalido"  
          }

        }
        
        
        $scope.nuevoConfignatario = function()
        {
                var modalInstance = $uibModal.open({
                            animation: true,
                            templateUrl: 'consignatario.html',
                            controller: 'consignatarioCtrl',
                            backdrop: 'static',
                            size: 'lg',
                            resolve: {
                              clave:function()
                              {
                                  return $scope.clave;
    
                              }                      
                            
                          }
    
    
            });
          }
          $scope.historico = function(cliente)
          {
                  var modalInstance = $uibModal.open({
                              animation: true,
                              templateUrl: 'historico.html',
                              controller: 'historicoCtrl',
                              backdrop: 'static',
                             // size: 'lg',
                              resolve: {
                                cliente:function()
                                {
                                    return cliente;
      
                                }                     
                              
                            }
      
      
              });
            }

          $scope.valid_form = function() {
            console.log($scope.form)
            return $scope.form.$valid;
        }
    }
    
 




})();