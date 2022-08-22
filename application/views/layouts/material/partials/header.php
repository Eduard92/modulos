<header class="top-header clearfix">
    <div ui-preloader></div>

    <!-- Logo -->
    <div class="logo"   
    ng-class="{ '
                     'bg-danger': ['16','26','36'].indexOf(main.skin) >= 0 }">      
        <a href="<?=base_url()?>">
            <!--span class="logo-icon zmdi zmdi-view-dashboard"></span-->
            
            <?php echo Asset::img('logo_small.png',true);?>
            <span  class="logo-text">DIFASA</span>
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
        
        
        
        <?php echo gravatar(/*$this->current_user->email*/'Eduard@d.com', 30,'g',false,false,'img-circle img30_30'); ?>
        <span class="hidden-xs">
            <span><?=$this->userCurrent['name']?></span>
        </span>
    </a>
    <ul class="uib-dropdown-menu with-arrow pull-right dropdown-menu-scaleIn">
        <li>
            <a href="../panelv2.php">
                <i class="zmdi zmdi-home"></i>
                <span data-translate="DASHBOARD"></span>
            </a>
        </li>
        <li>
            <a href="../usuarios_gestion_modificar.php?id_usuario=<?=$this->userCurrent['id']?>">
                <i class="zmdi zmdi-account"></i>
                <span>Editar mi perfil</span>
            </a>
        </li>      <li>
            <a href="../cerrar_sesion.php">
                <i class="zmdi zmdi-forward"></i>
                <span>Cerrar sesión</span>
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
        <li data-ng-show="lang !== 'Español' ">
            <a href="javascript:;" data-ng-click="setLang('Español')"><div class="flag flags-spain"></div> Español</a></li>
        <li data-ng-show="lang !== 'Portugal' ">
            <a href="javascript:;" data-ng-click="setLang('Portugal')"><div class="flag flags-portugal"></div> Portugal</a></li>
        <li data-ng-show="lang !== '中文' ">
            <a href="javascript:;" data-ng-click="setLang('中文')"><div class="flag flags-china"></div> 中文</a></li>
        <li data-ng-show="lang !== '日本語' ">
            <a href="javascript:;" data-ng-click="setLang('日本語')"><div class="flag flags-japan"></div> 日本語</a></li>
        <li data-ng-show="lang !== 'Русский язык' ">
            <a href="javascript:;" data-ng-click="setLang('Русский язык')"><div class="flag flags-russia"></div> Русский язык</a></li>
    </ul>
</li-->
</ul>
    </div>
</header>