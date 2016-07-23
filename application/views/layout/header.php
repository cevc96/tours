<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tours</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>/public/img/icons/vive_training.png"/>
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>/public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>/public/css/bootstrap/bootstrap-material-design.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/fonts/material-icons.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/themes/animate.css">
        <link href="<?php echo base_url() ?>/public/css/themes/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>/public/css/themes/style.css" rel="stylesheet" />	
        <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/elements/componets.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>		
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navigation">
                    <div class="container">					
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <h1><a href="index.html"><span>Tours</span>Tematicos</a></h1>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">							
                            <div class="menu">
                                <ul class="nav navbar-nav" role="tablist">
                                    <li role="presentation"><a href="<?php echo base_url() ?>c_main" <?php if ($menu_active == "home") {echo 'class="active"';} ?>>Inicio</a></li>
                                    <li role="presentation"><a href="<?php echo base_url() ?>c_about" <?php if ($menu_active == "about") {echo 'class="active"';} ?>>Nosotros</a></li>
                                    <li role="presentation"><a href="<?php echo base_url() ?>c_services" <?php if ($menu_active == "services") {echo 'class="active"';} ?>>Servicios</a></li>								
                                    <li role="presentation"><a href="<?php echo base_url() ?>c_portfolio" <?php if ($menu_active == "portfolio") {echo 'class="active"';} ?>>Portafolio</a></li>
                                    <li role="presentation"><a href="<?php echo base_url() ?>c_contact" <?php if ($menu_active == "contact") {echo 'class="active"';} ?>>Contacto</a></li>						
                                </ul>
                            </div>
                        </div>						
                    </div>
                </div>	
            </nav>
            
        </header>