<!DOCTYPE html>
<html class="no-js">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>JL Trainer</title>
        <meta name="description" content="JL Trainer é uma academia situada em Jaguaríaiva.">
        <meta name="author" content="JL Trainer" />
        <meta name="keywords" content="Explore seus limites, treino, modernidade, saúde, aulas, modalidades, JL Trainer, acompanhamento, academia, qualidade, fitness
        Jaguariaíva, " />
        <meta name="Resource-type" content="Document" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,400i,700|Open+Sans" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css">
        
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.js"></script>
        
        <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
        </script>
    </head>

    <body>
        <div class="container_fluid">
            <div class="Hero__bg" style="background: url(<?php echo get_the_post_thumbnail_url(10); ?>) no-repeat 0px 0px;">
                <header class="Top" id="Header">
                    <div class="space space-default Top__container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                                &#9776;<span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="brand_logo navbar-brand navbar-brand-centered">
                                <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg"></a>
                            </div>
                        </div>
                        <div class="space_navbar_colapse collapse navbar-collapse" id="navbar-brand-centered">
                            <?php 
                                if (has_nav_menu('top-left')):
                                    wp_nav_menu(array(
                                        'theme_location'    => 'top-left',
                                        'container'         => 'nav',
                                        'container_class'   => 'Top__navigation Navigation Navigation--left',
                                        'menu_class'        => 'Navigation__list navbar-nav',
                                        'walker'            => new TopMenu_Walker()
                                    ));
                                endif; 

                                if (has_nav_menu('top-right')):
                                    wp_nav_menu(array(
                                        'theme_location'    => 'top-right',
                                        'container'         => 'nav',
                                        'container_class'   => 'Top__navigation Navigation Navigation--right',
                                        'menu_class'        => 'Navigation__list navbar-nav navbar-right',
                                        'walker'            => new TopMenu_Walker()
                                    ));
                                endif; 
                            ?>
                        </div>
                    </div>
                </header>
                <section class="Hero" id="hero">
                    <div class="Hero__container">
                        <div class="Hero__content">
                            <div class="Hero__text">
                                <?php $titulo_home = get_post(10); ?>
                                <h1 class="Hero__title"><?php echo wpautop($titulo_home->post_content); ?></h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>