<head>
        <meta charset="utf-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <title><?php //echo $template['title'].' - '.lang('cp:admin_title') ?></title>
        <meta name="description" content="Adminstrador">
        <meta name="keywords" content="Difasa">
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
        <script src="<?php echo base_url();?>material/js/bootstrap/bootstrap.min.js"></script>

        <script type="text/javascript">
            var SITE_URL					= "<?php echo rtrim(site_url(), '/').'/';?>";
        </script>


        <?php echo Asset::render(); ?>

        <?php echo $template['metadata']; ?>


    </head>
