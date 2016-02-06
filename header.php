<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link href='https://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>
    <meta name="google-site-verification" content="CaZgZyRkmNBV81Z8OsSMWq4iwf8qd53aaqdOelM2CaQ" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <!--[if IE 8]>
        <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/html5.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/inc/scripts/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>

<body <?php body_class('custombody'); ?>>

<header id="header">

    <img src="<?php echo get_template_directory_uri(); ?>/cabecera.png">
    <div class="container" style="height: 80px;">
    
        <div class="row">
            
            <div class="span3" >
               
                <div id="logo">
                        
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>">
                            
                        <?php 
                                        
                            if ( novalite_setting('novalite_custom_logo') ):
                                echo "<img src='".novalite_setting('novalite_custom_logo','url')."' alt='".__('Logo','novalite')."'>"; 
                            else: 
                                bloginfo('name');
                            endif; 
                            
                        ?>
                                
                    </a>
                            
                </div>
                
    		</div>

            <div class="span9" >
              
                <nav id="mainmenu">
             
                    <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3  )); ?>
             
                </nav> 
                               
            </div>
            
        </div>
        
    </div>

</header>