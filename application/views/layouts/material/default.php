<!doctype html>
<html>
<?php echo $template['partials']['metadata']; ?>


<body data-ng-app="app"
          id="app"
          class="app"
          data-custom-page 
          data-off-canvas-nav
          data-ng-controller="AppCtrl"
          data-ng-class=" { 'layout-boxed': main.layout === 'boxed', 
                            'nav-collapsed-min': main.menu === 'collapsed'
          } ">

        <div id="loader-container"></div>


        <header 
                 id="header"
                 class="header-container "
                 data-ng-class="{ 'header-fixed': main.fixedHeader,
                                  'bg-white': ['11','12','13','14','15','16','21'].indexOf(main.skin) >= 0,
                                  'bg-dark': main.skin === '31',
                                  'bg-primary': ['22','32'].indexOf(main.skin) >= 0,
                                  'bg-success': ['23','33'].indexOf(main.skin) >= 0,
                                  'bg-info': ['24','34'].indexOf(main.skin) >= 0,
                                  'bg-warning': ['25','35'].indexOf(main.skin) >= 0,
                                  'bg-danger': ['26','36'].indexOf(main.skin) >= 0
                 }">

                 <?php echo $template['partials']['header']; ?>

</header>

<div class="main-container" ng-controller="PyroCtrl"
             data-ng-class="{ 'app-nav-horizontal': main.menu === 'horizontal' }">
            <aside 
                   id="nav-container"
                   class="nav-container"  
                   data-ng-class="{ 'nav-fixed': main.fixedSidebar,
                                    'nav-horizontal': main.menu === 'horizontal',
                                    'nav-vertical': main.menu === 'vertical',
                                    'bg-white': ['31','32','33','34','35','36'].indexOf(main.skin) >= 0,
                                    'bg-dark': ['31','32','33','34','35','36'].indexOf(main.skin) < 0
                   }">
                   <?php echo $template['partials']['sidebar']; ?>

            </aside>

            <div id="content" class="content-container">
            <section 
                         class="view-container {{main.pageTransition.class}}">
                         <section class="page-form-ele page" >
                            
                                <div class="col-lg-12 clearfix" id="navigation_c">
                                	
                                    
                                <?php echo $template['partials']['navigation']; ?>
                                </div>
                                
                                
                                <div class="col-md-12">
                                 <?php if(empty($module_details)):?>
                                    <?php echo $template['body']; ?>
                                 <?php else:?>
                                    <section class="panel panel-default">
                                        
                                        <div class="panel-body">
                                            <div ng-controller="AlertCtrl"><?php file_partial('notices'); ?></div>
                                            <?php echo $template['body']; ?>
                                        </div>
                                    </section>
                                 <?php endif;?>
                                </div>
                             </div>
                         </section>
                </section>
                <script type="text/ng-template" id="myModalContent.html">
                            <div class="modal-header">
                                <h3>{{ modal_title }}</h3>
                            </div>
                            <div class="modal-body" ng-bind-html="modal_body">
                                
                            </div>
                            <div class="modal-footer">
                                <button ui-wave class="btn btn-flat btn-default" ng-click="cancel()">Cancel</button>
                                <button ui-wave class="btn btn-flat btn-primary" ng-click="action()" ng-if="controller">Aceptar</button>
                            </div>
                </script>
                
            </div>

        </body>

</html>