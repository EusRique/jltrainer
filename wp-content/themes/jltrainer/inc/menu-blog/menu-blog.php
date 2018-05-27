<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog | JL Trainer</title>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />     
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/blog.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');        
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');       
            }
        );
    });
</script>

</head>
<body>
<!-- header -->
    <header>
        <div class="w3layouts-top-strip">
            <div class="container">
                <div class="logo navbar-brand-centered">
                    <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg"></a>
                    <p>Blog</p>
                </div>
            </div>
        </div>
    </header>
    <div class="agile-banner">
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                
            </ol>
        </div>
    </div>