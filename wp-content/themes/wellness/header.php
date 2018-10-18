<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
    <?php wp_head(); ?>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		
        
</head>

<body  <?php body_class(); ?>>
    
<!-- LOADER -->
<div id="loader-wrapper">
<div id="loader"></div>
</div>
<!-- LOADER -->
    
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="pages-header">
            <div class="main-navbar">
                <div class="navbar-wrapper">
                     <?php include 'template-parts/top-header.php'; ?>

                    <hr class="top">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>"><h2>WELL<span-point>NESS</span-point></h2>
                            </a>
                            
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false,  'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

                        </div><!-- /.navbar-collapse -->
                     
                    </nav>
                </div>
            </div>
            
            <div class="main">
                    <div class="section">
                        <div class="pages-title">
                            <h1><?php the_title(); ?></h1>
                          <p><?php the_breadcrumb(); ?></p>
                        </div>
                    </div>
            </div>
            
        </div>
        <!-- END MAIN HEADER -->