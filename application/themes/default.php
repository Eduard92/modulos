<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <title><?php //echo $template['title'].' - '.lang('cp:admin_title') ?></title>
        <meta name="description" content="Adminstrador">
        <meta name="keywords" content="cobacam">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Needs images, font... therefore can not be part of main.css -->
        <!--link rel="stylesheet" href="styles/loader.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300,300italic,500italic|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"-->
        <!-- end Needs images -->

        <!-- metadata needs to load before some stuff -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300,300italic,500italic|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>material/css/main.css"  type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>material/css/custom.css"  type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>material/css/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>material/css/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

        <script src="<?php echo base_url();?>material/js/vendor.js"></script>
        <script src="<?php echo base_url();?>material/js/ui.js"></script>
        <script src="<?php echo base_url();?>material/js/app.js"></script>
        <script src="<?php echo base_url();?>material/js/main.js"></script>

        <script type="text/javascript">
            var SITE_URL					= "<?php echo rtrim(site_url(), '/').'/';?>";
        </script>

    </head>

	<body>

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

                 <header class="top-header clearfix">
    <div ui-preloader></div>

    <!-- Logo -->
    <div class="logo"
         ng-class="{ 'bg-dark': ['11','31'].indexOf(main.skin) >= 0,
                     'bg-white': main.skin === '21',
                     'bg-primary': ['12','22','32'].indexOf(main.skin) >= 0,
                     'bg-success': ['13','23','33'].indexOf(main.skin) >= 0,
                     'bg-info': ['14','24','34'].indexOf(main.skin) >= 0,
                     'bg-warning': ['15','25','35'].indexOf(main.skin) >= 0,
                     'bg-danger': ['16','26','36'].indexOf(main.skin) >= 0 }">
        <a href="<?=base_url()?>">
            <!--span class="logo-icon zmdi zmdi-view-dashboard"></span-->
            
            <?php //echo Asset::img('logo.png',true);?>
            <span class="logo-text">DIFASA</span>
        </a>
    </div>

    <!-- needs to be put after logo to make it work -->
    <div class="menu-button" toggle-off-canvas>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>

    <div class="top-nav">
        <ul class="nav-left list-unstyled">
            <li>
                <a href="#/" data-toggle-nav-collapsed-min
                   md-button aria-label="toggle-nav-collapsed-min"
                   class="toggle-min"><i class="zmdi zmdi-menu"></i></a>
            </li>

            <?php //if ( ! empty($module_details['sections'])) file_partial('sections') ?>

        </ul> 
       <?php //print_r($this->current_user);?>
        <ul class="nav-right pull-right list-unstyled">

            <li class="dropdown text-normal nav-profile"    uib-dropdown is-open="status.isopenProfile">
                <a href="javascript:;" class="dropdown-toggle" uib-dropdown-toggle ng-disabled="disabled" md-button aria-label="email" aria-label="profile">
                    
                    
                    
                    <span class="hidden-xs">
                        <span><?=$this->name?></span-->
                    </span>
                </a>
                <ul class="uib-dropdown-menu with-arrow pull-right dropdown-menu-scaleIn">
                    <li>
                        <!--a href="<?=base_url('admin')?>"-->
                            <i class="zmdi zmdi-home"></i>
                            <span data-translate="DASHBOARD"></span>
                        </a>
                    </li>
                    <li>
                        <!--a href="<?=base_url('edit-profile')?>"-->
                            <i class="zmdi zmdi-account"></i>
                            <span>Editar mi perfil</span>
                        </a>
                    </li>
                    <li>
                        <!--a href="<?=base_url('admin/logout')?>"-->
                            <i class="zmdi zmdi-forward"></i>
                            <span>Cerrar sesión</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
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
                   <div class="nav-wrapper">
    <ul id="nav"
    class="nav"
    data-slim-scroll
    data-collapse-nav
    data-highlight-active>
        
        
       
	
	<li id="dashboard-link"><?php echo anchor('admin','<i class="zmdi zmdi-home"></i> <span class="ng-scope">'.'Dashboard' /*lang('global:dashboard')*/.' </span>', 'class="md-button md-ink-ripple top-link '.( true ? 'current ' : '').'"') ?></li>

		<?php 

		// Display the menu items.
		// We have already vetted them for permissions
		// in the Admin_Controller, so we can just
		// display them now.
        
        //print_r($menu_items);
        /*
        if(isset($menu_items['Perfil']))
        {
            unset($menu_items['Perfil']);
        }*/
        
	/*	foreach ($menu_items as $key => $menu_item)
		{*/
		    
            $icn=false;
           
			/*switch($key){
				case 'Configuraciones':
					$icn='<i class="zmdi zmdi-settings"></i>';
				break;
				case 'Usuarios':
					$icn='<i class="zmdi zmdi-accounts-alt"></i>';
				break;
                case 'Agregados':
					$icn='<i class="zmdi zmdi-apps"></i>';
				break;
                
                case 'Administracion':
					$icn='<i class="zmdi zmdi-balance"></i>';
				break;
                
                case 'Datos':
					$icn='<i class="zmdi zmdi-storage"></i>';
				break;
                
                case 'Perfil':
					$icn='<i class="zmdi zmdi-account"></i>';
				break;
                
                case 'Contenido':
					$icn='<i class="zmdi zmdi-globe"></i>';
				break;
                
                case 'Catalogos':
					$icn='<i class="zmdi zmdi-folder"></i>';
				break;
                
                
                
				default:
					$icn='<i class="zmdi zmdi-pages ng-scope"></i>';
				break;
				

			}*/
			/*if (is_array($menu_item))
			{
				echo '<li><a href="'.current_url().'#" class="top-link" md-button aria-label="meanu">'.$icn.lang_label($key).'</a><ul>';

				foreach ($menu_item as $lang_key => $uri)
				{
					echo '<li><a href="'.site_url($uri).'" class="" md-button aria-label="meanu">'.lang_label($lang_key).'</a></li>';

				}

				echo '</ul></li>';

			}
			elseif (is_array($menu_item) and count($menu_item) == 1)
			{
				foreach ($menu_item as $lang_key => $uri)
				{
					echo '<li><a href="'.site_url($menu_item).'" class="top-link no-submenu" md-button aria-label="meanu">'.$icn.lang_label($lang_key).'</a></li>';
				}
			}
			elseif (is_string($menu_item))
			{
				echo '<li><a href="'.site_url($menu_item).'" class="top-link no-submenu" md-button aria-label="meanu">'.$icn.lang_label($key).'</a></li>';
			}*/

		//}
	
		?>

    </ul>
</div>
            </aside>

            <div id="content" class="content-container">
                <section 
                         class="view-container {{main.pageTransition.class}}">
                         <section class="page-form-ele page" >
                            






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