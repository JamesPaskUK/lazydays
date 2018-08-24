<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <!-- <link rel="stylesheet" href="//basehold.it/24"> -->
        <!-- Custom styles for this template -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <header class="pb-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler12" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button>                 
                <div class="collapse navbar-collapse" id="navbarToggler12"> 
                    <?php wp_nav_menu( array(
                        	'menu' => 'primary',
                        	'menu_class' => 'navbar-nav mt-2 mt-lg-0 ml-auto',
                        	'menu_id' => 'menu-header-menu',
                        	'container' => '',
                        	'depth' => '2',
                        	'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                        	'walker' => new wp_bootstrap4_navwalker()
                    ) ); ?> 
                </div>                 
            </nav>
        </header>
        <main>