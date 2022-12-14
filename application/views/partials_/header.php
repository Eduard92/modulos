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
        <a href="<?=base_url('admin')?>">
            <!--span class="logo-icon zmdi zmdi-view-dashboard"></span-->
            
            <?php echo Asset::img('logo.png',true);?>
            <span class="logo-text">dfs</span>
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
            <?php if($this->current_user->group == 'admin'): ?>
            <li class="dropdown hidden-xs" uib-dropdown is-open="status.isopenSettings">
                <a href="javascript:;" class="dropdown-toggle" uib-dropdown-toggle ng-disabled="disabled" md-button aria-label="email" aria-label="settings" aria-label="settings"><i class="zmdi zmdi-settings"></i></a>
                <div class="uib-dropdown-menu dropdown-menu-scaleIn with-arrow panel panel-default admin-options" ui-not-close-on-click>
                    <div class="panel-heading"> <span data-translate="ADMIN_OPTIONS"></span> </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>Layouts Style</p>
                            <md-radio-group ng-model="main.layout">
                                <md-radio-button value="wide">Wide</md-radio-button>
                                <md-radio-button value="boxed">Boxed</md-radio-button>
                            </md-radio-group>
                        </li>
                        <li class="list-group-item">
                            <p>Menu Style</p>
                            <md-radio-group ng-model="main.menu">
                                <md-radio-button value="vertical">Vertical</md-radio-button>
                                <md-radio-button value="horizontal">Horizontal</md-radio-button>
                            </md-radio-group>    
                        </li>
                        <li class="list-group-item">
                            <p>Additional</p>
                            <md-checkbox ng-model="main.fixedHeader" aria-label="fixedHeader"> Fixed Top Header </md-checkbox>
                            <br>
                            <md-checkbox ng-model="main.fixedSidebar" aria-label="fixedSidebar"> Fixed Sidebar Menu </md-checkbox>
                        </li>
                        <li class="list-group-item">
                            <p>
                                <span>Page Transition: </span> 
                                <span class="space"></span>
                                <select ng-model="main.pageTransition"
                                        ng-options="ageTransitionOpt.name for ageTransitionOpt in pageTransitionOpts"></select>
                            </p>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="dropdown hidden-xs" uib-dropdown is-open="status.isopenPalette">
                <a href="javascript:;" class="dropdown-toggle" uib-dropdown-toggle ng-disabled="disabled" md-button aria-label="email" aria-label="palette" aria-label="palette"><i class="zmdi zmdi-palette"></i></a>
                <div class="uib-dropdown-menu with-arrow panel panel-default skin-options dropdown-menu-scaleIn" ui-not-close-on-click>
                    <div class="panel-heading"><span data-translate="COLOR_OPTIONS"></span></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="11" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-dark item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span>
                                    </span>
                                </label>

                                <label class="skin-check">
                                    <input type="radio" name="skin" value="12" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-primary item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="13" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-success item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="14" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-info item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="15" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-warning item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="16" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-danger item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                            </div>
                            <div class="col-xs-4">
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="21" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-white item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="22" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-primary item-header"></span>
                                        <span class="bg-primary item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="23" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-success item-header"></span>
                                        <span class="bg-success item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="24" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-info item-header"></span>
                                        <span class="bg-info item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="25" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-warning item-header"></span>
                                        <span class="bg-warning item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="26" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-danger item-header"></span>
                                        <span class="bg-danger item-header"></span>
                                        <span class="bg-dark"></span> 
                                    </span>
                                </label>                                 
                            </div>
                            <div class="col-xs-4">
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="31" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-dark item-header"></span>
                                        <span class="bg-dark item-header"></span>
                                        <span class="bg-white"></span> 
                                    </span>
                                </label> 
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="32" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-primary item-header"></span>
                                        <span class="bg-primary item-header"></span>
                                        <span class="bg-white"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="33" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-success item-header"></span>
                                        <span class="bg-success item-header"></span>
                                        <span class="bg-white"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="34" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-info item-header"></span>
                                        <span class="bg-info item-header"></span>
                                        <span class="bg-white"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="35" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-warning item-header"></span>
                                        <span class="bg-warning item-header"></span>
                                        <span class="bg-white"></span> 
                                    </span>
                                </label>
                                <label class="skin-check">
                                    <input type="radio" name="skin" value="36" ng-model="main.skin">
                                    <span class="skin-item bg-body">
                                        <span class="overlay"><span class="glyphicon glyphicon-ok"></span></span>
                                        <span class="bg-danger item-header"></span>
                                        <span class="bg-danger item-header"></span>
                                        <span class="bg-white"></span> 
                                    </span>
                                </label>                                 
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            <?php endif; ?>
            <?php if ( ! empty($module_details['sections'])) file_partial('sections') ?>
            <!--li class="search-box visible-md visible-lg">
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                    <input type="text" class="form-control" placeholder="{{ 'SEARCH' | translate }}">
                    <span class="input-bar"></span>
                </div>
            </li-->
            <!--li class="dropdown" uib-dropdown is-open="status.isopenEmail">
                <a href="javascript:;" class="dropdown-toggle" uib-dropdown-toggle ng-disabled="disabled" md-button aria-label="email" aria-label="email" aria-label="email">
                    <i class="zmdi zmdi-email"></i>
                    <span class="badge badge-danger">3</span>
                </a>
                <div class="uib-dropdown-menu with-arrow panel panel-default dropdown-menu-scaleIn">
                    <div class="panel-heading"> You have 3 mails. </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="btn-icon btn-icon-round btn-success"><i class="zmdi zmdi-email"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lisa sent you a mail</span>
                                    <span class="text-muted block">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="btn-icon btn-icon-round btn-info"><i class="zmdi zmdi-email"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Jane sent you a mail</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="btn-icon btn-icon-round btn-danger"><i class="zmdi zmdi-email"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lynda sent you a mail</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>                         
                    </ul>
                    <div class="panel-footer">
                        <a href="#/mail/inbox">Show all mails.</a>
                    </div>
                </div>
            </li-->
        </ul> 
       <?php //print_r($this->current_user);?>
        <ul class="nav-right pull-right list-unstyled">

            <li class="dropdown text-normal nav-profile"    uib-dropdown is-open="status.isopenProfile">
                <a href="javascript:;" class="dropdown-toggle" uib-dropdown-toggle ng-disabled="disabled" md-button aria-label="email" aria-label="profile">
                    
                    
                    
                    <?php echo gravatar($this->current_user->email, 30,'g',false,false,'img-circle img30_30'); ?>
                    <span class="hidden-xs">
                        <span><?=$this->current_user->display_name?></span>
                    </span>
                </a>
                <ul class="uib-dropdown-menu with-arrow pull-right dropdown-menu-scaleIn">
                    <li>
                        <a href="<?=base_url('admin')?>">
                            <i class="zmdi zmdi-home"></i>
                            <span data-translate="DASHBOARD"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('edit-profile')?>">
                            <i class="zmdi zmdi-account"></i>
                            <span>Editar mi perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('admin/logout')?>">
                            <i class="zmdi zmdi-forward"></i>
                            <span>Cerrar sesi??n</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--li class="dropdown langs text-normal" data-ng-controller="LangCtrl" uib-dropdown is-open="status.isopenLang">
                <a href="javascript:;" class="dropdown-toggle active-flag" uib-dropdown-toggle ng-disabled="disabled" md-button aria-label="lang">
                    <div class="flag {{ getFlag() }}"></div>
                </a>
                <ul class="uib-dropdown-menu with-arrow    pull-right list-langs dropdown-menu-scaleIn" role="menu">
                    <li data-ng-show="lang !== 'English' ">
                        <a href="javascript:;" data-ng-click="setLang('English')"><div class="flag flags-american"></div> English</a></li>
                    <li data-ng-show="lang !== 'Espa??ol' ">
                        <a href="javascript:;" data-ng-click="setLang('Espa??ol')"><div class="flag flags-spain"></div> Espa??ol</a></li>
                    <li data-ng-show="lang !== 'Portugal' ">
                        <a href="javascript:;" data-ng-click="setLang('Portugal')"><div class="flag flags-portugal"></div> Portugal</a></li>
                    <li data-ng-show="lang !== '??????' ">
                        <a href="javascript:;" data-ng-click="setLang('??????')"><div class="flag flags-china"></div> ??????</a></li>
                    <li data-ng-show="lang !== '?????????' ">
                        <a href="javascript:;" data-ng-click="setLang('?????????')"><div class="flag flags-japan"></div> ?????????</a></li>
                    <li data-ng-show="lang !== '?????????????? ????????' ">
                        <a href="javascript:;" data-ng-click="setLang('?????????????? ????????')"><div class="flag flags-russia"></div> ?????????????? ????????</a></li>
                </ul>
            </li-->
        </ul>
    </div>
</header>
